<?php

// Serve html for graphical interfaces
if ( stristr( strtolower( $_SERVER['HTTP_USER_AGENT'] ), "mozilla" ) ) {
?>
<!doctype html>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="en">
  <head>
  <title>Your external ip, no tracking, no ads</title>
  <meta name="description" content="Simply returns your external ip in plaintext. No ads, no tracking, open source. Example: curl ifconfig.network">
  <meta name="author" content="Johan Adriaans, johan@driaans.nl">
  <meta name="language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="help" href="https://github.com/johan-adriaans/ifconfig.network" />
  <link rel="license" href="https://github.com/johan-adriaans/ifconfig.network/blob/master/LICENSE.md" />
  </head>
  <body>

<!--

  Dear reader of this source,

  This project exists to scratch an itch. I regularly need to know my internet ip (when behind a NAT firewall)
  and I got fed up with the ad-ridden sites that provide that info. I have been using ifconfig.me for a while but it
  was slow(!) and not always up. I know there are a lot of these sites out there but I kept forgetting their urls and/or
  syntax. So here we are. Easy to use and remember, fast, free and open source.

  You can view the php source here. It is just a symlink to the actual php file:
  https://ifconfig.network/index.phps

  The source for this (tiny) project is available on github.
  https://github.com/johan-adriaans/ifconfig.network

  All this HTML markup is only sent when this page is requested using a browser. When you use
  curl, wget, telnet or any other tool that does not have "mozilla" in their user agent, you will only get
  your internet ip-address and a unix newline.

  If you have any comments or improvements, send a pull request or open an issue on Github.


  May the source be with you,

  Johan Adriaans

-->

  <pre><?php print $_SERVER['REMOTE_ADDR']; ?></pre>
  </body>
</html>

<?php
} else {
  // Serve ip-only for text-browsers
  print $_SERVER['REMOTE_ADDR'] . PHP_EOL;
}
