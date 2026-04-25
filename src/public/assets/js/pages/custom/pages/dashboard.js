"use strict";
const KTDashboard = (function () {
  let form;
  let submitButton;
  let validator;
  let respons;
  let toastElement;
  let toast;
  const handleValidation = () => {
    validator = FormValidation.formValidation(form, {
      fields: {
        susrPasswordOld: {
          validators: {
            notEmpty: {
              message: "Current password is required",
            },
          },
        },
        susrPasswordNew: {
          validators: {
            notEmpty: {
              message: "The password is required",
            },
            callback: {
              message: "Please enter valid password",
              callback: function (input) {
                if (input.value.length > 0) {
                  return validatePassword();
                }
              },
            },
          },
        },
        susrPasswordNewConfirm: {
          validators: {
            notEmpty: {
              message: "The password confirmation is required",
            },
            identical: {
              compare: function () {
                return form.querySelector('[name="susrPasswordNew"]').value;
              },
              message: "The password and its confirm are not the same",
            },
          },
        },
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap: new FormValidation.plugins.Bootstrap5({
          rowSelector: ".fv-row",
          eleInvalidClass: "",
          eleValidClass: "",
        }),
      },
    });
  };
  const handleSubmitAjax = () => {
    submitButton.addEventListener("click", function (e) {
      e.preventDefault();
      validator.validate().then(function (status) {
        if (status == "Valid") {
          submitButton.setAttribute("data-kt-indicator", "on");
          submitButton.disabled = true;
          axios
            .post(
              submitButton.closest("form").getAttribute("action"),
              new FormData(form)
            )
            .then(function (response) {
              const eR = response.data;
              if (eR.status == "success") {
                Swal.fire({
                  text: eR.message,
                  icon: "success",
                  buttonsStyling: false,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary",
                  },
                }).then(() => {
                  location.href = form.getAttribute("data-kt-redirect-url");
                });
              } else {
                respons.innerHTML = eR.response;
                toast.show();
              }
            })
            .catch(function (error) {
              Swal.fire({
                text: "Sorry, looks like there are some errors detected, please try again.",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                  confirmButton: "btn btn-primary",
                },
              });
            })
            .then(() => {
              submitButton.removeAttribute("data-kt-indicator");
              submitButton.disabled = false;
            });
        } else {
        }
      });
    });
  };
  const initWidgets = () => {};
  return {
    init: function () {
      respons = document.getElementById("response");
      toastElement = document.getElementById("kt_docs_toast_toggle");
      toast = bootstrap.Toast.getOrCreateInstance(toastElement);
      form = document.querySelector("#kt_form_change_password") ?? false;
      submitButton = document.querySelector("#kt_btn_submit_password");
      if (form) {
        handleValidation();
        handleSubmitAjax();
      } else {
        return;
      }
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTDashboard.init();
});
