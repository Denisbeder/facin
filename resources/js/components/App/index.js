export default (options) => ({
    init() {
        document.addEventListener('dialog', (e) => {
            this.dialogHandler(e);
        });

        document.addEventListener('confirm', (e) => {
            this.confirmHandler(e);
        });
    },
    dialogHandler(e) {
        console.log(e);
        alert('dialogHandler');
    },
    confirmHandler(e) {
        console.log(e);
        alert('confirmHandler');
    },
    confirmSuccess() {
        alert('sdsdsdsd');
    },
    openWithDialog: {
        ['@click']($event) {
            console.log($event);
            this.$dispatch('dialog');
        }
    },
    confirmDialog: {
        ['@click']($event) {
            console.log($event);
            this.$dispatch('confirm');
        }
    },
});
