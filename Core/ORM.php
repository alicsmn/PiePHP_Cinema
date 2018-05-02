<?php
namespace Core;

use \Core\Database;
use \Core\Entity;

class ORM extends Database
{

	public function createORM ($table, $fields)
	{
		$this->query("INSERT INTO $table(" . implode(',', array_keys($fields)) . ") VALUES('" . implode('\',\'', $fields) . "')");
		$this->execute();
        return $this->last_id();
	}

	public function readORM ($table, $id)
	{
		$this->query('SELECT * FROM ' .$table. ' WHERE id = '.$id.'');
		$tab = $this->fetch();
		return $tab;
	}

	public function updateORM ($table, $id, $fields)
	{
		$str = "";
		unset($fields['id']);
		foreach ($fields as $key => $value) {
			$str .= " $key= '$value',";
		}
		$str1 = substr($str,0, -1);
		$this->query("UPDATE $table SET $str1 WHERE id= $id");
		$tab = $this->execute();
		return $tab;
	}

 	public function deleteORM ($table, $id) 
 	{
		$tab = $this->query("DELETE FROM $table WHERE id= $id");
		$tab = $this->execute();
		return $tab;
	}

	public function findORM ($table, $params = array(
	 'WHERE' => '',
	 'ORDER BY' => '',
	 'LIMIT' => ''
	 )) 
	{
		if (isset($params)) {
			$parameters = '';
	 		foreach ($params as $key => $value) {
	 			if(!empty($value)){
					$parameters .= " $key  $value ";
	 			}
			}
	 	}
		$this->query("SELECT * FROM $table $parameters");
		$tab = $this->fetch_all();
		return $tab;
	}
}
?>