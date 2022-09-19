export default class SignIn {
  constructor(element) {
    this.el = element;
    this.emailForm = this.el.form;
    this.inputs = this.emailForm.querySelectorAll("[data-validate]");

    /*     this.email = this.emailForm.querySelector("input[name=email]").value; */
    this.passwordForm = document.querySelector("#password-form");
    this.passwordInput = this.passwordForm.querySelector("input[name=user_password]");
    this.init();
  }

  init() {
    this.el.addEventListener("click", () => {
      if (this.checkValidity()) {
        this.getUsers();
      }
    });
  }

  checkValidity() {
    if (event.target.form.querySelector("[data-validate].invalid")) {
      return false;
    } else {
      return true;
    }
  }

  async getUsers() {
    const resp = await fetch("api/api-check-user-existence.php", {
      method: "POST",
      body: new FormData(this.emailForm),
    });
    if (!resp.ok) {
      console.log(await resp.json());
      //TODO: display sign up view
    } else {
      const userEmail = await resp.json();
      this.displayPasswordForm(userEmail);
    }
  }

  displayPasswordForm(userEmail) {
    this.emailForm.classList.add("inactive");
    this.passwordForm.classList.remove("inactive");
    this.passwordForm.querySelector("label span").textContent = userEmail;
    this.passwordForm.querySelector("[name=user_email]").value = userEmail;
    this.passwordForm.querySelector("button[type=submit]").addEventListener("click", () => {
      if (this.checkValidity()) {
        this.matchPasswords();
      }
    });
  }
  async matchPasswords() {
    const resp = await fetch("api/api-match-user-password.php", {
      method: "POST",
      body: new FormData(this.passwordForm),
    });
    if (!resp.ok) {
      console.log(await resp.json());
    } else {
      /* const data = await resp.json();
      console.log("success! user: ", data); */
      location.href = "/user-page";
    }
  }
}
