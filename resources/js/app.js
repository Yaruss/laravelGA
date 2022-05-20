require('./bootstrap');

window.Vue = require('vue').default;

import { createApp } from 'vue'

import { createStore } from 'vuex'

const store = createStore({
    state: {
        slug: ''
    },
    actions: {},
    getters: {},
    mutations: {
        SET_COMMENT_ERROR(state, payload){
            return state.errors = payload;
        }
    }
});

const app = createApp({
    created() {
        let url = window.location.pathname;
    }
});
