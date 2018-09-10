<?php

require_once 'Crud.php';

class Usuarios extends Crud{
	
	protected $table = 'usuario';
	protected $id_coluna = 'id_usuario';
	private $nome;
	private $email;
	private $nivel;
	private $matricula;
	private $idUsuario;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}
	public function setNivel($nivel){
		$this->nivel = $nivel;
	}

	public function getNivel(){
		return $this->nivel;
	}

	public function setEmail($email){
		$this->email = $email;
	}
	public function getMatricula(){
		return $this->matricula;
	}

	public function setMatricula($matricula){
		$this->matricula = $matricula;
	}
	public function getIdUsuario(){
		return $this->idUsuario;
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}

	public function findDados($matricula){
		$sql  = "SELECT * FROM $this->table WHERE matricula_usuario = :matricula";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':matricula', $matricula, PDO::PARAM_INT);
		$stmt->execute();
		$dados = $stmt->fetch();		 

		$id = $dados->id_usuario;
		$sql  = "SELECT * FROM pessoa WHERE id_pessoa = :id";
		$query = DB::prepare($sql);
		$query->bindParam(':id', $id, PDO::PARAM_INT);
		$query->execute();
		$result = $query->fetch();

		$this->setNivel($dados->nivel_id);
		if($_SESSION['nivel_id'] != 4)
			$this->setNome($result->nome_pessoa);
	}
	public function findDadosId($id){
		$sql  = "SELECT * FROM $this->table WHERE id_usuario = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		$dados = $stmt->fetch();		 
		return $dados;
	
	}

	public function logarSistema($matricula_usuario,$senha_usuario){
		session_start();
		$sql  = "SELECT * FROM $this->table WHERE matricula_usuario = :matricula AND senha_usuario = :senha";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':matricula', $matricula_usuario, PDO::PARAM_INT);
		$stmt->bindParam(':senha', $senha_usuario, PDO::PARAM_STR);
		$stmt->execute();
		

		if ($stmt->fetchColumn() > 0) {
			echo 1;
			$sql  = "SELECT * FROM $this->table WHERE matricula_usuario = :matricula AND senha_usuario = :senha";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':matricula', $matricula_usuario, PDO::PARAM_INT);
			$stmt->bindParam(':senha', $senha_usuario, PDO::PARAM_STR);
			$stmt->execute();
			$id_usuario  = $stmt->fetch();	

			$_SESSION['usuario_id'] = $id_usuario->id_usuario;
			$_SESSION['nivel_id'] = $id_usuario->nivel_id;
			$_SESSION['matricula'] = $matricula_usuario;
			//$_SESSION['matricula'] = $matricula_usuario;
		}else{
			echo 0;
		}
	}
	public function insert(){
		$this->setNivel(3);
		
		$sql  = "INSERT INTO $this->table (id_usuario,matricula_usuario,nivel_id) VALUES (:id_usuario, :matricula, :nivel_id)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_usuario', $this->idUsuario, PDO::PARAM_INT);
		$stmt->bindParam(':matricula', $this->matricula, PDO::PARAM_INT);
		$stmt->bindParam(':nivel_id', $this->nivel, PDO::PARAM_INT);
		
		return $stmt->execute(); 

	}
	public function deslogar($sessao){
		session_start();
		unset($_SESSION["matricula"]);
		header("Location:login.php");
	}
	public function update($id){
		$sql  = "UPDATE $this->table SET nome = :nome, email = :email WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

	public function findUsuarioMatricula($matricula){
		$sql  = "SELECT * FROM $this->table WHERE matricula_usuario like '%".$matricula."%'; AND ativo_usuario = 1 AND nivel_id = 3";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$dados = $stmt->fetchAll();		 
		return $dados;		
	}


}