import './bootstrap';
import Alpine from "alpinejs";
import SidebarComponent from "./components/SidebarComponent";

Alpine.data("app", () => ({
    init () {
        this.sidebar.init();       
    },
    sidebar: SidebarComponent,
}));

window.Alpine = Alpine;
Alpine.start();
