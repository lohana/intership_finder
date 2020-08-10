<?php
	
class Session {
	
	public static function init() {
		if (session_id() == '') {
			session_start();
		}
	}
	
	public static function set($key, $value) {
		$_SESSION[$key] = $value;
	}
	
	public static function get($key) {
		if (isset($_SESSION[$key])) {
			$value = $_SESSION[$key];
			return Filter::XSSFilter($value);
		}
	}
	
	public static function add($key, $value) {
		$_SESSION[$key][] = $value;
	}
	
	public static function remove($key) {
		unset($_SESSION[$key]);
	}
	
	public static function destroy() {
		session_destroy();
	}
	
	public static function userIsLoggedIn() {
		return (self::get('user_logged_in') ? true : false);
	}
}