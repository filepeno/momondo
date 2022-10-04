export default class TripsUser {
  constructor(element) {
    this.el = element;
    this.toggleMapBtn = this.el.querySelector(".toggle-map");
    this.trips = [
      { destination_city: "Athens", departure_time: "2020-03-28T10:00", arrival_time: "2020-05-26T07:00", destination_city_img: "/assets/img/cities/athens-lg.jpg" },
      { destination_city: "Hamburg", departure_time: "2020-04-12T10:00", arrival_time: "2020-10-02T07:00", destination_city_img: "/assets/img/cities/hamburg-md.jpg" },
      { destination_city: "Helsinki", departure_time: "2020-04-08T10:00", arrival_time: "2020-05-10T07:00", destination_city_img: "/assets/img/cities/helsinki.png" },
      { destination_city: "London", departure_time: "2020-09-21T10:00", arrival_time: "2020-09-22T07:00", destination_city_img: "/assets/img/cities/london.png" },
    ];
    this.tripsAmountIndicators = this.el.querySelectorAll(".trips-amount");
    this.displayTrips();
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

  displayTrips() {
    this.tripsAmountIndicators.forEach((element) => {
      element.textContent = this.trips.length;
    });
    const parent = this.el.querySelector(".trips");
    const template = this.el.querySelector("#trip-template");

    this.trips.forEach((trip) => {
      const clone = template.content.cloneNode(true);
      clone.querySelector(".city-name").textContent = trip.destination_city;
      const d1 = new Date(trip.departure_time);
      clone.querySelector(".from").textContent = `${d1.getDate()}.${d1.getMonth()}.${d1.getFullYear()}`;
      const d2 = new Date(trip.arrival_time);
      clone.querySelector(".to").textContent = `${d2.getDate()}.${d2.getMonth()}.${d2.getFullYear()}`;
      if (trip.destination_city_img != "") {
        clone.querySelector(".city-img").src = trip.destination_city_img;
        clone.querySelector(".city-img").alt = "Image of " + trip.destination_city;
      }
      parent.appendChild(clone);
    });
  }
}
