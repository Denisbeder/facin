export default () => ({
    multiple: false,
    value: null,
    options: [],
    choicesInstance: null,
    setChoicesInstance() {
        this.choicesInstance = Choices(this.$refs.select, {
            removeItemButton: true,
        });
    },
    setMultiple() {
        this.multiple = this.$refs.select.hasAttribute("multiple");
    },
    setValue() {
        const selectedValue = this.options
            .filter((e) => e.selected === true)
            .shift();

        const value = selectedValue !== undefined ? selectedValue.value : this.value;   

        this.value = this.multiple ? [value] : value;
    },
    setOptions() {
        const optionsCollect = Array.from(this.$refs.select.options);

        optionsCollect.forEach((e) => {
            this.options.push({
                value: e.value,
                label: e.text,
                selected: e.hasAttribute("selected"),
            });
        });
    },
    refreshChoices() {
        let selection = this.multiple ? this.value : [this.value];

        this.choicesInstance.clearStore();
        this.choicesInstance.setChoices(
            this.options.map(({ value, label }) => ({
                value,
                label,
                selected:
                    selection.includes(value) ||
                    selection.includes(String(value)) ||
                    selection.includes(Number(value)),
            }))
        );
    },
    init() {
        this.$nextTick(() => {
            this.setMultiple();
            this.setOptions();
            this.setValue();
            this.setChoicesInstance();
            this.refreshChoices();

            this.$refs.select.addEventListener("change", () => {
                this.value = this.choicesInstance.getValue(true);
            });

            this.$watch("value", () => this.refreshChoices());
            this.$watch("options", () => this.refreshChoices());
        });
    },
});
