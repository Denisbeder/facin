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
    setMode() {
        const defaultMode = window.innerWidth < 1366 ? 'bar' : 'full';
        const storageMode = localStorage.getItem("sidebarMode") ?? defaultMode;
        const currentMode = this.mode === null || !isMobile() ? storageMode : this.mode;
        this.mode = isMobile() ? "mobile" : currentMode;
    },
    toggleMode() {
        this.mode = this.mode === "full" ? "bar" : "full";
        localStorage.setItem("sidebarMode", this.mode);
    },
    toggleOffCanvas() {
        this.isOpenOffCanvas = !this.isOpenOffCanvas;
    },
};
