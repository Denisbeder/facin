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
            const updateMinDateTo = document.querySelector(this.$refs.date.dataset.updateMinDateTo);
            const updateMaxDateTo = document.querySelector(this.$refs.date.dataset.updateMaxDateTo);
            
            this.dateInstance = Flatpickr(this.$refs.date, {
                dateFormat: "d/m/Y",
                onChange: (selectedDates, dateStr, instance) => {
                    updateMinDateTo && this.$nextTick(() => {
                        updateMinDateTo._flatpickr.set('minDate', dateStr);
                        this.setLimitTimeFromUpdateDate(updateMinDateTo, 'maxTime', dateStr);
                    });
                    updateMaxDateTo && this.$nextTick(() => {
                        updateMaxDateTo._flatpickr.set('maxDate', dateStr);
                        this.setLimitTimeFromUpdateDate(updateMaxDateTo, 'minTime', dateStr);
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
                    updateMinDateTo && this.$nextTick(() => this.setLimitTimeFromUpdateTime(updateMinDateTo, 'minTime', timeStr));
                    updateMaxDateTo && this.$nextTick(() => this.setLimitTimeFromUpdateTime(updateMaxDateTo, 'maxTime', timeStr));
                }
            });
        });
    },

});
