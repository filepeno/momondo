export default class DeleteFlight {
  constructor(element) {
    this.el = element;
    this.deleteBtn = this.el.querySelector("button[type=submit]");
    this.init();
  }

  init() {
    this.deleteBtn.addEventListener("click", (e) => this.deleteFlight(e));
  }

  async deleteFlight(e) {
    e.preventDefault();
    const form = e.target.form;
    const conn = await fetch("/api/api-delete-flight.php", {
      method: "POST",
      body: new FormData(form),
    });
    const data = await conn.json();
    if (!conn.ok) {
      // Sweet alert: ups... fligth not found
      console.log(data);
      return;
    }
    // Success
    console.log(data);
    //TODO:add animation to the form with a callback
    form.remove();
  }
}
