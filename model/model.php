<?php
namespace Model;

use Source\constant;

class Model
{

	protected static \PDO $conectPDO;
	protected string $table;

	public function __construct()
	{
		try{

		 static::$conectPDO= new \PDO('mysql: host='.Constant::DB_HOSTNAME.' ; dbname='.Constant::DB_NAME, 
		 	Constant::DB_USERNAME,Constant::DB_PASSWORD ,[
		 	\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
		 	\PDO::ERRMODE_WARNING => \PDO::ERRMODE_EXCEPTION]
			);

		}catch(\PDOException $e){
			$e->getMessage();
		}

		$this->table=strtolower(explode('\\', get_class($this))[1]).'s';
	}

	protected function getConnect():\PDO
	{
		return  static::$conectPDO;
	}

	protected function all():array
	{
		$Etat=$this->getConnect()->query("SELECT * FROM {$this->table}");

		return $Etat->fetchAll();
	}
}