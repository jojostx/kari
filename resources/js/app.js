require('./bootstrap');

import Alpine from 'alpinejs';
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import focus from '@alpinejs/focus'

Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(focus)

window.Alpine = Alpine

Alpine.start()