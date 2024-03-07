import { createApp, h } from 'vue'
import { createInertiaApp, Link, Head } from '@inertiajs/vue3'
import Layout from './Shared/Layout.vue'
import '../css/app.css';

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout || Layout
        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Link", Link)
            .component("Head", Head)
            .mount(el);
    },
    progress: {
        color: '#f87513',
    },

    title: title => `Reporte de Tendencias Ideatory - ${title}`
});

