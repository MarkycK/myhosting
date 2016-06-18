<?php
class SuperUser extends User implements ISuperUser {
	public $role;
	public static $AllObj = 0;
	function __construct($n, $l, $p, $role)
	{
		parent::__construct($n, $l, $p);
		$this->role = $role;
		++self::$AllObj; 
	} 
	function showInfo(){
		parent::showInfo();
		echo 'SupUs :'.$this->role.'<br><hr>';
	}
    function getInfo(){
    	$arr = array();
    	foreach ($this as $key => $value) {
    		$arr[$key] = $value;
    		return $arr;
        }       
    }
}
?>