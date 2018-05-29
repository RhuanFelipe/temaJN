<?php

require_once 'Crud.php';

class Pessoa extends Crud{
	protected $table = 'pessoa';
	protected $id_coluna = 'id_pessoa';

	public function findAluno($id){
		$sql  = "SELECT * FROM $this->table WHERE curso_id = :id";
		echo $sql;
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		
		return $stmt->fetchAll();		
	}
}