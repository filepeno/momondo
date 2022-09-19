export default class SignIn {
  constructor(element) {
    this.el = element;
    this.form = this.el.form;
    this.inputs = this.form.querySelectorAll("input");
    this.init();
  }

  init() {
    this.el.addEventListener("click", () => this.checkValidity());
  }

  checkValidity() {
    this.inputs.forEach((element) => {
      if (element.classList.contains("invalid") || element.value == "") {
        return;
      } else {
        this.getUsers();
      }
    });
  }

  async getUsers() {
    const resp = await fetch("api-check-user-existence", {});
  }
}
