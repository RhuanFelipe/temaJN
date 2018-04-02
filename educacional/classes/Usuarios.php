<?php

require_once 'Crud.php';

class Usuarios extends Crud{
	
	protected $table = 'usuario';
	private $nome;
	private $email;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setEmail($email){
		$this->email = $email;
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
			$_SESSION['matricula'] = $matricula_usuario;
		}else{
			echo 0;
		}
	}
	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, email) VALUES (:nome, :email)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
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

}