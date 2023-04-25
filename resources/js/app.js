import './bootstrap';

import Alpine from 'alpinejs'

window.Alpine = Alpine

import './../../vendor/power-components/livewire-powergrid/dist/powergrid'
import './../../vendor/power-components/livewire-powergrid/dist/powergrid.css'

Alpine.start()



// Reference from published scripts
require('./vendor/livewire-ui/modal');


// Reference from vendor
require('../../vendor/livewire-ui/modal/resources/js/modal');