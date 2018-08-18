<?php

require_once 'Crud.php';

class GrupoRequerimento extends Crud{
	protected $table = 'grupo_requerimento';
	protected $id_coluna = 'id_grupo';
	protected $id_coluna_fk = 'tipo_requerimento_id';
	private $descGrupo;
	private $tipoRequerimentoId;

	public function setDescGrupo($descGrupo){
		$this->descGrupo = $descGrupo;
	}
	public function getDescGrupo(){
		return $this->descGrupo;
	}

	public function setTipoRequerimentoId($tipoRequerimentoId){
		$this->tipoRequerimentoId = $tipoRequerimentoId;
	}
	public function getTipoRequerimentoId(){
		return $this->tipoRequerimentoId;
	}

	public function insert(){
		try {
			$sql = "INSERT INTO $this->table (desc_grupo,tipo_requerimento_id) values (:descGrupo,:tipoRequerimentoId);";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':descGrupo', $this->descGrupo, PDO::PARAM_STR);
			$stmt->bindParam(':tipoRequerimentoId', $this->tipoRequerimentoId, PDO::PARAM_INT);

			
			if($stmt->execute()){
				header('Location: ../index.php?p=cadGrupoRequerimento');
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}
	public function update($id){
		try {
			$sql = "UPDATE $this->table SET desc_grupo = :descGrupo, tipo_requerimento_id = :tipoRequerimentoId WHERE id_grupo = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':descGrupo', $this->descGrupo, PDO::PARAM_STR);
			$stmt->bindParam(':tipoRequerimentoId', $this->tipoRequerimentoId, PDO::PARAM_INT);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			if($stmt->execute()){
				header('Location: ../index.php?p=formGrupoRequerimento&edit=1&id='.$id.'&success=1&tipoRequerimentoId='.$this->tipoRequerimentoId);
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}
}