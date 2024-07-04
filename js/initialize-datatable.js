(function ($, Drupal, drupalSettings) {
    Drupal.behaviors.initializeDataTable = {
      attach: function (context, settings) {
        var dataUrl = drupalSettings.directory_datatable.dataUrl;
        $('#datatable', context).once('initializeDataTable').each(function () {
          $(this).DataTable({
            ajax: dataUrl,
            columns: [
              { data: "id" },
              { data: "title" },
              { data: "email" },
              { data: "division" },
              { data: "contact" },
              { data: "offices" },
              { data: "position" },
            ],
            dom: "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                 "<'row'<'col-sm-12'tr>>" +
                 "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            order: [[0, 'asc']],
            pagingType: "bootstrap",
            language: {
              search: "_INPUT_",
              searchPlaceholder: "Search records"
            }
          });
        });
      }
    };
  })(jQuery, Drupal, drupalSettings);
  