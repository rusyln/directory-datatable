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
          });
        });
      }
    };
  })(jQuery, Drupal, drupalSettings);
  