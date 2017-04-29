<?php

/* This file should not be pushed to live site apart from extenuating circumstances 
 * (will overwrite database connection and 301 redirects). In case of disaster, local
 * database connection details, pantheon database connection details and redirection
 * definitions are listed in /sites/default/settings_notes */

/* Redirects */

if (($_SERVER['REQUEST_URI'] == '/account') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://myaccount.egopowerplus.co.uk/account');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/account/login') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://myaccount.egopowerplus.co.uk/account');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/account/register') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://myaccount.egopowerplus.co.uk/account/register');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/ego-blog') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/ego-blog/best-practices-for-your-hedge-trimming') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/ego-blog/best-practice-with-your-leaf-blower') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/ego-blog/best-practises-to-keep-your-lawn-healthy') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/ego-blog/recycling-the-fallen-leaves-from-your-garden') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/ego-blog/the-perfect-wood-pile') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/ego-blog/think-you-know-batteries-think-again') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/ego-blog/use-salt-with-a-pinch-of-salt') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/5-gadgets-that-are-saviours-for-the-unorganised') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/after-sales-appointment-at-ego') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/ego') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/ego-lawnmower-named-which-best-buy') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/ego-power-best-buy-by-which') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/ego-power-continues-to-break-the-rules') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/ego-power-expands-uk-team') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/ego-power-to-release-an-autumnal-product-package-for-gardeners') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/ego-show-press-new-multi-tool') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/get-ready-for-winter-with-no-cords-no-petrol-and-no-hassle') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/telegraph') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/the-best-lightweight-cordless-mowers') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/the-long-and-short-of-it-introduced-to-ego-s-hedgetrimmer-range') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/tips-for-a-june-garden-and-for-getting-over-chelsea') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news/which-finds-the-best-strimmers-for-your-garden') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news?page=1') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news?page=2') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/news?page=3') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16047915-mower-general-tips-and-safety') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16047919-mower-blade-changing-and-sharpening') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16047931-mower-how-to-install-and-remove-battery') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16047967-hedge-trimmer-proper-ergonomics') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16047971-hedge-trimmer-general-tips-and-safety') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16047979-hedge-trimmer-how-to-side-cut') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16047987-hedge-trimmer-how-to-start-and-stop') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16047995-hedge-trimmer-56v-battery') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16047999-hedge-trimmer-battery-charger') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048003-hedge-trimmer-how-to-install-and-remove-battery') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048011-string-trimmer-how-to-start-and-stop') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048015-string-trimmer-proper-ergonomics') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048019-string-trimmer-how-to-replace-your-line-with-a-pre-wound-spool') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048023-string-trimmer-how-to-replace-your-line-by-winding') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048027-string-trimmer-how-to-mount-and-adjust-the-front-assist-handle') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048031-string-trimmer-how-to-install-and-remove-battery') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048047-string-trimmer-general-tips-and-safety') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048051-string-trimmer-56v-battery') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048055-string-trimmer-standard-battery-charger') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048059-blower-how-to-start-and-stop') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048063-blower-standard-battery-charger') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048067-blower-how-to-attach-the-blower-tube') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048071-blower-general-tips-and-safety') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048075-blower-how-to-install-and-remove-the-battery-pack') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048079-blower-how-to-adjust-air-velocity') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048083-blower-56v-battery') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048087-ego-mower-testimonial') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048091-ego-testimonial-don-wilkins-its-all-about-the-torque') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048099-ego-leaf-blower-testimonial') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048107-ego-power-56-volt-cordless-lawn-mower-information') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048111-ego-power-56-volt-cordless-string-trimmer-information') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048115-ego-power-56-volt-cordless-hedge-trimmer-information') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048119-ego-power-56-volt-cordless-lawn-equipment') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048123-ego-power-56-volt-cordless-leaf-blower-information') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048127-ego-testimonial-matthew-robbins-this-is-not-what-i-was-expecting') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16048131-ego-testimonial-james-morrill-blower-talk') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/16049659-ego-testimonial-don-wilkins-makes-me-happy') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/19037303-chain-saw-how-to-replace-the-bar-and-chain') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/19037323-chain-saw-how-to-clean') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/19037331-chain-saw-how-to-operate-the-chain-brake') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/19037339-chain-saw-standard-battery-charger') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/19037351-chain-saw-general-tips-and-safety') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/19037355-chain-saw-56v-battery') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/19037359-chain-saw-how-to-lubricate-the-chain') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/19037371-chain-saw-how-to-cut') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/19037375-chain-saw-how-to-adjust-the-chain') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/19037379-chain-saw-how-to-start-and-stop-the-chain-saw') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/19037383-chain-saw-proper-ergonomics') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/19037387-chain-saw-how-to-install-and-remove-the-battery-pack') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/46859139-string-trimmer-how-to-adjust-the-cutting-line-length') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/56') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/56v') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/adjust') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/air') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/attach') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/bar') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/battery') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/battery?page=1') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/battery?page=2') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/blade') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/blower') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/blower?page=1') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/blower?page=2') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/brake') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/chain') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/chainsaw') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/chain-saw') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/chainsaw?page=1') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/chain-saw?page=1') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/chainsaw?page=2') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/chain-saw?page=2') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/change') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/changing') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/charge') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/charger') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/clean') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/cut') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/cutting-line') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/ergonomics') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/front') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/general') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/grip') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/handle') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/hedge') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/hedge-trimmer') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/how-to') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/how-to?page=1') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/how-to?page=2') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/how-to?page=3') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/how-to?page=4') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/how-to?page=5') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/how-to?page=6') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/install') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/lights') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/lubricate') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/mount') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/mower') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/mower?page=1') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/mower?page=2') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/pack') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/proper') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/remove') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/replace') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/safety') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/safety?page=1') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/safety?page=2') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/sharpen') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/sharpening') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/side') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/standard') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/start') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/start-and-stop') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/stop') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/string-trimmer') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/string-trimmer?page=1') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/string-trimmer?page=2') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/technology') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/testimonial') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/tips') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/trimmer') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/tube') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/velocity') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/volt') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog/tagged/winding') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog?page=1') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog?page=2') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog?page=3') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog?page=4') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog?page=5') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog?page=6') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog?page=7') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/blogs/video-blog?page=8') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections/all') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections/all?page=1') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections/all?page=2') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections/coming-soon') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections/ego-accessories') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products/accessories');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections/ego-power-batteries-chargers') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products/batteries-chargers');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections/ego-power-chainsaw') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products/chainsaws');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections/ego-power-hedge-trimmer') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products/hedge-trimmers');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections/ego-power-leaf-blower') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products/leaf-blowers');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections/ego-power-line-trimmers') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products/line-trimmers-brush-cutters');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections/ego-power-mowers') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products/mowers');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/collections/ego-power-multi-tool-1') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/products/multi-tool');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/pages/about-ego') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/our-story');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/pages/contact-us') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/contact');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/pages/promo1-freelinetrimmer') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/promo1-freelinetrimmer');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/pages/promo2-freeglovesandglasses') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/promo2-freeglovesandglasses');
  exit();
}
if (($_SERVER['REQUEST_URI'] == '/pages/promo3-multitool') &&
  // Check if Drupal or WordPress is running via command line
  (php_sapi_name() != "cli")) {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://www.egopowerplus.co.uk/promo3-multitool');
  exit();
}

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all envrionments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to insure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}

$settings['hash_salt'] = 'klrwZW6YTn5540ensN7myhnmzJd3RitOGLh7Uou2CQhbidisns4eBqFKtArUw3ON-pZIVr-6zQ';

