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
    getHourValue(element) {
        return this.getFlatpickr(element.timeField).hourElement.value;
    },
    getMinuteValue(element) {
        return this.getFlatpickr(element.timeField).minuteElement.value;
    },
    getTimeValue(element) {
        const hourValue = this.getHourValue(element);
        const minuteValue = this.getMinuteValue(element);
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
    handleTimeFieldLimit(configName, configValue, flatpickr) {
        const startDate = this.getDateValue(this.startElement);
        const endDate = this.getDateValue(this.endElement);
        const startHour = Number(this.getHourValue(this.startElement))
        const endHour = Number(this.getHourValue(this.endElement));

        // If dates same equals, expiration time not should be minor that the start time
        if (startDate == endDate && (endDate != '' || endDate != '')) {
            flatpickr.set(configName, configValue);

            // Force hour fix when expiration hour is minor that start hour in the same day
            if (endHour < startHour) {
                flatpickr.hourElement.value = startHour + 1;
            }      
        } else {
            flatpickr.set(configName, null);
        }
    },
    setTimeFieldLimit() {
        this.handleTimeFieldLimit('minTime', this.getTimeValue(this.startElement), this.endTimeFlatpickr());
        this.handleTimeFieldLimit('maxTime', this.getTimeValue(this.endElement), this.startTimeFlatpickr());
    },
    handleStartFields() {
        this.startDateFlatpickr().config.onChange.push((selected, currentValue, instance) => {
            // The date to expiration not should be minor that start date
            this.endDateFlatpickr().set('minDate', currentValue);
            this.setTimeFieldLimit();
        });

        this.startTimeFlatpickr().config.onChange.push(() => {
            this.setTimeFieldLimit();
        });
    },
    handleEndFields() {
        this.endDateFlatpickr().config.onChange.push((selected, currentValue, instance) => {
            // The date to start not should be major that termination date
            this.startDateFlatpickr().set('maxDate', currentValue);
            this.setTimeFieldLimit();
        });

        this.endTimeFlatpickr().config.onChange.push(() => {
            this.setTimeFieldLimit();
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
