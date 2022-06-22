export default (choicesOptions) => ({
    choicesOptions: {
        ...choicesOptions,
    },
    init() {
        this.$nextTick(() => {
            Choices(this.$refs.select, this.choicesOptions);
        });
    },
});
