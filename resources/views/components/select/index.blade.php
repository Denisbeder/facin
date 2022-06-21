<div
    {{ $attributes }}
    x-data="{
        multiple: false,
        value: 1,
        options: [
            { value: 1, label: 'Caleb Porzio' },
            { value: 2, label: 'Jason Beggs' },
            { value: 3, label: 'Tweedle Dee' },
            { value: 4, label: 'Tweedle Dum' },
        ],
        init() {
            this.$nextTick(() => {
                let choices = new Choices(this.$refs.select)
 
                let refreshChoices = () => {
                    let selection = this.multiple ? this.value : [this.value]
 
                    choices.clearStore()
                    choices.setChoices(this.options.map(({ value, label }) => ({
                        value,
                        label,
                        selected: selection.includes(value),
                    })))
                }
 
                refreshChoices()
 
                this.$refs.select.addEventListener('change', () => {
                    this.value = choices.getValue(true)
                })
 
                this.$watch('value', () => refreshChoices())
                this.$watch('options', () => refreshChoices())
            })
        }
    }"
>
    <select class="select" x-ref="select" :multiple="multiple"></select>
</div>