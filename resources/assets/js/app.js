import './bootstrap';
import alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import ui from '@alpinejs/ui';

window.alpine = alpine;

alpine.plugin(focus);
alpine.plugin(ui);
alpine.start();
