<?php

require_once 'DB.php';

abstract class Crud extends DB{

	protected $table;
	protected $id_coluna;

	public function insert(){}
	public function update($id){}

	public function findOne($id){
		$sql  = "SELECT * FROM $this->table WHERE $this->id_coluna = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		if($stmt->fetch()){
			return $stmt->fetch();
		}else{
			return 0;
		}
				echo "oi";

	}

	public function findById($id){
		$sql  = "SELECT * FROM $this->table WHERE $this->id_coluna = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		
		return $stmt->fetchAll();		
	}

	public function findAll(){
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($id){
		$sql  = "DELETE FROM $this->table WHERE $this->id_coluna = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
	
	public function findByIdFK($id){
		$sql  = "SELECT * FROM $this->table WHERE $this->id_coluna_fk = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		
		return $stmt->fetchAll();		
	}

}