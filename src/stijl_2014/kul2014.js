$(document).ready(function () {

  (function ($) {

    $('#mainnav-placeholder').load('https://ppw.kuleuven.be #mainnav', function(response, status, xhr) {
      if (status == "error") {
        console.log("Could not load KUL navigation bar, probably due to a cross domain policy.");
      }
      $(this).find('#mainnav').css("width", 800);
    })

  }(jQuery));

});