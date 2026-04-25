"use strict";
const KTSubmitGeneral = (function () {
  let form;
  let submitButton;
  let validator;
  let inputValidated;
  let dataValidated = [];
  let respons;
  let toastElement;
  let toast;
  let deleteButton;
  let overlayForm;
  let blockUI;

  const handleValidation = () => {
    inputValidated.forEach((element) => {
      if (element.type == "text" || element.type == "number") {
        const field = `"${element.name}":{"validators":{"notEmpty":{"message":"Field Harus Diisi !!"}}}`;
        dataValidated.push(field);
      } else if (element.type == "select-one") {
        const field = `"${element.name}":{"validators":{"notEmpty":{"message":"Silakan Pilih !!"}}}`;
        $(form.querySelector(`[name="${element.name}"]`)).on(
          "change",
          function () {
            validator.revalidateField(`${element.name}`);
          }
        );
        dataValidated.push(field);
      }
    });
    dataValidated = JSON.parse(`{${dataValidated.toString()}}`);
    validator = FormValidation.formValidation(form, {
      fields: dataValidated,
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
              Swal.fire({
                html: eR.message,
                icon: eR.status,
                showConfirmButton: false,
                timer: 2000,
              }).then(() => {
                if (eR.status == "success") {
                  location.href = form.getAttribute("data-kt-redirect-url");
                } else {
                  respons.innerHTML = eR.response;
                  toast.show();
                }
              });
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
  const handleClickDelete = () => {
    deleteButton.forEach((b) => {
      b.addEventListener("click", (e) => {
        e.preventDefault();
        const $this = e.currentTarget;
        blockUI.block();
        Swal.fire({
          html: `Apakah Anda Yakin Menghapus Data Ini?`,
          icon: "question",
          buttonsStyling: false,
          showCancelButton: true,
          confirmButtonText: "Ya, Hapus",
          cancelButtonText: "Tidak, Batalkan!!",
          customClass: {
            confirmButton: "btn btn-success hover-scale",
            cancelButton: "btn btn-danger hover-scale",
          },
        }).then((result) => {
          if (result.isConfirmed) {
            axios
              .delete($this.href)
              .then((response) => {
                const eR = response.data;
                Swal.fire({
                  html: eR.message,
                  icon: eR.status,
                  showConfirmButton: false,
                  timer: 1500,
                }).then(() => {
                  if (eR.status == "success") location.reload();
                });
              })
              .catch((error) => {
                console.error("Error deleting resource:", error);
              });
          } else {
            blockUI.release();
          }
        });
      });
    });
  };
  return {
    init: function () {
      respons = document.getElementById("response");
      overlayForm = document.getElementById("table_general");
      blockUI = new KTBlockUI(overlayForm, {
        message:
          '<div class="blockui-message"><span class="spinner-border text-primary"></span> Sedang Menghapus ...</div>',
      });
      toastElement = document.getElementById("kt_docs_toast_toggle");
      toast = bootstrap.Toast.getOrCreateInstance(toastElement);
      form = document.querySelector("#kt_form_validation") ?? false;
      submitButton = document.querySelector("#kt_btn_submit");
      deleteButton = document.querySelectorAll(".ts_remove_row") ?? false;
      if (deleteButton != false) handleClickDelete();
      if (form != false) {
        inputValidated = form.querySelectorAll(".input_validated");
        handleValidation();
        handleSubmitAjax();
      }
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTSubmitGeneral.init();
});
