// ##############################
function validate(callback) {
  const form = event.target;
  document.querySelectorAll("[data-validate]", form).forEach(function (element) {
    element.classList.remove("invalid");
  });
  document.querySelectorAll("[data-validate]", form).forEach(function (element) {
    switch (element.getAttribute("data-validate")) {
      case "str":
        if (element.value.length < parseInt(element.getAttribute("data-min")) || element.value.length > parseInt(element.getAttribute("data-max"))) {
          element.classList.add("invalid");
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
          displayValidationMsg(element, false, "Email address in not valid");
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
        if (element.value != document.querySelector(`[name='${element.getAttribute("data-match-name")}']`, form).value) {
          element.classList.add("invalid");
        }
        break;
    }
  });
  if (!document.querySelector(".invalid", form)) {
    callback();
    return;
  }
  document.querySelector(".invalid", form).focus();
}

// ##############################
function clear_invalid() {
  // event.target.classList.remove("invalid")
  // event.target.value = ""
}

function displayValidationMsg(el, bool, msg) {
  const msgEl = el.closest(".input-wrapper").querySelector(".validation-msg");
  msgEl.classList.add("visible");
  if (!bool) {
    msgEl.classList.add("invalid");
  }
  msgEl.textContent = msg;
}

function hideValidationMsg() {
  event.target.classList.remove("invalid");
  event.target.closest(".input-wrapper").querySelector(".validation-msg").classList.remove("visible");
}
