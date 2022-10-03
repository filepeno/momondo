export default class TripsUser {
  constructor(element) {
    this.el = element;
    this.toggleMapBtn = this.el.querySelector(".toggle-map");
    this.init();
  }
  init() {
    this.toggleMapBtn.addEventListener("click", () => {
      if (!this.el.classList.contains("map-active")) {
        this.el.classList.add("map-active");
        this.toggleMapBtn.classList.add("active");
      } else {
        this.el.classList.remove("map-active");
        this.toggleMapBtn.classList.remove("active");
      }
    });
  }
}
