<?php
namespace Core;

use \Core\ORM;

class Entity
{
	public $fields;
	public $table;
	public $orm;

	public function __construct($parameters = []) 
	{
		foreach ($parameters as $key => $value) {
			$this->{$key} = $value;
		}
		$this->orm = new ORM();
		$this->fields = $parameters;

	}
	public function create()
	{
		$this->orm->createORM($this->table, $this->fields);
		
	}

	public function read()
	{
		return $this->orm->readORM($this->table, $this->id);
	}

	public function update()
	{
		$this->orm->updateORM($this->table, $this->id, $this->fields);
	}

	public function delete()
	{
		$this->orm->deleteORM($this->table, $this->id);
	}

	public function find()
	{
		$this->orm->findORM($this->table);
	}

	public function save()
	{
		if (!empty($find)) {
			return $this->orm->createORM($this->table, $this->fields);
		}
		else {
			return $this->orm->updateORM($this->table, $this->id, $this->fields);
		}
	}
}
