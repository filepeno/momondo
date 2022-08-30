function toggle_results_from() {
  const resultsFrom = document.querySelector("#results-from");
  const input = document.querySelector("#input-from").value;
  if (input.length > 0) {
    get_cities_from();
    document.querySelector("#results-from").classList.add("active");
  } else {
    resultsFrom.classList.remove("active");
  }
}

function hide_results_from() {
  document.querySelector("#results-from").classList.remove("active");
}

async function get_cities_from() {
  const resp = await fetch("api-get-cities-from");
  const data = await resp.json();

  displayCities(data);
}

function displayCities(data) {
  const parent = document.querySelector("#results-from");
  parent.innerHTML = "";

  data.forEach((city) => {
    const city_html = `<div class="city">
                    <img class="city-img" src="${city.city_image}" alt="Image of city" width="100px">
                    <div class="city-data-wrapper">
                        <h2 class="city-name">${city.city_name ?? "UPS..."}</h2>
                        <p>${city.city_airport ?? "ups.."}</p>
                        <p>Population: ${city.city_population ?? "ups.."}</p>
                    </div>
                </div>`;
    parent.insertAdjacentHTML("beforeEnd", city_html);
  });
}
