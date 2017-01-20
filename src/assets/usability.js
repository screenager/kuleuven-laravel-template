$(document).ready(function () {

  (function ($) {
    var baseUrl = document.getElementsByTagName('base')[0].href;

    // Closing unsaved form alert, except for some forms
    $('selector.to.element.to.be.ignored').addClass('ays-ignore');
    $('form').areYouSure();

    // Open all external links in new window, and at rel "noopenener"
    $(function() {
      $('a:not([href=""])').each(function() {
        if (this.hostname !== location.hostname) {
          $(this).addClass('externalLink').attr('target', '_blank').attr('rel', 'noopenener');
        }
      });
    });

  }(jQuery));

});