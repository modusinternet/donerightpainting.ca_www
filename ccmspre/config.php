<?php
// Domain name
$CFG["DOMAIN"] = "donerightpainting.ca";

// Primary indexes for /ccmstpl/ and /ccmsusr/ sections of the site.
$CFG["INDEX"] = "index";
$CFG["USRINDEX"] = "dashboard/";

// Document root folder globals.
$CFG["DBH"] = NULL;
$CFG["LIBDIR"] = "ccmslib";
$CFG["PREDIR"] = "ccmspre";
$CFG["TPLDIR"] = "ccmstpl";
$CFG["USRDIR"] = "ccmsusr";

// Database globals.
$CFG["DB_HOST"] = "localhost";
$CFG["DB_USERNAME"] = "donerigh_user";
$CFG["DB_PASSWORD"] = "Q$(o_UZIR301";
$CFG["DB_NAME"] = "donerigh_db";

// Display debug info for failed SQL calls.  (Requires $CFG["DEBUG"] to also be enabled.)
// e.g.:
// $CFG["DEBUG_SQL"] = 0; // off
// $CFG["DEBUG_SQL"] = 1; // on
$CFG["DEBUG_SQL"] = 0;

// This is for deep PHP debugging error messages.
// e.g.:
// $CFG["DEBUG_ERROR_REPORTING"] = 0; // off
// $CFG["DEBUG_ERROR_REPORTING"] = 1; // on
$CFG["DEBUG_ERROR_REPORTING"] = 0;

// COOKIE based SESSION expire time.  Set in number of minutes.
// e.g.:
// $CFG["COOKIE_SESSION_EXPIRE"] = 30; // 30 minutes.
// $CFG["COOKIE_SESSION_EXPIRE"] = 180; // 3 hours.
$CFG["COOKIE_SESSION_EXPIRE"] = 120;

// When emails are sent by the server what email address do you want them to be sent from.
$CFG["EMAIL_FROM"] = "info@donerightpainting.ca";
//$CFG["EMAIL_FROM"] = "vince@modusinternet.com";

// When emails are sent by the server what email address do you want them to be sent from.
$CFG["EMAIL_BOUNCES_RETURNED_TO"] = "info@donerightpainting.ca";
//$CFG["EMAIL_BOUNCES_RETURNED_TO"] = "vince@modusinternet.com";

// To enable Google Custom Search Engine in your error pages enter your CustomSearchControl code here.
// To get one for your site visit http://www.google.com/cse/
$CFG["GOOGLE_CUSTOM_SEARCH_ENGINE_CODE"] = "017502438425424321056:tpn9lelhfye";

// To add Google reCaptcha to your web formss enter your recaptcha keys here.
// https://www.google.com/recaptcha/admin/create
$CFG["GOOGLE_RECAPTCHA_PUBLICKEY"] = "6LeXdx0TAAAAADOr0wsMQaZMLxQSoeZHqqfERb7B"; // Site key
$CFG["GOOGLE_RECAPTCHA_PRIVATEKEY"] = "6LeXdx0TAAAAAI4AB6lGhMf0IzWMxvlihPH34Irb"; // Secret key

// To add Google Credentials so that you can embed things like maps to your site add your key here.
// https://console.cloud.google.com
$CFG["GOOGLE_CREDENTIALS_KEY"] = "AIzaSyB_rdphIQZsFgHLqtOY6DpqC7yVCYN2Geg";
