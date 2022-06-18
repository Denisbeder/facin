export default {
    mode: null,
    isOpenOffCanvas: false,
    init() {
        this.setMode();
        window.onresize = () => this.setMode();
    },
    isModeFull() {
        return this.mode === "full";
    },
    isModeBar() {
        return this.mode === "bar";
    },
    isModeMobile() {
        return this.mode === "mobile";
    },
    isMobile() {
        return window.matchMedia("only screen and (max-width: 768px)").matches;
    },
    setMode() {
        const defaultMode = window.innerWidth < 1366 ? 'bar' : 'full';
        const storageMode = localStorage.getItem("sidebarMode") ?? defaultMode;
        const currentMode = this.mode === null || !this.isMobile() ? storageMode : this.mode;
        this.mode = this.isMobile() ? "mobile" : currentMode;
    },
    toggleMode() {
        this.mode = this.mode === "full" ? "bar" : "full";
        localStorage.setItem("sidebarMode", this.mode);
    },
    toggleOffCanvas() {
        const isOpenOffCanvas = !this.isOpenOffCanvas;
        const htmlBody = document.querySelectorAll('html,body');
        this.isOpenOffCanvas = isOpenOffCanvas;
        
        if (isOpenOffCanvas === true) {       
            htmlBody.forEach((item) => item.classList.add('overflow-hidden'));     
        } else {
            htmlBody.forEach((item) => item.classList.remove('overflow-hidden'));
        }        
    },
};
