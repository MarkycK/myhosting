<?php
class User extends AUser {
	public $name;
	public $login;
	public $password;
	public static $AllObj = 0;
	function __construct($n, $l, $p)
	{
		$this->name = $n;
		$this->password = $p;
		$this->login = $l;
		++self::$AllObj;
	}
	function __destruct(){
		echo 'User : '.$this->name.' удалён! <br>';
	}
	function showInfo(){
		echo 'Name :'.$this->name.'<br>';
		echo 'Login :'.$this->login.'<br>';
		echo 'Password :'.$this->password.'<br><hr>';
	}
	function __clone(){
		$this->name = 'user';
		$this->login = 'user';
		$this->password= 'password';
	}

}
?>