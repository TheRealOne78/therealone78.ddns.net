---
title: Software - Software I've created so far
description: Software I have created so far
keywords: software, oawp, oawp-gui, therealone78's browser homepage, therealone78's high contrast firefox newtab page, ntfy resources usage plugin, pybattery, therealone78's calculator
---

Over the past years I've made software that is quite useful, at least for me.

Even though I am really greateful that I've made this software reality, I am still not satisfied enough, so I decided to free my software and publish it to the world with the hope that it will be useful.

A good majority of my software is licensed under the GNU GPL v3+ license, with a few exceptions where I've decided to license them with more permissive copyright rules, like the LGPL or the MIT license.

"_Software is like sex: It's better when it's free!_"<br>
\- Linus Benedict Torvalds

# Software listing

## OAWP - Open Animated Wallpaper Player
<div class="sw-container">
  <div class="sw-img-container">
    <img src="/resources/img/software/OAWP_logo_row_v2.svg" class="sw-img">
  </div>
  <div class="sw-text">
  OAWP is my main focus nowadays. It's an Animated Wallpaper Player designed to work with compositors and be highly configurable.
  OAWP is based on AlecsFerra's animated_wallpaper.c github gist. The original source code isn't very intuitive, lacks configurability and needs a recompilation everytime the user wants to change the animeted wallpaper and it's a very tedious process to change the wallpaper, the user having to edit every single line containing a frame.

 OAWP on the other hand solves these problems, the user having to compile and install OAWP once and configure the wallpaper in a more intuitive config file located either in `~/.config/oawp/oawp.conf` or at a specified location, at user's choice. With this, the user also get's far more choice on how to use OAWP, like:
- Randomize animated wallpapers at startup
- Specify the time, animated wallpaper directory or static image in one config file
- Save multiple config files for later
- Share config files
- And more coming in the future!

  Although this software has many features for it's early days, the state of OAWP is still very buggy and works only for few window managers like dwm, where wallpaper daemons aren't already used. Scaling wallpapers isn't yet available and converting gifs to frames is still a pain because of the file sorting system.
  </div>
</div>

Useful <abbr title="Uniform Resource Locator">URL</abbr>s:
- GitHub (OAWP): <a class="github" href="https://github.com/OAWP/OAWP" target="_blank">https://github.com/TheRealOne78/OAWP</a>
- GitHub (OAWP-gui): <a class="github" href="https://github.com/OAWP/OAWP-gui" target="_blank">https://github.com/TheRealOne78/OAWP-gui</a>
- Wiki (GitHub): <a class="github" href="https://github.com/OAWP/OAWP/wiki" target="_blank">https://github.com/TheRealOne78/OAWP/wiki</a>
- License: <a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank" class="thirdParty">GNU GPL v3+</a>

## TheRealOne78's Browser Homepage
A fairly minimalistic but also neofetch-like browser homepage, made for those who got sick of the default boring browser homepage.

<img src="/resources/img/software/custom-browser-homepage.png" width="70%">

It uses JavaScript to randomize the text color and image everytime the user accesses or refreshes the page. By default, it has 33 aesthetic anime images with 1:1 aspect ratio and 7 colors representing the legacy virtual terminal colors. It also uses the VT323 font to look like an old terminal as much as possible.

Even though not a whole lot of people know how to program in JavaScript and edit HTML and CSS, editing those files is self-intuitive, making customization a somehow easy process.

Useful <abbr title="Uniform Resource Locator">URL</abbr>s:
- GitHub: <a class="github" href="https://github.com/TheRealOne78/custom-browser-homepage" target="_blank">https://github.com/TheRealOne78/custom-browser-homepage</a>
- Reddit thread: <a class="reddit" href="https://old.reddit.com/r/startpages/comments/11gz58k/a_minimalistic_but_neofetchlike_firefox_startpage/" target="_blank">https://old.reddit.com/r/startpages/comments/11gz58k/a_minimalistic_but_neofetchlike_firefox_startpage/</a>
- Live demo (GitHub): <a class="github" href="https://therealone78.github.io/custom-browser-homepage/homepage.html" target="_blank">https://therealone78.github.io/custom-browser-homepage/homepage.html</a>
- Live demo (therealone78.ddns.net): <a href="https://therealone78.ddns.net/resources/custom-browser-homepage/homepage.html" target="_blank">https://therealone78.ddns.net/resources/custom-browser-homepage/homepage.html</a>
- License: <a href="https://mit-license.org/" class="thirdParty">MIT</a> with <a href="https://www.copyright.gov/fair-use/" target="_blank" class="thirdParty">Fair Use</a> exceptions when mentioned


