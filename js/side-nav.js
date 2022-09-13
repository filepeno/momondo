export function trackSideNav() {
  document.querySelector("#toggle-menu-btn").addEventListener("click", () => toggleSideNav());
}

function toggleSideNav() {
  const nav = document.querySelector("#side-nav");
  if (nav.classList.contains("active")) {
    nav.classList.remove("active");
  } else {
    nav.classList.add("active");
  }
}
