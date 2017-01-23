<script nonce="{{ LayoutHelper::getCSPhash() }}">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo env('GOOGLE_ANALYTICS_TRACKING_ID') ?>', 'auto')

  <?php
    // User ID based tracking
    if (Auth::check()) {
      $shibbolethId = str_replace('@kuleuven.be', '', $_SERVER["REMOTE_USER"]);
      $gaCodeForUser = "ga('set', 'userId', '%s');";
      $uidForGA = 'userid-' . Auth::user()->id;
      echo sprintf($gaCodeForUser, $uidForGA);
    }
  ?>

  ga('send', 'pageview');
</script>
