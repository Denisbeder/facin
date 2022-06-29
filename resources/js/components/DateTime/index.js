export default () => ({
    init() {
        this.$nextTick(() => {
            Flatpickr(this.$refs.date, {
                dateFormat: "d/m/Y",
            });

            Flatpickr(this.$refs.time, {
                inline: true,
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true,
            });
        });
    },
});
