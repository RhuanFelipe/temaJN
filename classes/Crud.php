<?php

require_once 'DB.php';

abstract class Crud extends DB{
	protected $table;
	protected $tableSecondJoin;
	protected $id_coluna;
	protected $orderBy;
	protected $ordem;

	public function insert(){}
	public function update($id){}

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
	public function findAllOrder(){
		$sql  = "SELECT * FROM $this->table order By $this->orderBy $this->ordem";
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

	public function inative($id){
		$sql  = "UPDATE $this->table SET ativo = 0  WHERE $this->id_coluna = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
	public function ative($id){
		$sql  = "UPDATE $this->table SET ativo = 1  WHERE $this->id_coluna = :id";
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