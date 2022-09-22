import { displayValidationMsg, hideValidationMsg } from "./form-validation.js";

export default class SignIn {
  constructor(element) {
    this.el = element;
    this.emailForm = this.el.querySelector("#email-form");
    this.emailSubmitBtn = this.emailForm.querySelector("[type=submit]");
    this.heading = this.el.querySelector(".section-title");
    /*   this.inputs = this.emailForm.querySelectorAll("[data-validate]"); */
    this.passwordForm = this.el.querySelector("#log-in-form");
    this.passwordInput = this.passwordForm.querySelector("input[name=user_password]");
    this.signUpForm = this.el.querySelector("#sign-up-form");
    this.init();
  }

  init() {
    this.emailSubmitBtn.addEventListener("click", () => {
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
    const resp = await fetch("api/api-sign-in.php", {
      method: "POST",
      body: new FormData(this.emailForm),
    });
    if (!resp.ok) {
      const error = await resp.json();
      if (error.info == "user does not exist") {
        this.displaySignUpForm(error.email);
      }
    } else {
      const userEmail = await resp.json();
      this.displayPasswordForm(userEmail);
    }
  }

  displayPasswordForm(email) {
    this.emailForm.classList.add("inactive");
    this.passwordForm.classList.remove("inactive");
    this.passwordForm.querySelector("label span").textContent = email;
    this.passwordForm.querySelector("[name=user_email]").value = email;
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
      const error = await resp.json();
      if (error.info == "The password did not match") {
        displayValidationMsg(this.passwordInput, false, error.info);
      }
    } else {
      const data = await resp.json();
      console.log("success! user: ", data);
      location.href = "/";
    }
  }

  displaySignUpForm(email) {
    this.emailForm.classList.add("inactive");
    this.signUpForm.classList.remove("inactive");
    const subHeading = this.el.querySelector("#sign-up-heading");
    subHeading.style.display = "block";
    subHeading.querySelector(".emphasize").textContent = email;
    this.signUpForm.querySelector("[name=user_email]").value = email;
    this.heading.textContent = "Create and account";
    this.signUpForm.querySelector("button[type=submit]").addEventListener("click", () => {
      if (this.checkValidity()) {
        this.signUp();
      }
    });
  }

  async signUp() {
    const resp = await fetch("api/api-sign-up.php", {
      method: "POST",
      body: new FormData(this.signUpForm),
    });
    if (!resp.ok) {
      const error = await resp.json();
      console.log("error", error);
    } else {
      const data = await resp.json();
      console.log("success! user: ", data);
    }
  }
}
