function trackInput() {
  document.querySelectorAll(".location-input").forEach((element) => {
    element.addEventListener("input", (e) => toggle_results_from(e));
    element.addEventListener("focus", (e) => toggle_results_from(e));
    element.addEventListener("blur", (e) => hide_suggestions(e));
  });
}

async function toggle_results_from(e) {
  console.log(e.target.nextElementSibling);
  const input = e.target.value;
  const suggestionsWrapper = e.target.nextElementSibling;
  if (input.length > 0) {
    const data = await get_cities_from();
    console.log(data);
    displayCities(data, suggestionsWrapper);
    suggestionsWrapper.classList.add("active");
  } else {
    hide_suggestions(e);
  }
}

function hide_suggestions(e) {
  e.target.nextElementSibling.classList.remove("active");
}

async function get_cities_from() {
  const resp = await fetch("api-get-cities-from");
  const data = await resp.json();
  return data;
}

function displayCities(data, parent) {
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

trackInput();
