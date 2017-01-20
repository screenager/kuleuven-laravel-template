$(document).ready(function () {

  (function ($) {
    var baseUrl = document.getElementsByTagName('base')[0].href;

    // Improve dropdown fields
    $('.select2').select2({
      theme: "bootstrap",
      allowClear: true,
      placeholder: {
        text: $(this).data('placeholder')
      },
    });

    // WYSIWYG
    tinymce.baseURL = baseUrl + '/tinymce';

    tinymce.init({
      selector: '.wysiwyg',
      plugins: "code, paste, link",
      toolbar: 'undo redo | styleselect | bold italic | link ',
      paste_as_text: true,
      //paste_remove_styles: true,
      //paste_word_valid_elements: "a,b,strong,i,em,h1,h2",
      //paste_webkit_styles: "",
    });

  }(jQuery));

  // Autofocus on first element of object form. @todo move to usability.js, but make it style indendent first
  var firstFormEl = $(".container form:not(.auto-submit-filters)").find("input:text, form textarea").first();
  firstFormEl.focus().val(firstFormEl.val());

});