function trackInput() {
  document.querySelectorAll(".location-input").forEach((element) => {
    element.addEventListener("input", (e) => get_input(e));
    element.addEventListener("focus", (e) => get_input(e));
    element.addEventListener("blur", (e) => hide_suggestions(e));
  });
}

async function get_input(e) {
  const input = e.target.value;
  const suggestionsWrapper = e.target.nextElementSibling;
  if (input.length > 0) {
    const data = await get_cities();
    display_cities(data, suggestionsWrapper);
    display_suggestions(suggestionsWrapper);
  } else {
    hide_suggestions(e);
  }
}

function display_suggestions(el) {
  hide_all_suggestions();
  el.classList.add("active");
}

function hide_all_suggestions() {
  document.querySelectorAll(".suggestions-wrapper").forEach((element) => {
    element.classList.remove("active");
  });
}

function hide_suggestions(e) {
  e.target.nextElementSibling.classList.remove("active");
}

async function get_cities() {
  const resp = await fetch("api-get-airports");
  const data = await resp.json();
  console.log(data);
  return data;
}

function display_cities(data, parent) {
  parent.innerHTML = "";

  data.forEach((airport) => {
    const city_html = `<div class="city">
                    <img class="city-img" src="assets/img/${airport.image}" alt="Image of city" width="100px">
                    <div class="city-data-wrapper">
                        <h2 class="city-name">${airport.city ?? "UPS..."}</h2>
                        <p>${airport.name ?? "ups.."}</p>
                    </div>
                </div>`;
    parent.insertAdjacentHTML("beforeEnd", city_html);
  });
}

trackInput();
