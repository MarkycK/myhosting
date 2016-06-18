<?php
function __autoload($name){
	include "classes/$name.class.php";
}

$user1 = new User('John Michel', 'Michel', 'kjie21');
$user1->showInfo();

$user2 = new User('jessik Michel', 'jessika', 'ie21');
$user2->showInfo(); 

$user4 = clone $user1;
$user4->showInfo();

$user = new SuperUser('Mark', 'Markyc', '654f', 'admin');
$user->showInfo();
$user->getInfo();
echo ' всего простых юзеров: '.User::$AllObj.'<br/>';
echo 'всего админов: '.SuperUser::$AllObj.'<br/';

?>