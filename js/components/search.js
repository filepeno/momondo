export default class SearchFlights {
  constructor(element) {
    this.el = element;
    this.inputs = this.el.querySelectorAll(".location-input");
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
      const data = await this.getCities(input);
      if (data.length) {
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

  async getCities(input) {
    const resp = await fetch("api/api-get-airports.php");
    const data = await resp.json();
    const filterByCities = data.filter((airport) => airport.city.toLowerCase().includes(input));
    const filterByCountries = data.filter((airport) => airport.country.toLowerCase().includes(input));
    const allMatches = filterByCities.concat(filterByCountries);
    const uniqueAirports = [...new Set(allMatches)];
    return uniqueAirports;
  }

  displayCities(data, parent, input) {
    parent.innerHTML = "";

    data.forEach((airport) => {
      //console.log(airport.city.toLowerCase().indexOf(input));
      const cityHtml = `<button class="suggestion-item" type="button">
                          <img class="city-img" src="assets/img/${airport.image}" alt="Image of ${airport.city}" width="100px">
                          <div class="city-data-wrapper">
                              <h2 class="city-name"><span>${airport.city ?? "City"}, <span>${airport.country ?? "Country"}<span></h2>
                              <p>${airport.name ?? "Airport"}</p>
                          </div>
                        </button>`;
      parent.insertAdjacentHTML("beforeEnd", cityHtml);
    });
  }
}
