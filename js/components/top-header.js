export default class TopHeader {
  constructor(element) {
    this.el = element;
    this.profileBtn = this.el.querySelector("#profile-btn");
    this.profileMenu = this.el.querySelector("#profile-menu");
    this.init();
  }

  init() {
    if (this.profileBtn) {
      this.profileBtn.addEventListener("click", () => {
        console.log("click");
        if (!this.profileMenu.classList.contains("active")) {
          this.profileMenu.classList.add("active");
        } else {
          this.profileMenu.classList.remove("active");
        }
      });
      document.querySelector("body").addEventListener("click", (event) => {
        if (this.profileMenu.classList.contains("active")) {
          if (event.target != this.profileBtn && !this.profileBtn.contains(event.target) && event.target != this.profileMenu) {
            this.profileMenu.classList.remove("active");
          }
        }
      });
    }
  }
}
