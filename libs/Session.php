<?php
class Session{
	
	public static function Init(){
		@session_start();
	}
	
	public static function Set($key, $value){
		
		$_SESSION[$key]=$value;
	}
	
	public static function Get($key)
	{
		if (isset($_SESSION[$key]))
		return $_SESSION[$key];
	}
	
	public static function Destroy(){
		session_destroy();
	}
}