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
          if (element.name == "user_password") {
            displayValidationMsg(element, false, "Password is not valid");
          }
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
          displayValidationMsg(element, false, "Email address is not valid");
        } else {
          if (element.classList.contains("try-again")) {
            displayValidationMsg(element, true, "Email address is valid");
            element.classList.remove("try-again");
            element.addEventListener(
              "blur",
              (e) => {
                hideValidationMsg(e.target);
              },
              { once: true }
            );
          }
        }
        break;
      case "regex":
        var regex = new RegExp(element.getAttribute("data-regex"));
        // var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
        if (!regex.test(element.value)) {
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

    /* check if valid */
    if (element.classList.contains("invalid")) {
      element.focus();
      element.classList.add("try-again");
      element.addEventListener(
        "input",
        (e) => {
          this.validate(e.target);
        },
        { once: true }
      );
    } else {
      element.classList.remove("invalid");
      //hideValidationMsg(element);
    }
  }

  // ##############################
  clear_invalid() {
    // event.target.classList.remove("invalid")
    // event.target.value = ""
  }
}

// ##############################

export function displayValidationMsg(el, IsValid, msg) {
  const wrapper = el.closest(".input-wrapper");
  if (!IsValid) {
    wrapper.classList.add("invalid");
    wrapper.classList.remove("valid");
  } else {
    wrapper.classList.remove("invalid");
    wrapper.classList.add("valid");
  }
  const msgEl = wrapper.querySelector(".validation-msg");
  msgEl.textContent = msg;
}

export function hideValidationMsg(el) {
  const wrapper = el.closest(".input-wrapper");
  wrapper.classList.remove("invalid", "valid");
}
