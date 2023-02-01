export default class SearchFlights {
  constructor(element) {
    this.el = element;
    this.inputs = this.el.querySelectorAll(".location-input");
    this.searchBtn = document.querySelector("#search-btn");
    this.init();
  }

  init() {
    this.inputs.forEach((element) => {
      element.addEventListener("input", (e) => this.getInput(e));
      element.addEventListener("focus", (e) => this.getInput(e));
      //element.addEventListener("blur", (e) => this.hideSuggestions(e));
    });
  }

  async getInput(e) {
    const input = e.target.value.toLowerCase();
    const suggestionsWrapper = e.target.nextElementSibling;
    if (input.length > 0) {
      const data = await this.getAirports(input);
      if (data != undefined && data.length) {
        this.displayCities(data, suggestionsWrapper, input);
        this.displaySuggestions(suggestionsWrapper);
      } else {
        this.hideAllSuggestions();
      }
    } else {
      this.hideSuggestions(e);
    }
  }

  displaySuggestions(el) {
    this.hideAllSuggestions();
    el.classList.add("active");
  }

  hideAllSuggestions() {
    document.querySelectorAll(".suggestions-wrapper").forEach((element) => {
      element.classList.remove("active");
    });
  }

  hideSuggestions(e) {
    e.target.nextElementSibling.classList.remove("active");
  }

  async getAirports(input) {
    const airports = await fetch(`./api/api-get-airports.php?input=${input}`)
      .then((resp) => resp.json())
      .then((data) => {
        return data;
      })
      .catch((error) => console.log(error));
    return airports;
  }

  displayCities(data, parent, input) {
    parent.innerHTML = "";

    data.forEach((airport) => {
      //console.log(airport.city.toLowerCase().indexOf(input));
      const cityHtml = `<button class="suggestion-item" type="button">
                          <img class="city-img" src="assets/img/cities/${airport.image}" alt="Image of ${airport.city}" width="100px">
                          <div class="city-data" data-airport-code="${airport.code}">
                              <h2 class="city-country"><span class="city">${airport.city ?? "City"}</span>, ${airport.country ?? "Country"}</h2>
                              <p>${airport.name ?? "Airport"}</p>
                          </div>
                        </button>`;
      parent.insertAdjacentHTML("beforeEnd", cityHtml);
    });
    const buttons = parent.querySelectorAll(".suggestion-item");
    if (buttons.length > 0) {
      buttons.forEach((btn) => {
        btn.addEventListener("click", () => {
          const city = btn.querySelector(".city").textContent;
          const airportCode = btn.querySelector(".city-data").dataset.airportCode;
          const input = btn.closest(".search-input-wrapper").querySelector(".location-input");
          input.value = city;
          this.hideAllSuggestions();
        });
      });
    }
  }

  search() {}
}
