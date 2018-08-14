<?php

require_once 'Crud.php';

class TipoCurso extends Crud{
	protected $id_coluna = 'id_tipo_curso';
	protected $table = 'tipo_curso';
	private $tipoCurso;
	
	public function setTipoCurso($tipoCurso){
		$this->tipoCurso = $tipoCurso;
	}
	public function getTipoCurso(){
		return $this->tipoCurso;
	}

	public function insert(){
		try {
			$sql = "INSERT INTO $this->table (tipo_curso) values (:tipoCurso);";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':tipoCurso', $this->tipoCurso, PDO::PARAM_STR);
			
			if($stmt->execute()){
				header('Location: ../index.php?p=cadTipoCurso');
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}
	public function update($id){
		try {
			$sql = "UPDATE $this->table set tipo_curso = :tipoCurso where id_tipo_curso = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':tipoCurso', $this->tipoCurso, PDO::PARAM_STR);
			$stmt->bindParam(':id', $id, PDO::PARAM_STR);

			if($stmt->execute()){
				header('Location: ../index.php?p=formTipoCurso&edit=1&id='.$id.'&success=1');
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}

}