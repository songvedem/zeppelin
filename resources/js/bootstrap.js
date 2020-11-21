// Load plugins
import cash from 'cash-dom'
import axios from 'axios'
import helper from './helper'
import Echo from "laravel-echo";
// Set plugins globally
window.cash = cash
window.axios = axios
window.helper = helper

// CSRF token
let token = document.head.querySelector('meta[name="csrf-token"]')
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
}

// window.Pusher = require('pusher-js');
//
// window.Echo = new Echo({
//     broadcaster: 'my-channel',
//     key: '97818d7aa99e7cca1f0f'
// });
