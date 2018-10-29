<?php

require_once 'Crud.php';

class Requerimento extends Crud{
	protected $table = 'requerimento';
	protected $id_coluna = 'id_requerimento';
	protected $id_coluna_fk = 'grupo_requerimento_id';
	private $descRequerimento;
	private $grupoRequerimentoId;

	public function setDescRequerimento($descRequerimento){
		$this->descRequerimento = $descRequerimento;
	}
	public function getDescRequerimento(){
		return $this->descRequerimento;
	}

	public function setGrupoRequerimentoId($grupoRequerimentoId){
		$this->grupoRequerimentoId = $grupoRequerimentoId;
	}
	public function getGrupoRequerimentoId(){
		return $this->grupoRequerimentoId;
	}

	public function insert(){
		try {
			$sql = "INSERT INTO $this->table (desc_requerimento,grupo_requerimento_id) values (:descRequerimento,:grupoRequerimentoId);";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':descRequerimento', $this->descRequerimento, PDO::PARAM_STR);
			$stmt->bindParam(':grupoRequerimentoId', $this->grupoRequerimentoId, PDO::PARAM_INT);

			
			if($stmt->execute()){
				header('Location: ../index.php?p=cadRequerimento');
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}
	public function update($id){
		try {
			$sql = "UPDATE $this->table SET desc_requerimento = :descRequerimento, grupo_requerimento_id = :grupoRequerimentoId WHERE id_requerimento = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':descRequerimento', $this->descRequerimento, PDO::PARAM_STR);
			$stmt->bindParam(':grupoRequerimentoId', $this->grupoRequerimentoId, PDO::PARAM_INT);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			if($stmt->execute()){
				header('Location: ../index.php?p=cadRequerimento');
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}
}