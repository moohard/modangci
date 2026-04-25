"use strict";
const KTSubmitDetail = (function () {
  let formShow;
  let showButton;
  let formSave;
  let saveButton;
  let validator;
  let respons;
  const handleValidation = () => {
    validator = FormValidation.formValidation(formShow, {
      fields: {
        hakakses: {
          validators: { notEmpty: { message: "Field Harus Diisi !!" } },
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
    showButton.addEventListener("click", function (e) {
      e.preventDefault();
      validator.validate().then(function (status) {
        if (status == "Valid") {
          showButton.setAttribute("data-kt-indicator", "on");
          showButton.disabled = true;
          axios
            .post(
              showButton.closest("form").getAttribute("action"),
              new FormData(formShow), {
                headers: {
                  "X-Requested-With": "XMLHttpRequest",
                },
              }
            )
            .then(function (response) {
              const eR = response.data;
              respons.innerHTML = eR;
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
              showButton.removeAttribute("data-kt-indicator");
              showButton.disabled = false;
              formSave = document.querySelector("#kt_form_save") ?? false;
              saveButton = formSave.querySelector("#kt_btn_save");
              handleSaveForm();
            });
        } else {
        }
      });
    });
  };
  const handleSaveForm = () => {
    saveButton.addEventListener("click", (e) => {
      e.preventDefault();
      saveButton.setAttribute("data-kt-indicator", "on");
      saveButton.disabled = true;
      axios
        .post(
          saveButton.closest("form").getAttribute("action"),
          new FormData(formSave), {
                headers: {
                  "X-Requested-With": "XMLHttpRequest",
                },
              }
        )
        .then(function (response) {
          const eR = response.data;
          Swal.fire({
            html: eR.message,
            icon: eR.status,
            showConfirmButton: false,
            timer: 1500,
          }).then(() => {
            if (eR.status == "success") respons.innerHTML = "";
          });
          //   respons.innerHTML = er
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
          saveButton.removeAttribute("data-kt-indicator");
          saveButton.disabled = false;
        });
    });
  };
  return {
    init: function () {
      respons = document.getElementById("response");
      formShow = document.querySelector("#kt_form_show") ?? false;
      showButton = document.querySelector("#kt_btn_show");
      if (formShow != false) {
        handleValidation();
        handleSubmitAjax();
      }
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTSubmitDetail.init();
});
