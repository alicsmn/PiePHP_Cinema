<?php
namespace Model;

use \Core\ORM;
use \Core\Entity;

class UserModel extends Entity 
{
	public $table = 'user';
	public function getInfos() {
		$find = $this->orm->findORM($this->table , $params =array(' WHERE' => 'email = "' . $this->email .'"'));
		$_SESSION['id'] = $find[0]['id'];
		$_SESSION['name'] = $find[0]['name'];
		$_SESSION['lastname'] = $find[0]['lastname'];
		$_SESSION['email'] = $find[0]['email'];
		$_SESSION['password'] = $find[0]['password'];
	}
}
?>