## TheRealOne78's High Contrast Firefox Newtab Page</h3>
A custom Firefox newtab page that features a high contrast theme and a vectorized cute firefox logo.

<img src="/resources/img/software/firefox-newtab-page.png" width="70%">

Useful <abbr title="Uniform Resource Locator">URL</abbr>s:
- GitHub: <a class="github" href="https://github.com/TheRealOne78/highcontrast-firefox-newtab-page" target="_blank">https://github.com/TheRealOne78/highcontrast-firefox-newtab-page</a>
- Reddit thread: <a class="reddit" href="https://old.reddit.com/r/startpages/comments/11xs8pp/a_high_contrast_firefox_newtab_page/" target="_blank">https://old.reddit.com/r/startpages/comments/11xs8pp/a_high_contrast_firefox_newtab_page/</a>
- License: <a href="https://mit-license.org/" class="thirdParty">MIT</a> with <a href="https://www.copyright.gov/fair-use/" target="_blank" class="thirdParty">Fair Use</a> exceptions when mentioned


## ntfy-resources-usage plugin
'ntfy-resources-usage' is a plugin for ntfy.sh with the purpose to send phone alerts when your unix-based computer is running out of resources such as memory or storage.

<img src="/resources/img/software/NTFY_Screenshot.png" width="350px">

This plugin is written in bash and it is highly customizable.

Useful <abbr title="Uniform Resource Locator">URL</abbr>s:
- GitHub: <a class="github" href="https://github.com/TheRealOne78/ntfy-resources-usage" target="_blank">https://github.com/TheRealOne78/ntfy-resources-usage</a>
- Wiki (GitHub): <a class="github" href="https://github.com/TheRealOne78/ntfy-resources-usage/wiki">https://github.com/TheRealOne78/ntfy-resources-usage/wiki</a>
- NTFY website: <a href="https://ntfy.sh/" target="_blank" class="thirdParty">https://ntfy.sh/</a>
- NTFY Android app (Google Play Store): <a class="thirdParty" href="https://play.google.com/store/apps/details?id=io.heckel.ntfy" target="_blank">https://play.google.com/store/apps/details?id=io.heckel.ntfy</a>
- NTFY Android app (F-Droid Store): <a class="thirdParty" href="https://f-droid.org/en/packages/io.heckel.ntfy/">https://f-droid.org/en/packages/io.heckel.ntfy/</a>
- NTFY IOS app (Apple App Store): <a class="thirdParty" href="https://apps.apple.com/us/app/ntfy/id1625396347" target="_blank">https://apps.apple.com/us/app/ntfy/id1625396347</a>
- License: <a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank" class="thirdParty">GNU GPL v3+</a>

## PyBattery
A python code that will change android device battery level, looping from 1% to 1000% and back.

<img src="/resources/img/software/PyBattery_Screenshot.png" width="350px">

Useful <abbr title="Uniform Resource Locator">URL</abbr>s:
- GitHub: <a class="github" href="https://github.com/TheRealOne78/pybattery" target="_blank">https://github.com/TheRealOne78/pybattery</a>
- Wiki (GitHub): <a class="github" href="https://github.com/TheRealOne78/pybattery/wiki">https://github.com/TheRealOne78/pybattery/wiki</a>
- License: <a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank" class="thirdParty">GNU GPL v3+</a>

## TheRealOne78's Calculator
My first program  - a calculator

<img src="/resources/img/software/calculator.png">

Unlike most programmers, my first program I've written wasn't a <a href="https://en.wikipedia.org/wiki/%22Hello,_World!%22_program" target="_blank">hello world program</a> (I know, it's weird), but a calculator! This also makes it my first real project to add in a git <abbr title="Version Control System">VCS</abbr> and upload it to GitHub.

Written in C++, this program features:
- A configurable ASCII art greeter, with the default one being a "math" message
- Assembly operation
- Substraction operation
- Multiplication operation
- Splitting operation
- Repeatable prompting
- Colors
- Microsoft Windows NT and POSIX support
- Free license (GNU GPL V3+), both as in freedom and beer!
- And more coming in the future...

Useful <abbr title="Uniform Resource Locator">URL</abbr>s:
- GitHub: <a class="github" href="https://github.com/TheRealOne78/calculator" target="_blank">https://github.com/TheRealOne78/calculator</a>
- Wiki (GitHub): <a class="github" href="https://github.com/TheRealOne78/calculator/wiki">https://github.com/TheRealOne78/calculator/wiki</a>
- License: <a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank" class="thirdParty">GNU GPL v3+</a>
