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
require(dirname(__FILE__) . '/Confone/Util.php');

// Content Management
require(dirname(__FILE__) . '/Confone/Content.php');

// Security
require(dirname(__FILE__) . '/Confone/Security.php');
