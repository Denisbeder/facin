import flatpickr from "flatpickr";
import "flatpickr/dist/l10n/pt.js";

const date = flatpickr("[data-date]", {
    locale: 'pt',
    dateFormat: "d/m/Y",
    minDate: console.log(this)
});

flatpickr("[data-time]", {
    locale: 'pt',
    inline: true,
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true,
});
