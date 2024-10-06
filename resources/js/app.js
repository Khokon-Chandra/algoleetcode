import '../css/app.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

/**
 * Font Awesome Icon
 */
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { library } from '@fortawesome/fontawesome-svg-core'
import { faPhone, faBars, faClose, faDatabase, faTerminal, faGlobe, faArchive, faAngleDown, faCheck, faCog, faSearch, faLock, faCheckCircle, faAngleLeft, faAngleRight, faIndent, faShuffle, faCaretRight, faCloudArrowUp, faNoteSticky, faCode } from '@fortawesome/free-solid-svg-icons'
library.add(faBars, faClose, faDatabase, faTerminal, faGlobe, faArchive, faAngleDown, faCheck, faCog, faSearch, faLock, faCheckCircle, faAngleLeft, faAngleRight,faIndent, faShuffle, faCaretRight, faCloudArrowUp, faNoteSticky, faCode)


const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .component("font-awesome-icon", FontAwesomeIcon)
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
