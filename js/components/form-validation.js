import SignIn from "./sign-in.js";

export default class FormValidation {
  constructor(element) {
    this.el = element;
    this.inputs = this.el.querySelectorAll("[data-validate]");
    this.submitBtn = this.el.querySelector("button[type=submit]");
    this.init();
  }

  init() {
    this.inputs.forEach((element) => {
      element.addEventListener("blur", () => {
        this.validate(element);
      });
    });
    this.submitBtn.addEventListener("click", () => this.validateForm());
  }

  validateForm() {
    this.inputs.forEach((element) => {
      this.validate(element);
    });
  }

  validate(element) {
    element.classList.remove("invalid");
    switch (element.getAttribute("data-validate")) {
      case "str":
        if (element.value.length < parseInt(element.getAttribute("data-min")) || element.value.length > parseInt(element.getAttribute("data-max"))) {
          element.classList.add("invalid");
          this.displayValidationMsg(element, false, "Password is not valid");
        }
        break;
      case "int":
        if (!/^\d+$/.test(element.value) || parseInt(element.value) < parseInt(element.getAttribute("data-min")) || parseInt(element.value) > parseInt(element.getAttribute("data-max"))) {
          element.classList.add("invalid");
        }
        break;
      case "email":
        let re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(element.value.toLowerCase())) {
          element.classList.add("invalid");
          this.displayValidationMsg(element, false, "Email address is not valid");
        }
        break;
      case "regex":
        var regex = new RegExp(element.getAttribute("data-regex"));
        // var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
        if (!regex.test(element.value)) {
          console.log(element.value);
          console.log("regex error");
          element.classList.add("invalid");
        }
        break;
      case "match":
        if (element.value != document.querySelector(`[name='${element.getAttribute("data-match-name")}']`).value) {
          element.classList.add("invalid");
        }
        break;
    }
    if (element.classList.contains("invalid")) {
      element.focus();
      element.addEventListener("input", () => this.validate(element));
    } else {
      this.hideValidationMsg(element);
    }
  }

  // ##############################
  clear_invalid() {
    // event.target.classList.remove("invalid")
    // event.target.value = ""
  }

  displayValidationMsg(el, bool, msg) {
    const msgEl = el.closest(".input-wrapper").querySelector(".validation-msg");
    msgEl.classList.add("visible");
    if (!bool) {
      msgEl.classList.add("invalid");
    }
    msgEl.textContent = msg;
  }

  hideValidationMsg(element) {
    element.classList.remove("invalid");
    element.closest(".input-wrapper").querySelector(".validation-msg").classList.remove("visible");
  }
}

// ##############################
