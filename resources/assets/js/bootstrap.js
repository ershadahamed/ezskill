
window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');

    // Basic blank page
    require('bootstrap');
    require('bootstrap-select');
    require('jquery-slimscroll');
    require('node-waves');

    // morris.JS
    require('jquery-countto');
    window.Raphael = require('raphael');
    require('morris.js/morris');
    require('chart.js');
    require('flot-charts/jquery.flot');
    require('flot-charts/jquery.flot.resize');
    require('flot-charts/jquery.flot.pie');
    require('flot-charts/jquery.flot.categories');
    require('flot-charts/jquery.flot.time');
    window.sparkline = require('jquery-sparkline');

    // Forms
    require('jquery-validation');
    require('jquery-steps/build/jquery.steps');
    require('sweetalert');

    //DataTables
    require('jszip');
    require('pdfmake/build/pdfmake');
    require('datatables.net/js/jquery.dataTables');
    require('datatables.net-bs/js/dataTables.bootstrap');
    require('datatables.net-buttons-bs');
    require('datatables.net-buttons/js/buttons.colVis.js');
    require('datatables.net-buttons/js/buttons.flash.js');
    require('datatables.net-buttons/js/buttons.html5.js');
    require('datatables.net-buttons/js/buttons.print.js');

} catch (e) {
    console.log(e);
}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
