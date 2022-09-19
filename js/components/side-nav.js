export default class SideNav {
  constructor(element) {
    this.el = element;
    this.toggleBtn = this.el.querySelector("#toggle-menu-btn");
    this.init();
  }
  init() {
    this.toggleBtn.addEventListener("click", () => this.toggleSideNav());
  }

  toggleSideNav() {
    const nav = document.querySelector("#side-nav");
    if (nav.classList.contains("active")) {
      nav.classList.remove("active");
    } else {
      nav.classList.add("active");
    }
  }
}
