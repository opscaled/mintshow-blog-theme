/**
 * Script(let)s by @sayanriju
 */

// Cleanly Open Links in Popup Windows
// Ref: https://www.sitepoint.com/jquery-cleanly-open-links-popup-windows/
jQuery(document).ready(function ($) {
  jQuery('a.popup').live('click', function () {
    newwindow = window.open($(this).attr('href'), '', 'height=350,width=450,location=0,menubar=0,resizable=1,status=0,toolbar=0');
    if (window.focus) { newwindow.focus() }
    return false;
  });
});

