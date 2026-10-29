(function (window, document) {
    'use strict';

    var STORAGE_KEY = 'dbt_cookie_consent';
    var POLICY_VERSION = '2026-02';
    var consent = null;
    var listeners = [];
    var loaded = { google: false, adsPhone: false };
    var googleScriptPromise = null;
    var modalReturnFocus = null;

    window.dataLayer = window.dataLayer || [];
    window.gtag = window.gtag || function () {
        window.dataLayer.push(arguments);
    };
    window.gtag('consent', 'default', {
        ad_storage: 'denied',
        analytics_storage: 'denied',
        ad_user_data: 'denied',
        ad_personalization: 'denied',
        wait_for_update: 500
    });

    function readConsent() {
        try {
            var stored = JSON.parse(window.localStorage.getItem(STORAGE_KEY) || 'null');
            if (!stored || stored.necessary !== true ||
                typeof stored.analytics !== 'boolean' || typeof stored.advertising !== 'boolean') {
                return null;
            }
            // Preserve previously chosen Analytics/Advertising values when the
            // Functional category is introduced. Never grant Functional
            // consent as part of this migration.
            if (stored.version !== POLICY_VERSION) {
                stored = {
                    necessary: true,
                    analytics: stored.analytics,
                    advertising: stored.advertising,
                    functional: false,
                    timestamp: stored.timestamp || null,
                    version: POLICY_VERSION
                };
                try { window.localStorage.setItem(STORAGE_KEY, JSON.stringify(stored)); } catch (error) { }
            }
            stored.functional = stored.functional === true;
            return stored;
        } catch (error) {
            return null;
        }
    }

    function saveConsent(next) {
        var categoryWithdrawn = !!consent &&
            ((consent.analytics && !next.analytics) ||
                (consent.advertising && !next.advertising) ||
                (consent.functional && !next.functional));
        consent = {
            necessary: true,
            analytics: !!next.analytics,
            advertising: !!next.advertising,
            functional: !!next.functional,
            timestamp: new Date().toISOString(),
            version: POLICY_VERSION
        };
        try {
            window.localStorage.setItem(STORAGE_KEY, JSON.stringify(consent));
        } catch (error) {
            // Tracking remains denied if storage is unavailable.
        }
        applyConsent();
        closePanels();
        // Third-party libraries cannot be reliably unloaded once executed.
        // Reload after a withdrawal so newly-rendered pages do not initialise
        // any category that is now denied; necessary session cookies remain.
        if (categoryWithdrawn) {
            window.setTimeout(function () { window.location.reload(); }, 0);
        }
    }

    function updateGoogleConsent() {
        window.gtag('consent', 'update', {
            ad_storage: consent.advertising ? 'granted' : 'denied',
            ad_user_data: consent.advertising ? 'granted' : 'denied',
            ad_personalization: consent.advertising ? 'granted' : 'denied',
            analytics_storage: consent.analytics ? 'granted' : 'denied'
        });
    }

    function getConsentSurface() {
        var ids = ['dbt-cookie-panel', 'dbt-chat-permission', 'dbt-cookie-banner'];
        for (var i = 0; i < ids.length; i++) {
            var surface = document.getElementById(ids[i]);
            if (surface && !surface.hidden) return surface;
        }
        return null;
    }

    function handleConsentKeydown(event) {
        if (!document.documentElement.classList.contains('dbt-consent-open')) return;
        var surface = getConsentSurface();
        if (!surface) return;

        // Escape closes only an optional preferences/chat dialog. It never
        // silently grants consent and does not dismiss the first-visit banner.
        if (event.key === 'Escape') {
            if (surface.id !== 'dbt-cookie-banner') {
                event.preventDefault();
                event.stopImmediatePropagation();
                closePanels();
            }
            return;
        }
        if (event.key !== 'Tab') return;

        var focusable = surface.querySelectorAll('a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])');
        if (!focusable.length) {
            event.preventDefault();
            return;
        }
        var first = focusable[0];
        var last = focusable[focusable.length - 1];
        if (event.shiftKey && document.activeElement === first) {
            event.preventDefault();
            last.focus();
        } else if (!event.shiftKey && document.activeElement === last) {
            event.preventDefault();
            first.focus();
        }
        event.stopImmediatePropagation();
    }

    function loadGoogleTags() {
        if ((!consent.analytics && !consent.advertising) || googleScriptPromise) {
            return googleScriptPromise;
        }

        var adsId = window.DBT_ADS_ID || 'AW-437360014';
        // Keep the existing Ads ID as the one primary Google tag loader.
        // GA4 is configured through the same gtag instance after consent;
        // this avoids a second loader when both categories are enabled.
        var loaderId = adsId;

        googleScriptPromise = new Promise(function (resolve, reject) {
            var script = document.createElement('script');
            script.async = true;
            script.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(loaderId);
            script.onload = function () {
                loaded.google = true;
                window.gtag('js', new Date());
                configureGoogleTags();
                resolve();
            };
            script.onerror = reject;
            document.head.appendChild(script);
        });
        return googleScriptPromise;
    }

    function configureGoogleTags() {
        var adsId = window.DBT_ADS_ID || 'AW-437360014';
        var ga4Id = window.DBT_GA4_MEASUREMENT_ID || '';
        if (consent.advertising && !loaded.ads) {
            window.gtag('config', adsId);
            loaded.ads = true;
        }
        if (consent.analytics && ga4Id && !loaded.ga4) {
            window.gtag('config', ga4Id);
            loaded.ga4 = true;
        }
        if (consent.advertising && !loaded.adsPhone) {
            window.DBTConsent.registerAdsPhoneConversion();
        }
    }

    function notify() {
        listeners.slice().forEach(function (listener) {
            if (consent[listener.category]) {
                listener.callback();
            }
        });
    }

    function applyConsent() {
        updateGoogleConsent();
        loadGoogleTags();
        notify();
        updateSettingsButton();
    }

    function register(category, callback) {
        listeners.push({ category: category, callback: callback });
        if (consent && consent[category]) callback();
    }

    function registerAdsPhoneConversion() {
        if (!consent || !consent.advertising || loaded.adsPhone) return;
        loaded.adsPhone = true;
        window.gtag('config', 'AW-437360014/yCZWCJDr1_QBEI6rxtAB', {
            phone_conversion_number: '+91 9994751079'
        });
    }

    function closePanels() {
        var banner = document.getElementById('dbt-cookie-banner');
        var panel = document.getElementById('dbt-cookie-panel');
        var chatPermission = document.getElementById('dbt-chat-permission');
        if (banner) banner.hidden = true;
        if (panel) panel.hidden = true;
        if (chatPermission) chatPermission.hidden = true;
        document.documentElement.classList.remove('dbt-consent-open');
        document.dispatchEvent(new CustomEvent('dbt:consent-closed'));
        if (modalReturnFocus && typeof modalReturnFocus.focus === 'function') {
            modalReturnFocus.focus();
        }
        modalReturnFocus = null;
    }

    function openPreferences() {
        var panel = document.getElementById('dbt-cookie-panel');
        if (!panel) return;
        modalReturnFocus = document.activeElement;
        panel.hidden = false;
        document.getElementById('dbt-cookie-analytics').checked = !!(consent && consent.analytics);
        document.getElementById('dbt-cookie-advertising').checked = !!(consent && consent.advertising);
        document.getElementById('dbt-cookie-functional').checked = !!(consent && consent.functional);
        document.documentElement.classList.add('dbt-consent-open');
        document.dispatchEvent(new CustomEvent('dbt:consent-open'));
        document.getElementById('dbt-cookie-analytics').focus();
    }

    function buildUi() {
        var wrapper = document.createElement('div');
        wrapper.innerHTML =
            '<section id="dbt-cookie-banner" class="dbt-cookie-banner" role="dialog" aria-labelledby="dbt-cookie-title" aria-describedby="dbt-cookie-description" hidden>' +
            '<div class="dbt-cookie-copy"><h2 id="dbt-cookie-title">Privacy choices</h2><p id="dbt-cookie-description">We use essential cookies to operate our website. With your permission, we also use functional services, analytics and advertising technologies to provide chat support, improve your experience and measure campaign performance. You can accept, reject or customize optional services at any time.</p><a href="/privacy-and-cookies-policy.php">Privacy &amp; Cookies Policy</a></div>' +
            '<div class="dbt-cookie-actions"><button type="button" class="dbt-cookie-button dbt-cookie-secondary" data-consent="reject">Reject Optional</button><button type="button" class="dbt-cookie-button dbt-cookie-secondary" data-consent="preferences">Manage Preferences</button><button type="button" class="dbt-cookie-button dbt-cookie-primary" data-consent="accept">Accept All</button></div>' +
            '</section>' +
            '<section id="dbt-cookie-panel" class="dbt-cookie-panel" role="dialog" aria-modal="true" aria-labelledby="dbt-cookie-panel-title" hidden>' +
            '<div class="dbt-cookie-panel-inner"><h2 id="dbt-cookie-panel-title">Cookie settings</h2><p>Choose which optional services you allow. Necessary cookies are always active.</p>' +
            '<label class="dbt-cookie-option"><span><strong>Necessary</strong><small>Required for forms, security and basic website functions.</small></span><input type="checkbox" checked disabled></label>' +
            '<label class="dbt-cookie-option"><span><strong>Analytics</strong><small>Google Analytics 4, Microsoft Clarity and Statcounter.</small></span><input id="dbt-cookie-analytics" type="checkbox"></label>' +
            '<label class="dbt-cookie-option"><span><strong>Advertising</strong><small>Google Ads measurement and advertising personalization.</small></span><input id="dbt-cookie-advertising" type="checkbox"></label>' +
            '<label class="dbt-cookie-option"><span><strong>Functional</strong><small>Third-party Artibot chat support.</small></span><input id="dbt-cookie-functional" type="checkbox"></label>' +
            '<div class="dbt-cookie-actions"><button type="button" class="dbt-cookie-button dbt-cookie-secondary" data-consent="reject">Reject Optional</button><button type="button" class="dbt-cookie-button dbt-cookie-secondary" data-consent="accept">Accept All</button><button type="button" class="dbt-cookie-button dbt-cookie-primary" data-consent="save">Save Preferences</button></div></div>' +
            '</section>' +
            '<section id="dbt-chat-permission" class="dbt-cookie-panel" role="dialog" aria-modal="true" aria-labelledby="dbt-chat-permission-title" hidden>' +
            '<div class="dbt-cookie-panel-inner"><h2 id="dbt-chat-permission-title">Open chat support?</h2><p>Opening Chat With Us connects you to the third-party Artibot service. Artibot may process information you choose to enter in the chat according to its own privacy policy.</p><div class="dbt-cookie-actions"><button type="button" class="dbt-cookie-button dbt-cookie-secondary" data-chat-consent="cancel">Not now</button><button type="button" class="dbt-cookie-button dbt-cookie-primary" data-chat-consent="allow">Allow Chat</button></div></div>' +
            '</section>';
        document.body.appendChild(wrapper);

        document.querySelectorAll('[data-consent]').forEach(function (button) {
            button.addEventListener('click', function () {
                var action = button.getAttribute('data-consent');
                if (action === 'accept') saveConsent({ analytics: true, advertising: true, functional: true });
                if (action === 'reject') saveConsent({ analytics: false, advertising: false });
                if (action === 'preferences') openPreferences();
                if (action === 'save') saveConsent({
                    analytics: document.getElementById('dbt-cookie-analytics').checked,
                    advertising: document.getElementById('dbt-cookie-advertising').checked,
                    functional: document.getElementById('dbt-cookie-functional').checked
                });
            });
        });
        document.querySelectorAll('[data-chat-consent]').forEach(function (button) {
            button.addEventListener('click', function () {
                if (button.getAttribute('data-chat-consent') === 'allow') {
                    saveConsent({
                        analytics: !!consent.analytics,
                        advertising: !!consent.advertising,
                        functional: true
                    });
                } else {
                    closePanels();
                }
            });
        });
        var settings = document.getElementById('dbt-cookie-settings');
        if (settings) settings.addEventListener('click', openPreferences);
        var chatButton = document.getElementById('dbt-artibot-launch');
        if (chatButton) chatButton.addEventListener('click', requestChatPermission);
    }

    function updateSettingsButton() {
        var settings = document.getElementById('dbt-cookie-settings');
        if (settings) settings.setAttribute('aria-label', 'Change cookie settings');
    }

    function requestChatPermission() {
        if (consent && consent.functional) {
            notify();
            return;
        }
        var permission = document.getElementById('dbt-chat-permission');
        if (permission) {
            modalReturnFocus = document.activeElement;
            permission.hidden = false;
            document.documentElement.classList.add('dbt-consent-open');
            document.dispatchEvent(new CustomEvent('dbt:consent-open'));
            var allow = permission.querySelector('[data-chat-consent="allow"]');
            if (allow) allow.focus();
        }
    }

    function init() {
        document.addEventListener('keydown', handleConsentKeydown);
        consent = readConsent();
        buildUi();
        if (consent) {
            applyConsent();
        } else {
            consent = { necessary: true, analytics: false, advertising: false, functional: false };
            var banner = document.getElementById('dbt-cookie-banner');
            if (banner) {
                banner.hidden = false;
                document.documentElement.classList.add('dbt-consent-open');
                document.dispatchEvent(new CustomEvent('dbt:consent-open'));
            }
        }
    }

    window.DBTConsent = {
        register: register,
        registerAdsPhoneConversion: registerAdsPhoneConversion,
        getState: function () { return consent; },
        openPreferences: openPreferences
    };

    document.addEventListener('DOMContentLoaded', init);
}(window, document));
