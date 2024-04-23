<?php
namespace Model;

use Source\constant;

class User extends Model
{

	//protected string $table='users';
	public function allUsers():array
	{
		return $this->all();
	}

}