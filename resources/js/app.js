import Alpine from "alpinejs";
import Collapse from '@alpinejs/collapse';
import Choices from 'choices.js';
import './bootstrap';
import './store';
import './components';

window.Choices = Choices;
window.Alpine = Alpine;

Alpine.plugin(Collapse);
Alpine.start();
