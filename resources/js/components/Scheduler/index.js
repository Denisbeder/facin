export default (startElementSelector, endElementSelector) => ({
    startElement: null,
    endElement: null,
    getElement(elementSelector) {
        return document.querySelector(`[name="${elementSelector}"]`);
    },
    getFlatpickr(elementField) {
        return elementField._flatpickr;
    },
    startDateFlatpickr() {
        return this.getFlatpickr(this.startElement.dateField);
    },
    startTimeFlatpickr() {
        return this.getFlatpickr(this.startElement.timeField);
    },
    endDateFlatpickr() {
        return this.getFlatpickr(this.endElement.dateField);
    },
    endTimeFlatpickr() {
        return this.getFlatpickr(this.endElement.timeField);
    },
    getDateValue(element) {
        return this.getFlatpickr(element.dateField).element.value;
    },
    getTimeValue(element) {
        const hourValue = this.getFlatpickr(element.timeField).hourElement.value;
        const minuteValue = this.getFlatpickr(element.timeField).minuteElement.value;
        return this.formatTimeValue(hourValue, minuteValue);
    },
    formatTimeValue(hourValue, minuteValue) {
        return `${hourValue}:${minuteValue}`;
    },
    setElements(startElementSelector, endElementSelector) {
        this.startElement = {
            dateField: this.getElement(`${startElementSelector}[date]`),
            timeField: this.getElement(`${startElementSelector}[time]`),
        };
        
        this.endElement = {
            dateField: this.getElement(`${endElementSelector}[date]`),
            timeField: this.getElement(`${endElementSelector}[time]`),
        };
    },
    setTimeFieldLimit(configName, configValue, flatpickr, elem) {
        // If dates same equals, expiration time not should be minor that the start time
        if (this.getDateValue(this.startElement) == this.getDateValue(this.endElement)) {
            flatpickr.set(configName, configValue);
        } else {
            flatpickr.set(configName, null);
        }
    },
    timeFieldLimit() {
        this.setTimeFieldLimit('minTime', this.getTimeValue(this.startElement), this.endTimeFlatpickr(), 'to end');
        this.setTimeFieldLimit('maxTime', this.getTimeValue(this.endElement), this.startTimeFlatpickr(), 'to start');
    },
    handleStartFields() {
        this.startDateFlatpickr().config.onChange.push((selected, currentValue, instance) => {
            // The date to expiration not should be minor that start date
            this.endDateFlatpickr().set('minDate', currentValue);
            this.timeFieldLimit();
        });

        this.startTimeFlatpickr().config.onChange.push(() => {
            this.timeFieldLimit();
        });
    },
    handleEndFields() {
        this.endDateFlatpickr().config.onChange.push((selected, currentValue, instance) => {
            // The date to start not should be major that termination date
            this.startDateFlatpickr().set('maxDate', currentValue);
            this.timeFieldLimit();
        });

        this.endTimeFlatpickr().config.onChange.push(() => {
            this.timeFieldLimit();
        });
    },
    async init() {
        await this.$nextTick(); // wait DOM 
        
        this.setElements(startElementSelector, endElementSelector);

        // Start Fields Handle
        this.handleStartFields();

        // End Fields Handle
        this.handleEndFields();
    },
});
