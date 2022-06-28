import Choices from "choices.js";

window.Choices = (element, options = {}) =>
    new Choices(element, {
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
        ...options,
    });
