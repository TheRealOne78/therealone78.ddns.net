<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <!-- Primary Meta Tags -->
    <title>Software - Software I've created so far</title>
    <link rel="icon" href="/resources/img/icons/favico.svg" type="image/x-icon">
    <link rel="stylesheet" href="/resources/css/main.css?version=1.1">
    <link rel="stylesheet" href="/resources/css/social-media.css?version=1.1">
    <meta name="title" content="Software - Software I've created so far">
    <meta name="description" content="Software I have created so far">
    <meta content="#000" data-react-helmet="true" name="theme-color">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://therealone78.ddns.net/">
    <meta property="og:title" content="Software - Software I've created so far">
    <meta property="og:description" content="Software I have created so far">
    <meta property="og:image" content="https://therealone78.ddns.net/resources/icons/game.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://therealone78.ddns.net/">
    <meta property="twitter:title" content="Software - Software I've created so far">
    <meta property="twitter:description" content="Software I have created so far">
    <meta property="twitter:image" content="https://therealone78.ddns.net/resources/icons/game.png">
  </head>

  <body>
    <div id="wrap">
      <div id="main">
        <?php
          $HEADER_TITLE="Software - Software I've created so far";
          include($_SERVER['DOCUMENT_ROOT'] . "/resources/header.php");
        ?>
        <div class="dw_cool">
          Over the past years I've made software that is quite useful, at least for me.<br>
          Even tho I am quite greateful that I've made this software reality, I am still not satisfied enough, so I decided to free my software and publish it to the world with the hope that it will be useful.<br>
          A good majority of my software is licensed under the GNU GPL v3+ license, with a few exceptions where I've decided to license them with more permissive copyright rules, like the LGPL or the MIT license.<br>
          <br>
          "<i>Software is like sex: It's better when it's free!</i>"<br>
          - Linus Benedict Torvalds<br>
          <br>

          <h1 id="software-listing">Software listing</h1><hr>

          <!--OAWP - X11 Animated Wallpaper Player-->
          <h3 id="oawp---x11-animated-wallpaper-player">OAWP - X11 Animated Wallpaper Player</h3>
          <img src="/resources/img/software/OAWP_logo_row_v2.svg" width="30%"><br>
          <p>OAWP is my main focus nowadays. It's an Animated Wallpaper Player designed to work with compositors and be highly configurable.</p>
          <p>OAWP is based on AlecsFerra's animated_wallpaper.c github gist. The original source code isn't very intuitive, lacks configurability and needs a recompilation everytime the user wants to change the animeted wallpaper and it's a very tedious process to change the wallpaper, the user having to edit every single line containing a frame.<br>
          OAWP on the other hand solves these problems, the user having to compile and install OAWP once and configure the wallpaper in a more intuitive config file located either in <code>~/.config/oawp/oawp.conf</code> or at a specified location, at user's choice. With this, the user also get's far more choice on how to use OAWP, like:
            <ul>
              <li>Randomize animated wallpapers at startup</li>
              <li>Specify the time, animated wallpaper directory or static image in one config file</li>
              <li>Save multiple config files for later</li>
              <li>Share config files</li>
              <li>And more coming in the future!</li>
            </ul>
          </p>
          <p>Although this software has many features for it's early days, the state of OAWP is still very buggy and works only for few window managers like dwm, where wallpaper daemons aren't already used. Scaling wallpapers isn't yet available and converting gifs to frames is still a pain because of the file sorting system.</p>

          <p>Useful <abbr title="Uniform Resource Locator">URL</abbr>s:
            <ul>
              <li>GitHub (OAWP): <a class="github" href="https://github.com/OAWP/OAWP" target="_blank">https://github.com/TheRealOne78/OAWP</a></li>
              <li>GitHub (OAWP-gui): <a class="github" href="https://github.com/OAWP/OAWP-gui" target="_blank">https://github.com/TheRealOne78/OAWP-gui</a></li>
              <li>Wiki (GitHub): <a class="github" href="https://github.com/OAWP/OAWP/wiki" target="_blank">https://github.com/TheRealOne78/OAWP/wiki</a></li>
              <li>License: <a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank">GNU GPL v3+</a></li>
            </ul>
          </p>
          <br>

          <!--TheRealOne78's Browser Homepage-->
          <h3 id="therealone78s-browser-homepage">TheRealOne78's Browser Homepage</h3>
          <p>A fairly minimalistic but also neofetch-like browser homepage, made for those who got sick of the default boring browser homepage.</p>
          <img src="/resources/img/software/custom-browser-homepage.png" width="70%"><br>
          <p>It uses JavaScript to randomize the text color and image everytime the user accesses or refreshes the page. By default, it has 33 aesthetic anime images with 1:1 aspect ratio and 7 colors representing the legacy virtual terminal colors. It also uses the VT323 font to look like an old terminal as much as possible.</p>
          <p>Even though not a whole lot of people know how to program in JavaScript and edit HTML and CSS, editing those files is self-intuitive, making customization a somehow easy process.</p>

          <p>Useful <abbr title="Uniform Resource Locator">URL</abbr>s:
            <ul>
              <li>GitHub: <a class="github" href="https://github.com/TheRealOne78/custom-browser-homepage" target="_blank">https://github.com/TheRealOne78/custom-browser-homepage</a></li>
              <li>Reddit thread: <a class="reddit" href="https://old.reddit.com/r/startpages/comments/11gz58k/a_minimalistic_but_neofetchlike_firefox_startpage/" target="_blank">https://old.reddit.com/r/startpages/comments/11gz58k/a_minimalistic_but_neofetchlike_firefox_startpage/</a></li>
              <li>Live demo (GitHub): <a class="github" href="https://therealone78.github.io/custom-browser-homepage/homepage.html" target="_blank">https://therealone78.github.io/custom-browser-homepage/homepage.html</a></li>
              <li>Live demo (therealone78.ddns.net): <a href="https://therealone78.ddns.net/resources/custom-browser-homepage/homepage.html" class="therealone78" target="_blank">https://therealone78.ddns.net/resources/custom-browser-homepage/homepage.html</a></li>
              <li>License: <a href="https://mit-license.org/">MIT</a> with <a href="https://www.copyright.gov/fair-use/" target="_blank">Fair Use</a> exceptions when mentioned</li>
            </ul>
          </p>
          <br>

          <!--TheRealOne78's High Contrast Firefox Newtab Page-->
          <h3 id="therealone78s-high-contrast-firefox-newtab-page">TheRealOne78's High Contrast Firefox Newtab Page</h3>
          <p>A custom Firefox newtab page that features a high contrast theme and a vectorized cute firefox logo.</p>
          <img src="/resources/img/software/firefox-newtab-page.png" width="70%"><br>

          <p>Useful <abbr title="Uniform Resource Locator">URL</abbr>s:
            <ul>
              <li>GitHub: <a class="github" href="https://github.com/TheRealOne78/highcontrast-firefox-newtab-page" target="_blank">https://github.com/TheRealOne78/highcontrast-firefox-newtab-page</a></li>
              <li>Reddit thread: <a class="reddit" href="https://old.reddit.com/r/startpages/comments/11xs8pp/a_high_contrast_firefox_newtab_page/" target="_blank">https://old.reddit.com/r/startpages/comments/11xs8pp/a_high_contrast_firefox_newtab_page/</a></li>
              <li>License: <a href="https://mit-license.org/">MIT</a> with <a href="https://www.copyright.gov/fair-use/" target="_blank">Fair Use</a> exceptions when mentioned</li>
            </ul>
          </p>
          <br>

          <!--ntfy-resources-usage plugin-->
          <h3 id="ntfy-resources-usage-plugin">ntfy-resources-usage plugin</h3>
          <p>'ntfy-resources-usage' is a plugin for ntfy.sh with the purpose to send phone alerts when your unix-based computer is running out of resources such as memory or storage.</p>
          <img src="/resources/img/software/NTFY_Screenshot.png" width="350px"><br>
          <p>This plugin is written in bash and it is highly customizable.</p>

          <p>Useful <abbr title="Uniform Resource Locator">URL</abbr>s:
            <ul>
              <li>GitHub: <a class="github" href="https://github.com/TheRealOne78/ntfy-resources-usage" target="_blank">https://github.com/TheRealOne78/ntfy-resources-usage</a></li>
              <li>Wiki (GitHub): <a class="github" href="https://github.com/TheRealOne78/ntfy-resources-usage/wiki">https://github.com/TheRealOne78/ntfy-resources-usage/wiki</a></li>
              <li>NTFY website: <a href="https://ntfy.sh/" target="_blank">https://ntfy.sh/</a></li>
              <li>NTFY Android app (Google Play Store): <a href="https://play.google.com/store/apps/details?id=io.heckel.ntfy" target="_blank">https://play.google.com/store/apps/details?id=io.heckel.ntfy</a></li>
              <li>NTFY Android app (F-Droid Store): <a href="https://f-droid.org/en/packages/io.heckel.ntfy/">https://f-droid.org/en/packages/io.heckel.ntfy/</a></li>
              <li>NTFY IOS app (Apple App Store): <a href="https://apps.apple.com/us/app/ntfy/id1625396347" target="_blank">https://apps.apple.com/us/app/ntfy/id1625396347</a></li>
              <li>License: <a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank">GNU GPL v3+</a></li>
            </ul>
          </p>
          <br>

          <!--PyBattery-->
          <h3 id="pybattery">PyBattery</h3>
          <p>A python code that will change android device battery level, looping from 1% to 1000% and back.</p>
          <img src="/resources/img/software/PyBattery_Screenshot.png" width="350px"><br>

          <p>Useful <abbr title="Uniform Resource Locator">URL</abbr>s:
            <ul>
              <li>GitHub: <a class="github" href="https://github.com/TheRealOne78/pybattery" target="_blank">https://github.com/TheRealOne78/pybattery</a></li>
              <li>Wiki (GitHub): <a class="github" href="https://github.com/TheRealOne78/pybattery/wiki">https://github.com/TheRealOne78/pybattery/wiki</a></li>
              <li>License: <a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank">GNU GPL v3+</a></li>
            </ul>
          </p>
          <br>

          <!--TheRealOne78's Calculator-->
          <h3 id="therealone78s-calculator">TheRealOne78's Calculator</h3>
          <p>My first program  - a calculator</p>
          <img src="/resources/img/software/calculator.png"><br>
          <p>Unlike most programmers, my first program I've written wasn't a <a href="https://en.wikipedia.org/wiki/%22Hello,_World!%22_program" target="_blank">hello world program</a> (I know, it's weird), but a calculator! This also makes it my first real project to add in a git <abbr title="Version Control System">VCS</abbr> and upload it to GitHub.</p>
          <p>Written in C++, this program features:
            <ul>
              <li>A configurable ASCII art greeter, with the default one being a "math" message</li>
              <li>Assembly operation</li>
              <li>Substraction operation</li>
              <li>Multiplication operation</li>
              <li>Splitting operation</li>
              <li>Repeatable prompting</li>
              <li>Colors</li>
              <li>Microsoft Windows NT and POSIX support</li>
              <li>Free license (GNU GPL V3+), both as in freedom and beer!</li>
              <li>And more coming in the future...</li>
            </ul>
          </p>

          <p>Useful <abbr title="Uniform Resource Locator">URL</abbr>s:
            <ul>
              <li>GitHub: <a class="github" href="https://github.com/TheRealOne78/calculator" target="_blank">https://github.com/TheRealOne78/calculator</a></li>
              <li>Wiki (GitHub): <a class="github" href="https://github.com/TheRealOne78/calculator/wiki">https://github.com/TheRealOne78/calculator/wiki</a></li>
              <li>License: <a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank">GNU GPL v3+</a></li>
            </ul>
          </p>
          <br>

        </div>
      </div>
    </div>
    <div id="footer">
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/resources/footer.html"); ?>
    </div>
  </body>
</html>
