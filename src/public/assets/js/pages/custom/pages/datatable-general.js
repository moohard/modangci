"use strict";

// Class definition
const KTDatatableHandler = (() => {
  // Shared letiables
  let table;
  let datatable;

  // Private functions
  const initDatatable = () => {
    datatable = $(table).DataTable({
      info: false,
      order: [],
      pageLength: 10,
      ordering: false,
    });
  };

  // Public methods
  return {
    init: function () {
      table = document.querySelector("#table_general");
      if (!table) {
        return;
      }
      initDatatable();
    },
  };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
  KTDatatableHandler.init();
});
