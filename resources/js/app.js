import Alpine from "alpinejs";
import collapse from '@alpinejs/collapse'
import './bootstrap';
import './store';
import './components';

window.Alpine = Alpine;

Alpine.plugin(collapse);
Alpine.start();
