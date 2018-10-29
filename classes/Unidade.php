<?php

require_once 'Crud.php';

class Unidade extends Crud{
	protected $table = 'unidade';
	protected $id_coluna = 'id_unidade';
	private $descUnidade;

	public function setDescUnidade($descUnidade){
		$this->descUnidade = $descUnidade;
	}
	public function getDescUnidade(){
		return $this->descUnidade;
	}

	public function insert(){
		try {
			$sql = "INSERT INTO $this->table (desc_unidade) values (:descUnidade);";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':descUnidade', $this->descUnidade, PDO::PARAM_STR);
			
			if($stmt->execute()){
				header('Location: ../index.php?p=cadUnidade');
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}
	public function update($id){
		try {
			$sql = "UPDATE  $this->table SET desc_unidade = :descUnidade WHERE id_unidade = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':descUnidade', $this->descUnidade, PDO::PARAM_STR);
			$stmt->bindParam(':id', $id, PDO::PARAM_STR);
			
			if($stmt->execute()){
				header('Location: ../index.php?p=cadUnidade');
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}
}