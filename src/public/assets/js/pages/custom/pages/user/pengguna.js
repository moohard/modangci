"use strict";
const KTEventDetail = (() => {
  let resetButton;
  const handleClickReset = () => {
    resetButton.forEach((element) => {
      element.addEventListener("click", (e) => {
        e.preventDefault();
        const eventUrl = e.currentTarget.href;
        Swal.fire({
          html: `Apakah Anda Yakin Reset Password?`,
          icon: "question",
          buttonsStyling: false,
          showCancelButton: true,
          confirmButtonText: "Ya, Reset",
          cancelButtonText: "Tidak, Batalkan!!",
          customClass: {
            confirmButton: "btn btn-success hover-scale",
            cancelButton: "btn btn-danger hover-scale",
          },
        }).then((result) => {
          if (result.isConfirmed) {
            axios
              .post(eventUrl, {
                headers: {
                  "X-Requested-With": "XMLHttpRequest",
                },
              })
              .then((response) => {
                const eR = response.data;
                Swal.fire({
                  html: eR.message,
                  icon: eR.status,
                  showConfirmButton: true,
                });
              })
              .catch((error) => {
                console.error("Error reset password:", error);
              });
          }
        });
      });
    });
  };
  return {
    init: () => {
      resetButton = document.getElementsByClassName("ts_reset_row");
      handleClickReset();
    },
  };
})();
KTUtil.onDOMContentLoaded(() => {
  KTEventDetail.init();
});
