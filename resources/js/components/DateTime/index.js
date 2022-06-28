export default () => ({
    dateInstance: null,
    timeInstance: null,
    init() {
        this.$nextTick(() => {
            this.dateInstance = Flatpickr(this.$refs.date, {
                dateFormat: "d/m/Y",
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
