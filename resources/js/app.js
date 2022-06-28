import Alpine from "alpinejs";
import Collapse from "@alpinejs/collapse";
import "./bootstrap";
import "./store";
import "./components";
import "./utils";

window.Alpine = Alpine;

Alpine.plugin(Collapse);
Alpine.start();
