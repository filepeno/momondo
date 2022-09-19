export default class SignIn {
  constructor(element) {
    this.el = element;
    this.emailForm = this.el.form;
    this.inputs = this.emailForm.querySelectorAll("input");

    /*     this.email = this.emailForm.querySelector("input[name=email]").value; */
    this.passwordForm = document.querySelector("#password-form");
    this.passwordInput = this.passwordForm.querySelector("input[name=user_password]");
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
    const resp = await fetch("api/api-login.php", {
      method: "POST",
      body: new FormData(this.emailForm),
    });
    if (!resp.ok) {
      console.log(await resp.json());
    } else {
      const user = await resp.json();
      console.log(user);
      this.displayPasswordForm(user);
    }
  }

  displayPasswordForm(user) {
    this.emailForm.classList.add("inactive");
    this.passwordForm.classList.remove("inactive");
    this.passwordForm.querySelector("label span").textContent = user.user_email;

    console.log(user.user_email);
  }
}
