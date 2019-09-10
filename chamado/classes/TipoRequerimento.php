<?php

require_once 'Crud.php';

class TipoRequerimento extends Crud{
	protected $table = 'tipo_requerimento';
	protected $id_coluna = 'id_requerimento';
	private $optRequerimento;

	public function setOptRequerimento($optRequerimento){
		$this->optRequerimento = $optRequerimento;
	}
	public function getOptRequerimento(){
		return $this->optRequerimento;
	}

	public function insert(){
		try {
			$sql = "INSERT INTO $this->table (opt_requerimento) values (:optRequerimento);";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':optRequerimento', $this->optRequerimento, PDO::PARAM_STR);
			
			if($stmt->execute()){
				header('Location: ../index.php?p=cadTipoRequerimento');
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}
	public function update($id){
		try {
			var_dump($id);
			$sql = "UPDATE $this->table set opt_requerimento = :optRequerimento WHERE id_requerimento = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':optRequerimento', $this->optRequerimento, PDO::PARAM_STR);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);

			if($stmt->execute()){
				header('Location: ../index.php?p=cadTipoRequerimento');
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}
}