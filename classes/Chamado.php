<?php 
require_once 'Crud.php';

class Chamado extends Crud{
	protected $table = 'chamado';
	protected $id_coluna = 'id_chamado';
	private $tipoCurso;
	private $curso;
	private $unidade;
	private $tipoRequerimento;
	private $grupoRequerimento;
	private $requerimento;
	private $assunto;
	private $usuario;


	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}
	public function getUsuario(){
		return $this->usuario;
	}
	public function setAssunto($assunto){
		$this->assunto = $assunto;
	}
	public function getAssunto(){
		return $this->assunto;
	}
	public function setRequerimento($requerimento){
		$this->requerimento = $requerimento;
	}
	public function getRequerimento(){
		return $this->requerimento;
	}
	public function setTipoCurso($tipoCurso){
		$this->tipoCurso = $tipoCurso;
	}
	public function getTipoCurso(){
		return $this->tipoCurso;
	}
	public function setCurso($curso){
		$this->curso = $curso;
	}
	public function getCurso(){
		return $this->curso;
	}
	public function setUnidade($unidade){
		$this->unidade = $unidade;
	}
	public function getUnidade(){
		return $this->unidade;
	}
	public function setTipoRequerimento($tipoRequerimento){
		$this->tipoRequerimento = $tipoRequerimento;
	}
	public function getTipoRequerimento(){
		return $this->tipoRequerimento;
	}
	public function setGrupoRequerimento($grupoRequerimento){
		$this->grupoRequerimento = $grupoRequerimento;
	}
	public function getGrupoRequerimento(){
		return $this->grupoRequerimento;
	}
	public function qtdChamados(){
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	
	public function insert(){
		try {
			$sql  = "INSERT INTO $this->table (tipo_curso_id,curso_id,unidade_id,tipo_requerimento_id,grupo_requerimento_id,requerimento_id,assunto_chamado,usuario_id) 
						VALUES (:tipoCurso, :curso,:unidade,:tipoRequerimento,:grupoRequerimento,:requerimento,:assunto,:usuario)";
			$stmt = DB::prepare($sql);

			$stmt->bindParam(':tipoCurso', $this->tipoCurso, PDO::PARAM_INT);
			$stmt->bindParam(':curso', $this->curso, PDO::PARAM_INT);
			$stmt->bindParam(':unidade', $this->unidade, PDO::PARAM_INT);
			$stmt->bindParam(':tipoRequerimento', $this->tipoRequerimento, PDO::PARAM_INT);
			$stmt->bindParam(':grupoRequerimento', $this->grupoRequerimento, PDO::PARAM_INT);
			$stmt->bindParam(':requerimento', $this->requerimento, PDO::PARAM_INT);
			$stmt->bindParam(':assunto', $this->assunto, PDO::PARAM_STR);
			$stmt->bindParam(':usuario', $this->usuario, PDO::PARAM_INT);

			if($stmt->execute()){
				header('Location: index.php?p=abrirChamado&sucess=1');
			}
		
		} catch (PDOException $e) {
		    print $e->getMessage ();
		}

		
	}
}