<?php

require_once 'Crud.php';

class Telefone extends Crud{
	protected $table = 'telefone';
	private $telefone;
	private $tipoTelefone;
	private $pessoaId;

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTipoTelefone($tipoTelefone){
		$this->tipoTelefone = $tipoTelefone;
	}

	public function getTipoTelefone(){
		return $this->tipoTelefone;
	}
	public function setPessoaId($pessoaId){
		$this->pessoaId = $pessoaId;
	}

	public function getPessoaId(){
		return $this->pessoaId;
	}

	public function insert(){
		try {
			$sql = "INSERT INTO $this->table (numero_telefone,tipo_telefone,pessoa_id) values (:telefone,:tipoTelefone,:pessoaId);";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':telefone', $this->telefone, PDO::PARAM_STR);
			$stmt->bindParam(':tipoTelefone', $this->tipoTelefone, PDO::PARAM_STR);
			$stmt->bindParam(':pessoaId', $this->pessoaId, PDO::PARAM_INT);

			
			$stmt->execute();
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}

}