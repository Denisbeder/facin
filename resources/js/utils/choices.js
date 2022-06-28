import Choices from "choices.js";

const items = document.querySelectorAll("[data-select]");

items.forEach((item) => {
    new Choices(item, {
        allowHTML: true,
        removeItemButton: true,
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
    });
});
