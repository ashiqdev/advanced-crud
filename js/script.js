$(document).ready(function () {
  // adding users
  $(document).on('submit', '#addForm', function (e) {
    e.preventDefault();
    // ajax
    $.ajax({
      url: '/advanced-crud/ajax.php',
      type: 'POST',
      dataType: 'json',
      data: new FormData(this),
      processData: false,
      contentType: false,
      beforeSend: function () {
        console.log('Wait.... data is loading...');
      },

      success: function (response) {
        console.log(response);
      },

      error: function (request, error) {
        console.log('Error ' + error);
      },
    });
  });
});
