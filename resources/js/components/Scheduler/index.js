export default () => ({
    dateInstance: null,
    timeInstance: null,
    getElementTimeFromElementDate(element) {
        return document.querySelector(`[name="${element.name.replace('[date]', '[time]')}"]`);
    },
    setLimitTimeFromUpdateDate(element, configName, dateStr) {
        if (element.value != '' && element.value == dateStr) {
            const elementTime = this.getElementTimeFromElementDate(element);
            const hourValue = elementTime._flatpickr.hourElement.value;
            const minuteValue = elementTime._flatpickr.minuteElement.value;
            const timeAnotherField = `${hourValue}:${minuteValue}`;
            this.timeInstance.set(configName, timeAnotherField);
        } else {
            this.timeInstance.set(configName, null);                            
        }
    },
    setLimitTimeFromUpdateTime(element, configName, timeStr) {
        if (this.$refs.date.value != '' && this.$refs.date.value == element.value) {
            this.getElementTimeFromElementDate(element)._flatpickr.set(configName, timeStr);
        } else {
            this.getElementTimeFromElementDate(element)._flatpickr.set(configName, null);
        }
    },
    init() {
        this.$nextTick(() => {
            const updateDateTimeMinTo = document.querySelector(this.$refs.date.dataset.updateDateTimeMinTo);
            const updateDateTimeMaxTo = document.querySelector(this.$refs.date.dataset.updateDateTimeMaxTo);
            
            this.dateInstance = Flatpickr(this.$refs.date, {
                dateFormat: "d/m/Y",
                onChange: (selectedDates, dateStr, instance) => {
                    updateDateTimeMinTo && this.$nextTick(() => {
                        updateDateTimeMinTo._flatpickr.set('minDate', dateStr);
                        this.setLimitTimeFromUpdateDate(updateDateTimeMinTo, 'maxTime', dateStr);
                    });
                    updateDateTimeMaxTo && this.$nextTick(() => {
                        updateDateTimeMaxTo._flatpickr.set('maxDate', dateStr);
                        this.setLimitTimeFromUpdateDate(updateDateTimeMaxTo, 'minTime', dateStr);
                    });
                },
            });

            this.timeInstance = Flatpickr(this.$refs.time, {
                inline: true,
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true,
                onChange: (selectedTimes, timeStr, instance) => {
                    updateDateTimeMinTo && this.$nextTick(() => this.setLimitTimeFromUpdateTime(updateDateTimeMinTo, 'minTime', timeStr));
                    updateDateTimeMaxTo && this.$nextTick(() => this.setLimitTimeFromUpdateTime(updateDateTimeMaxTo, 'maxTime', timeStr));
                }
            });
        });
    },

});
