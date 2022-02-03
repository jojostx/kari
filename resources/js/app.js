require('./bootstrap');

import Alpine from 'alpinejs';
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import Trap from '@alpinejs/trap'
import Datepicker from '@themesberg/tailwind-datepicker/Datepicker';

const datepickerEl = document.getElementById('datepicker');

if (datepickerEl) {
    const dp = new Datepicker(datepickerEl, {
        // options
    });
}

Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(Trap)

window.Alpine = Alpine

Alpine.start()