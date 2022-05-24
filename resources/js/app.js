import './bootstrap';
import Alpine from "alpinejs";
import collapse from '@alpinejs/collapse'
import SidebarComponent from "./components/SidebarComponent";

Alpine.plugin(collapse);

Alpine.data("app", () => ({
    init () {
        this.sidebar.init();       
    },
    sidebar: SidebarComponent,
}));

window.Alpine = Alpine;
Alpine.start();
