import './bootstrap';
import Lodash from 'lodash';
import Swal from 'sweetalert2';
import Fuse from 'fuse.js';
import Axios from 'axios';
import Sortable from 'sortablejs/modular/sortable.complete.esm.js';
import SlimSelect from 'slim-select';

import Alpine from 'alpinejs';

window.Alpine = Alpine;
window._ = Lodash
window.swal = Swal
window.Fuse = Fuse
window.Sortable = Sortable;
window.axios = Axios;
window.SlimSelect = SlimSelect;


Alpine.start();
