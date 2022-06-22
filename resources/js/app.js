import Alpine from "alpinejs";
import Collapse from "@alpinejs/collapse";
import Choices from "choices.js";
import "./bootstrap";
import "./store";
import "./components";

window.Choices = (element, options = {}) =>
    new Choices(element, {
        allowHTML: true,
        loadingText: "Carregando...",
        noResultsText: "Nenhum resultado encontrado",
        noChoicesText: "Nenhuma opção para selecionar",
        itemSelectText: "Clique e selecione",
        addItemText: (value) => {
            return `Precione Enter e selecione <b>"${value}"</b>`;
        },
        maxItemText: (maxItemCount) => {
            return `Somente ${maxItemCount} valores podem ser adicionados`;
        },
        ...options
    });
window.Alpine = Alpine;

Alpine.plugin(Collapse);
Alpine.start();
