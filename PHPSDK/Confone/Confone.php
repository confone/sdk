<?php
class Confone {

	private static $appKey = null;
	private static $contentUri = 'https://content.confone.com/rest';
	private static $securityUri = 'https://security.confone.com/rest';
	private static $version = 'v0.1.0';

	public static function setAppKey($appKey) {
		self::$appKey = $appKey;
	}

	public static function getAppKey() {
		return self::$appKey;
	}

	public static function getContentUri() {
		return self::$contentUri;
	}

	public static function getSecurityUri() {
		return self::$securityUri;
	}

	public static function getVersion() {
		return self::$version;
	}
}
?>