$(function () {
    activateNotificationAndTasksScroll();
});

//Activate notification and task dropdown on top right menu
function activateNotificationAndTasksScroll() {
    $('.navbar-right .dropdown-menu .body .menu').slimscroll({
        height: '254px',
        color: 'rgba(0,0,0,0.5)',
        size: '4px',
        alwaysVisible: false,
        borderRadius: '0',
        railBorderRadius: '0'
    });
}

//Google Analiytics ======================================================================================
// addLoadEvent(loadTracking);
// var trackingId = 'UA-30038099-6';

// function addLoadEvent(func) {
//     var oldonload = window.onload;
//     if (typeof window.onload != 'function') {
//         window.onload = func;
//     } else {
//         window.onload = function () {
//             oldonload();
//             func();
//         }
//     }
// }

// function loadTracking() {
//     (function (i, s, o, g, r, a, m) {
//         i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
//             (i[r].q = i[r].q || []).push(arguments)
//         }, i[r].l = 1 * new Date(); a = s.createElement(o),
//         m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
//     })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

//     ga('create', trackingId, 'auto');
//     ga('send', 'pageview');
// }
//========================================================================================================
