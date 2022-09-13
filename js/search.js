export function trackSearchInput() {
  document.querySelectorAll(".location-input").forEach((element) => {
    element.addEventListener("input", (e) => getInput(e));
    element.addEventListener("focus", (e) => getInput(e));
    element.addEventListener("blur", (e) => hideSuggestions(e));
  });
}

async function getInput(e) {
  const input = e.target.value.toLowerCase();
  const suggestionsWrapper = e.target.nextElementSibling;
  if (input.length > 0) {
    const data = await getCities(input);
    displayCities(data, suggestionsWrapper, input);
    displaySuggestions(suggestionsWrapper);
  } else {
    hideSuggestions(e);
  }
}

function displaySuggestions(el) {
  hideAllSuggestions();
  el.classList.add("active");
}

function hideAllSuggestions() {
  document.querySelectorAll(".suggestions-wrapper").forEach((element) => {
    element.classList.remove("active");
  });
}

function hideSuggestions(e) {
  e.target.nextElementSibling.classList.remove("active");
}

async function getCities(input) {
  const resp = await fetch("api/api-get-airports.php");
  const data = await resp.json();
  const filteredAirports = data.filter((airport) => airport.city.toLowerCase().includes(input));
  console.log(input);
  return filteredAirports;
}

function displayCities(data, parent, input) {
  parent.innerHTML = "";

  data.forEach((airport) => {
    console.log(airport.city.toLowerCase().indexOf(input));
    const cityHtml = `<div class="city">
                      <img class="city-img" src="assets/img/${airport.image}" alt="Image of city" width="100px">
                      <div class="city-data-wrapper">
                          <h2 class="city-name">${airport.city ?? "UPS..."}</h2>
                          <p>${airport.name ?? "ups.."}</p>
                      </div>
                  </div>`;
    parent.insertAdjacentHTML("beforeEnd", cityHtml);
  });
}
