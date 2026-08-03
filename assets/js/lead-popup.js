/* Global lead-generation popup behavior.
   Markup: includes/lead-popup.php (rendered once, absent on excluded pages).
   Styling: assets/css/lead-popup.css. */
(function () {
    'use strict';

    var LeadPopupConfig = {
        mobileBreakpoint: 768,
        desktopDelay: 30000,
        mobileDelay: 15000,
        animationDuration: 250,
        sessionKey: 'leadPopupDismissed'
    };

    var popup = document.getElementById('lead-popup');
    if (!popup) {
        // Markup wasn't rendered on this page (page opted out via
        // $showLeadPopup = false) - nothing to do.
        return;
    }

    var backdrop = document.getElementById('lead-popup-backdrop');
    var closeBtn = document.getElementById('lead-popup-close');
    var ctaLinks = popup.querySelectorAll('[data-lead-popup-cta]');

    document.documentElement.style.setProperty('--lead-popup-duration', LeadPopupConfig.animationDuration + 'ms');

    var reopenTimer = null;
    var lastFocusedEl = null;

    function isMobile() {
        return window.innerWidth < LeadPopupConfig.mobileBreakpoint;
    }

    function isDismissedForSession() {
        try {
            return sessionStorage.getItem(LeadPopupConfig.sessionKey) === '1';
        } catch (e) {
            // sessionStorage unavailable (private mode / disabled) - treat as not dismissed.
            return false;
        }
    }

    function markDismissedForSession() {
        try {
            sessionStorage.setItem(LeadPopupConfig.sessionKey, '1');
        } catch (e) {
            /* no-op if storage is unavailable */
        }
    }

    function getFocusableElements() {
        return popup.querySelectorAll(
            'a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])'
        );
    }

    function trapFocus(e) {
        if (e.key !== 'Tab') {
            return;
        }
        var focusable = getFocusableElements();
        if (!focusable.length) {
            return;
        }
        var first = focusable[0];
        var last = focusable[focusable.length - 1];

        if (e.shiftKey && document.activeElement === first) {
            e.preventDefault();
            last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
            e.preventDefault();
            first.focus();
        }
    }

    function onKeydown(e) {
        if (e.key === 'Escape') {
            closePopup();
        } else {
            trapFocus(e);
        }
    }

    function clearReopenTimer() {
        if (reopenTimer !== null) {
            clearTimeout(reopenTimer);
            reopenTimer = null;
        }
    }

    function scheduleReopen() {
        clearReopenTimer();
        if (isDismissedForSession()) {
            return;
        }
        var delay = isMobile() ? LeadPopupConfig.mobileDelay : LeadPopupConfig.desktopDelay;
        reopenTimer = setTimeout(openPopup, delay);
    }

    function openPopup() {
        if (isDismissedForSession()) {
            return;
        }
        clearReopenTimer();
        lastFocusedEl = document.activeElement;

        backdrop.hidden = false;
        popup.hidden = false;
        // Force layout before adding the transition-triggering class.
        void popup.offsetWidth;
        backdrop.classList.add('is-open');
        popup.classList.add('is-open');

        document.addEventListener('keydown', onKeydown);

        var focusable = getFocusableElements();
        if (focusable.length) {
            focusable[0].focus();
        } else {
            popup.focus();
        }
    }

    function closePopup() {
        backdrop.classList.remove('is-open');
        popup.classList.remove('is-open');
        document.removeEventListener('keydown', onKeydown);

        setTimeout(function () {
            backdrop.hidden = true;
            popup.hidden = true;
        }, LeadPopupConfig.animationDuration);

        if (lastFocusedEl && typeof lastFocusedEl.focus === 'function') {
            lastFocusedEl.focus();
        }

        scheduleReopen();
    }

    function onCtaClick() {
        markDismissedForSession();
        clearReopenTimer();
        closePopup();
        // No preventDefault(): the tel:/wa.me link navigates normally.
    }

    function onPopupClick(e) {
        // .lead-popup is a full-viewport flex container stacked above
        // #lead-popup-backdrop, so clicks never reach the backdrop's own
        // listener - close only when the click lands on the container
        // itself (the empty area around the card), not a descendant.
        if (e.target === popup) {
            closePopup();
        }
    }

    closeBtn.addEventListener('click', closePopup);
    popup.addEventListener('click', onPopupClick);
    for (var i = 0; i < ctaLinks.length; i++) {
        ctaLinks[i].addEventListener('click', onCtaClick);
    }

    document.addEventListener('DOMContentLoaded', function () {
        if (isDismissedForSession()) {
            return;
        }
        openPopup();
    });
})();
