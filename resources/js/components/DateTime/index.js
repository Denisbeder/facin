export default () => ({
    dateInstance: null,
    timeInstance: null,
    init() {
        this.$nextTick(() => {
            const updateMinDateTo = document.querySelector(this.$refs.date.dataset.updateMinDateTo);
            const updateMaxDateTo = document.querySelector(this.$refs.date.dataset.updateMaxDateTo);

            this.dateInstance = Flatpickr(this.$refs.date, {
                dateFormat: "d/m/Y",
                onChange: (selectedDates, dateStr, instance) => {
                    updateMinDateTo && this.$nextTick(() => updateMinDateTo._flatpickr.set('minDate', dateStr));
                    updateMaxDateTo && this.$nextTick(() => updateMaxDateTo._flatpickr.set('maxDate', dateStr));
                },
            });

            this.timeInstance = Flatpickr(this.$refs.time, {
                inline: true,
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true,
            });
        });
    },

});
