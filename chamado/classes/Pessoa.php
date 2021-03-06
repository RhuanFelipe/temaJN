<?php

require_once 'Crud.php';

class Pessoa extends Crud{
	protected $table = 'pessoa';
	protected $tableSecondJoin = 'usuario';
	protected $id_coluna = 'id_pessoa';
	private $idPessoa;
	private $nome;
	private $sexo;
	private $email;
	private $curso;
	private $turno;
	private $periodo;
	private $tipoPessoa;
	/*
		tipoPessoa = 1; coordenador
		tipoPessoa = 2; atendente
		tipoPessoa = 3; aluno
		tipoPessoa = 4; admin
	*/

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setSexo($sexo){
		$this->sexo = $sexo;
	}
	public function getSexo(){
		return $this->sexo;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setCurso($curso){
		$this->curso = $curso;
	}
	public function getCurso(){
		return $this->curso;
	}
	public function setTurno($turno){
		$this->turno = $turno;
	}
	public function getTurno(){
		return $this->turno;
	}
	public function setPeriodo($periodo){
		$this->periodo = $periodo;
	}
	public function getPeriodo(){
		return $this->periodo;
	}
	public function setIdPessoa($idPessoa){
		$this->idPessoa = $idPessoa;
	}
	public function getIdPessoa(){
		return $this->idPessoa;
	}
	public function setTipo($tipoPessoa){
		$this->tipoPessoa = $tipoPessoa;
	}
	public function getTipo(){
		return $this->tipoPessoa;
	}

	public function findAluno($id){
		$sql  = "SELECT * FROM $this->table WHERE curso_id = :id";
		echo $sql;
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		
		return $stmt->fetchAll();		
	}
	public function update($id){
		if($this->tipoPessoa == 2){
			$sql = "UPDATE $this->table set nome_pessoa = :nome, sexo_pessoa = :sexo, email_pessoa = :email where id_pessoa = :id";	
			$stmt = DB::prepare($sql);

			$stmt->bindParam(':nome', $this->nome, PDO::PARAM_STR);
			$stmt->bindParam(':sexo', $this->sexo, PDO::PARAM_STR);
			$stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			
			if($stmt->execute()){
				$sql = "SELECT id_pessoa FROM $this->table order by id_pessoa desc limit 1;";
				$stmt = DB::prepare($sql);
				$stmt->execute();
		        $arrayPessoa = $stmt->fetch();
				$this->setIdPessoa($arrayPessoa->id_pessoa);
				//header('Location: ../index.php?p=abrirChamado');
			}
		}else if($this->tipoPessoa == 1){
			$sql = "UPDATE $this->table set nome_pessoa = :nome, sexo_pessoa = :sexo, email_pessoa = :email, curso_id = :curso_id where id_pessoa = :id";	
			$stmt = DB::prepare($sql);

			$stmt->bindParam(':nome', $this->nome, PDO::PARAM_STR);
			$stmt->bindParam(':sexo', $this->sexo, PDO::PARAM_STR);
			$stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
			$stmt->bindParam(':curso_id', $this->curso, PDO::PARAM_STR);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			
			if($stmt->execute()){
				$sql = "SELECT id_pessoa FROM $this->table order by id_pessoa desc limit 1;";
				$stmt = DB::prepare($sql);
				$stmt->execute();
		        $arrayPessoa = $stmt->fetch();
				$this->setIdPessoa($arrayPessoa->id_pessoa);
				//header('Location: ../index.php?p=abrirChamado');
			}
		}
	}
	public function insert(){
		try {
			if($this->tipoPessoa == 1){
				$sql = "INSERT INTO $this->table (nome_pessoa,sexo_pessoa,email_pessoa,curso_id) values (:nome,:sexo,:email,:curso);";	
				$stmt = DB::prepare($sql);

				$stmt->bindParam(':nome', $this->nome, PDO::PARAM_STR);
				$stmt->bindParam(':sexo', $this->sexo, PDO::PARAM_STR);
				$stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
				$stmt->bindParam(':curso', $this->curso, PDO::PARAM_STR);

				if($stmt->execute()){
					$sql = "SELECT id_pessoa FROM $this->table order by id_pessoa desc limit 1;";
					$stmt = DB::prepare($sql);
					$stmt->execute();
			        $arrayPessoa = $stmt->fetch();
					$this->setIdPessoa($arrayPessoa->id_pessoa);

					//header('Location: ../index.php?p=abrirChamado');
				}
			}else if($this->tipoPessoa == 3){
				$sql = "INSERT INTO $this->table (nome_pessoa,sexo_pessoa,email_pessoa,curso_id,turno_id,periodo) values (:nome,:sexo,:email,:curso,:turno,:periodo);";	
				$stmt = DB::prepare($sql);

				$stmt->bindParam(':nome', $this->nome, PDO::PARAM_STR);
				$stmt->bindParam(':sexo', $this->sexo, PDO::PARAM_STR);
				$stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
				$stmt->bindParam(':curso', $this->curso, PDO::PARAM_STR);
				$stmt->bindParam(':turno', $this->turno, PDO::PARAM_INT);
				$stmt->bindParam(':periodo', $this->periodo, PDO::PARAM_INT);
				
				if($stmt->execute()){
					$sql = "SELECT id_pessoa FROM $this->table order by id_pessoa desc limit 1;";
					$stmt = DB::prepare($sql);
					$stmt->execute();
			        $arrayPessoa = $stmt->fetch();
					$this->setIdPessoa($arrayPessoa->id_pessoa);

					//header('Location: ../index.php?p=abrirChamado');
				}
			}else if($this->tipoPessoa == 2){
				$sql = "INSERT INTO $this->table (nome_pessoa,sexo_pessoa,email_pessoa) values (:nome,:sexo,:email);";	
				$stmt = DB::prepare($sql);

				$stmt->bindParam(':nome', $this->nome, PDO::PARAM_STR);
				$stmt->bindParam(':sexo', $this->sexo, PDO::PARAM_STR);
				$stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
				
				
				if($stmt->execute()){
					$sql = "SELECT id_pessoa FROM $this->table order by id_pessoa desc limit 1;";
					$stmt = DB::prepare($sql);
					$stmt->execute();
			        $arrayPessoa = $stmt->fetch();
					$this->setIdPessoa($arrayPessoa->id_pessoa);
					//header('Location: ../index.php?p=abrirChamado');
				}
			}
			
			
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}

	public function findAllPessoa(){
		$sql  = "SELECT * FROM $this->table INNER JOIN $this->$tableSecondJoin on id_usuario = id_pessoa";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	public function findAtendente(){
		$sql  = "SELECT * FROM $this->table INNER JOIN $this->tableSecondJoin on id_usuario = id_pessoa where nivel_id = 2";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	public function findCoordenador(){
		$sql  = "SELECT * FROM $this->table INNER JOIN $this->tableSecondJoin on id_usuario = id_pessoa where nivel_id = 1";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	public function findCoordenadorCurso($id){
		$sql  = "SELECT * FROM $this->table INNER JOIN $this->tableSecondJoin on id_usuario = id_pessoa where nivel_id = 1 and curso_id = :id ";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);

		$stmt->execute();
		return $stmt->fetchAll();
	}
	public function findMatricula($matricula){
		$sql  = "SELECT * FROM $this->table INNER JOIN $this->tableSecondJoin on id_usuario = id_pessoa where matricula_usuario = :matricula ";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':matricula', $matricula);

		$stmt->execute();
		return $stmt->fetchAll();
	}

	
}