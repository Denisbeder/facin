import './bootstrap';
import Alpine from 'alpinejs';
import AlpineFocus from '@alpinejs/focus';
import AlpineUI from '@alpinejs/ui';

window.alpine = Alpine;

alpine.plugin(AlpineFocus);
alpine.plugin(AlpineUI);
alpine.start();
