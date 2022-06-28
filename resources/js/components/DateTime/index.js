export default () => ({
    dateInstance: null,
    timeInstance: null,
    init() {
        this.$nextTick(() => {
            this.dateInstance = Flatpickr(this.$refs.date, {
                dateFormat: "d/m/Y",
                onChange: (selectedDates, dateStr, instance) => {
                    console.log('change', selectedDates);
                    this.$dispatch('teste');
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

    event: {
        ['@teste']() {
            console.log('TESTE');
        },
    },
});
