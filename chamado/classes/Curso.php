<?php

require_once 'Crud.php';

class Curso extends Crud{
	protected $table = 'curso';
	protected $id_coluna = 'id_curso';
	protected $id_coluna_fk = 'tipo_curso_id';
	private $nomeCurso;
	private $tipoCursoId;

	public function setNomeCurso($nomeCurso){
		$this->nomeCurso = $nomeCurso;
	}
	public function getNomeCurso(){
		return $this->nomeCurso;
	}

	public function setTipoCursoId($tipoCursoId){
		$this->tipoCursoId = $tipoCursoId;
	}
	public function getTipoCursoId(){
		return $this->tipoCursoId;
	}

	public function insert(){
		try {
			$sql = "INSERT INTO $this->table (nome_curso,tipo_curso_id) values (:nome_curso,:tipoCursoId);";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':nome_curso', $this->nomeCurso, PDO::PARAM_STR);
			$stmt->bindParam(':tipoCursoId', $this->tipoCursoId, PDO::PARAM_STR);

			
			if($stmt->execute()){
				header('Location: ../index.php?p=cadCurso');
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}
	public function update($id){
		try {
			$sql = "UPDATE $this->table SET nome_curso = :nome_curso, tipo_curso_id = :tipoCursoId WHERE id_curso = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':nome_curso', $this->nomeCurso, PDO::PARAM_STR);
			$stmt->bindParam(':tipoCursoId', $this->tipoCursoId, PDO::PARAM_STR);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			if($stmt->execute()){
				header('Location: ../index.php?p=cadCurso');
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}

}