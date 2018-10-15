import Vue from 'vue'
import App from './App.vue'
import router from './router'
import Vuei18n from 'vue-i18n';

Vue.use(Vuei18n);
export const i18n = new Vuei18n({
    locale: 'en',
    fallbackLocale: 'en',
    messages: {
        en: {
            welcome: 'Welcome to Your Vue.js App'
        },
        nl: {
            welcome: 'Welkom in je Vue.js App'
        }
    }
});

Vue.config.productionTip = false;

new Vue({
    router,
    i18n,
    render: h => h(App)
}).$mount('#app');
