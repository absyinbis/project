<?php 
session_start();

require_once 'lib_obj.php';
require_once 'MangerUser.php';

$um = cUserManger::getInstance();
try{

$account = unserialize($_SESSION["ACCOUNT"]);

$user = new cUser();

$user->setName($_POST["name"]);
$user->setUserName($_POST["username"]);
$user->setPassword($_POST["password"]);
$user->setPhoneNumber($_POST["phonenumber"]);
$user->setWho($account->getId());
$user->setState("1");

$um->adduser($user);
//$um->logg("Add","PS",date("yy-m-d"),$account->getId());

header("Location:../html/AdminViewUser.php");

}

catch(Exception $e){

		$_SESSION["ERROR"] = $e->getMessage();
		header("Location:../html/AdminViewUser.php");


}

 ?>