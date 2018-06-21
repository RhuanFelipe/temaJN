<?php 
require_once 'Crud.php';

class Chamado extends Crud{
	protected $table = 'chamado';
	protected $id_coluna = 'id_chamado';
	protected $orderBy = 'data_abertura';
	protected $ordem = 'DESC';
	private $tipoCurso;
	private $curso;
	private $unidade;
	private $tipoRequerimento;
	private $grupoRequerimento;
	private $requerimento;
	private $assunto;
	private $usuario;
	private $pessoa;

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}
	public function getUsuario(){
		return $this->usuario;
	}
	public function setPessoa($pessoa){
		$this->pessoa = $pessoa;
	}
	public function getPessoa(){
		return $this->pessoa;
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
	public function qtdChamadosFinalizado(){
		$sql  = "SELECT * FROM $this->table where status = 1";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosCancelados(){
		$sql  = "SELECT * FROM $this->table where status = 0";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosCurso($id){
		$sql  = "SELECT * FROM $this->table where curso_id = '".$id."'";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosReclamacao(){
		$sql  = "SELECT * FROM $this->table where tipo_requerimento_id = 1";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosSolicitacao(){
		$sql  = "SELECT * FROM $this->table where tipo_requerimento_id = 2";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	
	public function insert(){
		try {
			$sql  = "INSERT INTO $this->table (tipo_curso_id,curso_id,unidade_id,tipo_requerimento_id,grupo_requerimento_id,requerimento_id,assunto_chamado,usuario_id,pessoa_id) 
						VALUES (:tipoCurso, :curso,:unidade,:tipoRequerimento,:grupoRequerimento,:requerimento,:assunto,:usuario,:pessoa)";
			$stmt = DB::prepare($sql);

			$stmt->bindParam(':tipoCurso', $this->tipoCurso, PDO::PARAM_INT);
			$stmt->bindParam(':curso', $this->curso, PDO::PARAM_INT);
			$stmt->bindParam(':unidade', $this->unidade, PDO::PARAM_INT);
			$stmt->bindParam(':tipoRequerimento', $this->tipoRequerimento, PDO::PARAM_INT);
			$stmt->bindParam(':grupoRequerimento', $this->grupoRequerimento, PDO::PARAM_INT);
			$stmt->bindParam(':requerimento', $this->requerimento, PDO::PARAM_INT);
			$stmt->bindParam(':assunto', $this->assunto, PDO::PARAM_STR);
			$stmt->bindParam(':usuario', $this->usuario, PDO::PARAM_INT);
			$stmt->bindParam(':pessoa', $this->pessoa, PDO::PARAM_INT);

			if($stmt->execute()){
				header('Location: index.php?p=abrirChamado&sucess=1');
			}
		
		} catch (PDOException $e) {
		    print $e->getMessage ();
		}
		
	}
	public function concluirChamado($id){
		try {
			$sql  = "UPDATE chamado
						SET status = '1'
					WHERE id_chamado = :id_chamado;";
			
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id_chamado', $id, PDO::PARAM_INT);
			

			if($stmt->execute()){
				//header('Location: ?p=home');
			}
		
		} catch (PDOException $e) {
		    print $e->getMessage ();
		}
	}
		public function fecharChamado($id){
		try {
			$sql  = "UPDATE chamado
						SET status = '0'
					WHERE id_chamado = :id_chamado;";

			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id_chamado', $id, PDO::PARAM_INT);
			

			if($stmt->execute()){
				//header('Location: ?p=home');
			}
		
		} catch (PDOException $e) {
		    print $e->getMessage ();
		}

	}
	public function findAllChamados($id_curso){
		$sql  = "SELECT * FROM $this->table where curso_id = :id_curso order By $this->orderBy $this->ordem";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_curso', $id_curso, PDO::PARAM_INT);

		$stmt->execute();
		return $stmt->fetchAll();
	}
}