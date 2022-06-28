import flatpickr from "flatpickr";
import "flatpickr/dist/l10n/pt.js";

window.Flatpickr = (item, options = {}) =>
    flatpickr(item, {
        locale: "pt",
        ...options,
    });
