<?php

// Serve html for graphical interfaces
if ( stristr( $_SERVER['HTTP_USER_AGENT'], "Mozilla" ) ) {
?>

<!doctype html><html itemscope="" itemtype="http://schema.org/WebPage" lang="en">
  <head>
  <title>Your external ip, no tracking, no ads</title>
  <meta name="description" content="Simply returns your external ip in plaintext. No ads, no tracking, open source. Example: curl ifconfig.network">
  <meta name="author" content="Johan Adriaans, johan@driaans.nl">
  <meta name="language" content="en">
  <link rel="help" href="https://github.com/johan-adriaans/ifconfig.network" />
  <link rel="license" href="https://github.com/johan-adriaans/ifconfig.network" />
  </head>
  <body>
  <pre><?php print $_SERVER['REMOTE_ADDR']; ?></pre>
  </body>
</html>

<?php
} else {
  // Serve ip-only for text-browsers
  print $_SERVER['REMOTE_ADDR'] . PHP_EOL;
}
