/* Mobile navigation is a separate component from the legacy desktop menu. */
(function () {
    'use strict';

    function setMenuOpen(menu, trigger, isOpen) {
        menu.classList.toggle('dropdown-is-active', isOpen);
        trigger.setAttribute('aria-expanded', String(isOpen));

        if (!isOpen) {
            menu.querySelectorAll('.cd-secondary-dropdown').forEach(function (submenu) {
                submenu.classList.remove('is-active');
                submenu.classList.add('is-hidden');
            });
            menu.querySelectorAll('.cd-dropdown-content').forEach(function (content) {
                content.classList.remove('move-out');
            });
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.mobail_menu').forEach(function (mobileMenu) {
            var trigger = mobileMenu.querySelector('.house_toggle');
            var menu = mobileMenu.querySelector('.cd-dropdown');

            if (!trigger || !menu) return;

            trigger.addEventListener('click', function (event) {
                event.preventDefault();
                setMenuOpen(menu, trigger, !menu.classList.contains('dropdown-is-active'));
            });

            menu.querySelectorAll('.cd-close').forEach(function (closeButton) {
                closeButton.addEventListener('click', function (event) {
                    event.preventDefault();
                    setMenuOpen(menu, trigger, false);
                    trigger.focus();
                });
            });

            menu.querySelectorAll('.has-children > a').forEach(function (submenuTrigger) {
                submenuTrigger.addEventListener('click', function (event) {
                    event.preventDefault();
                    var submenu = submenuTrigger.nextElementSibling;
                    if (!submenu) return;

                    submenu.classList.remove('is-hidden');
                    submenu.classList.add('is-active');
                    menu.querySelector('.cd-dropdown-content').classList.add('move-out');
                });
            });

            menu.querySelectorAll('.go-back a').forEach(function (backButton) {
                backButton.addEventListener('click', function (event) {
                    event.preventDefault();
                    var content = menu.querySelector('.cd-dropdown-content');
                    content.classList.remove('move-out');
                    menu.querySelectorAll('.cd-secondary-dropdown').forEach(function (submenu) {
                        submenu.classList.remove('is-active');
                        submenu.classList.add('is-hidden');
                    });
                });
            });
        });

        document.addEventListener('keydown', function (event) {
            if (event.key !== 'Escape') return;
            document.querySelectorAll('.mobail_menu').forEach(function (mobileMenu) {
                var trigger = mobileMenu.querySelector('.house_toggle');
                var menu = mobileMenu.querySelector('.cd-dropdown.dropdown-is-active');
                if (trigger && menu) {
                    setMenuOpen(menu, trigger, false);
                    trigger.focus();
                }
            });
        });
    });
}());
