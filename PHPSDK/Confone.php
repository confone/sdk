<?php

// Tested on PHP 5.2, 5.3

if (!function_exists('curl_init')) {
  throw new Exception('Confone needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('Confone needs the JSON PHP extension.');
}
if (!function_exists('mb_detect_encoding')) {
  throw new Exception('Confone needs the Multibyte String PHP extension.');
}

// Confone singleton
require(dirname(__FILE__) . '/Confone/Confone.php');

// Utilities
require(dirname(__FILE__) . '/Confone/Utility.php');

// Service Base Class
require(dirname(__FILE__) . '/Confone/Service.php');

// Content Service
require(dirname(__FILE__) . '/Confone/Content.php');

// Security Service
require(dirname(__FILE__) . '/Confone/Security.php');
require(dirname(__FILE__) . '/Confone/Security/Rule.php');
require(dirname(__FILE__) . '/Confone/Security/Rule_Token.php');
require(dirname(__FILE__) . '/Confone/Security/Subject.php');
require(dirname(__FILE__) . '/Confone/Security/Subject_Blacklist.php');
require(dirname(__FILE__) . '/Confone/Security/Subject_Geodetic.php');
require(dirname(__FILE__) . '/Confone/Security/Subject_Throttling.php');
require(dirname(__FILE__) . '/Confone/Security/Subject_Token.php');
require(dirname(__FILE__) . '/Confone/Security/Subject_Whitelist.php');
