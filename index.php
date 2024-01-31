<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <!-- Primary Meta Tags -->
    <title>Home - My Bio</title>
    <link rel="icon" href="/resources/img/icons/favico.svg" type="image/x-icon">
    <link rel="stylesheet" href="/resources/css/social-media.css?version=1.1">
    <link rel="stylesheet" href="/resources/css/main.css?version=1.1">
    <meta name="title" content="Home - My Bio">
    <meta name="description" content="My personal website in a nutshell :D">
    <meta content="#000" data-react-helmet="true" name="theme-color">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://therealone78.ddns.net/">
    <meta property="og:title" content="Home - My Bio">
    <meta property="og:description" content="My personal website in a nutshell :D">
    <meta property="og:image" content="https://therealone78.ddns.net/resources/icons/game.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://therealone78.ddns.net/">
    <meta property="twitter:title" content="Home - My Bio">
    <meta property="twitter:description" content="My personal website in a nutshell :D">
    <meta property="twitter:image" content="https://therealone78.ddns.net/resources/icons/game.png">

    <style>
      .red-role {
        color: red;
        background-color: rgba(255, 0, 0, 0.3)
      }
      .red-role:hover {
        background-color: rgba(255, 0, 0, 0.7);
      }
    </style>
  </head>

  <body>
    <div id="wrap">
      <div id="main">
        <?php
          $HEADER_TITLE="Home - My Bio";
          include($_SERVER['DOCUMENT_ROOT'] . "/resources/header.php");
        ?>
        <div class="dw_cool">
          <h1>user@therealone78.ddns.net:~$ whoareyou</h1>
          I go by the name of TheRealOne78 or RealOne. <abbr title="In Real Life">IRL</abbr> I am a 19 year old boy called Bajcsi Elias-Robert. I like dev, games, electronics, cooking, my bike and my Ender 3 V2 3D printer.<br>
          I live in Romania (cuz why not <abbr title="Laugh Out Loud">LOL</abbr>), in a nice ass city called Brașov.

          <h1>user@therealone78.ddns.net:~$ Why did you make this website</h1>
          Because it is:
          <ul>
            <li>My right</li>
            <li>My internet subscription</li>
            <li>My domain</li>
            <li>My IP address</li>
            <li>My HTML/CSS/JS code</li>
            <li>My server (I mean... it's just an old 1-core laptop)</li>
            <li>My money</li>
            <li>My everything!</li>
          </ul>
          No one can tell me what to do with my site.<br>
          <br>

          But here is another reason as to why I've made this website (probably interesting <abbr title="I Don't Know">IDK</abbr>):<br>
          I met the owner of a minecraft server, a very nice guy, <span class="red-role">@Salzamar</span>. He taught me on how to host a FTP and HTTP server. He wasn't pissed at all (at least I hope), he had a lot of patience teaching me and I really respect him for that.<br>
          Here is his 1.6.2 minecraft server, <a href="http://advguild.myftp.org" target="_blank">advguild.myftp.org</a>.

          <h1>user@therealone78.ddns.net:~$ Do you have TikTok</h1>
          Do: Fatal Error: Unknown argument "TikTok". Please shut down your current computing device with the help of a hammer and other tools immediately to resolve this error!<br>
          Check this video for more clear instructions: <a href="https://youtu.be/HtTUsOKjWyQ" target="_blank">https://youtu.be/HtTUsOKjWyQ</a>.

          <h1>user@therealone78.ddns.net:~$ Does this website use any cookies?</h1>
          <b>NO!</b> this website does <b>NOT</b> use <a href="https://gdpr.eu/cookies/" target="_blank">cookies&trade;</a>. YAY, more cookies for you to eat! Noice man >_><br>
          You reached as well the end of this webpage <abbr title="By The Way">BTW</abbr>.
        </div>
      </div>
    </div>
    <div id="footer">
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/resources/footer.html"); ?>
    </div>
  </body>
</html>
