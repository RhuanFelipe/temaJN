<?php

require_once 'Crud.php';

class ChamadoResposta extends Crud{
	protected $table = 'chamado_resposta';
	protected $id_coluna = 'id_chamado';
	
	public function qtdChamadosCancelados(){
		$sql  = "SELECT * FROM $this->table where status = 0";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosConfirmados(){
		$sql  = "SELECT * FROM $this->table where status = 1";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosCanceladosPeriodo($dataInicio, $dataFim){
		$sql  = "SELECT * FROM $this->table where status = 0 AND date(data_fechamento) BETWEEN  '".$dataInicio."' AND  '".$dataFim."'";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosConfirmadosPeriodo($dataInicio, $dataFim){
		$sql  = "SELECT * FROM $this->table where status = 1 AND date(data_fechamento) BETWEEN  '".$dataInicio."' AND  '".$dataFim."'";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosTipoCursoAll($dataInicio, $dataFim,$cursoId){
		$sql  = "SELECT * FROM $this->table INNER JOIN chamado on chamado.id_chamado = chamado_resposta.id_chamado where tipo_curso_id = '".$cursoId."' AND date(data_fechamento) BETWEEN  '".$dataInicio."' AND  '".$dataFim."'";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosCursoAll($dataInicio, $dataFim,$cursoId,$tipoCurso){
		
		if($tipoCurso >= 1){
			$sqlTipo = " AND tipo_curso_id = ".$tipoCurso." and curso_id =".$cursoId;
			
		}else{
			$sqlTipo = " AND curso_id = ".$cursoId;
		}
		$sql  = "SELECT * FROM $this->table INNER JOIN chamado on chamado.id_chamado = chamado_resposta.id_chamado where date(data_fechamento) BETWEEN  '".$dataInicio."' AND  '".$dataFim."'".$sqlTipo ;
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosTipoAll($dataInicio, $dataFim,$tipoId){
		$sql  = "SELECT * FROM $this->table INNER JOIN chamado on chamado.id_chamado = chamado_resposta.id_chamado where tipo_requerimento_id = '".$tipoId."' AND date(data_fechamento) BETWEEN  '".$dataInicio."' AND  '".$dataFim."'";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosTipoACurso($dataInicio, $dataFim,$tipoId,$cursoId){
		$sql  = "SELECT * FROM $this->table INNER JOIN chamado on chamado.id_chamado = chamado_resposta.id_chamado where tipo_requerimento_id = '".$tipoId."' AND date(data_fechamento) BETWEEN  '".$dataInicio."' AND  '".$dataFim."' And curso_id=".$cursoId;
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosGrupoAll($dataInicio, $dataFim,$grupoId,$tipoRequerimento){
		if($tipoRequerimento >= 1){
			$sqlTipoRequerimento = " AND tipo_requerimento_id = ".$tipoRequerimento." AND grupo_requerimento_id = ".$grupoId;
			
		}else{
			$sqlTipoRequerimento = " AND grupo_requerimento_id = ".$grupoId;
		}

		$sql  = "SELECT * FROM $this->table INNER JOIN chamado on chamado.id_chamado = chamado_resposta.id_chamado where date(data_fechamento) BETWEEN  '".$dataInicio."' AND  '".$dataFim."'".$sqlTipoRequerimento;
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosRequerimentoAll($dataInicio, $dataFim,$requerimentoId,$tipoRequerimento,$grupoRequerimento){

		if($tipoRequerimento >= 1 || $grupoRequerimento >= 1){
			$sqlRequerimento = " AND requerimento_id = ".$requerimentoId." AND tipo_requerimento_id = ".$tipoRequerimento. " AND grupo_requerimento_id = ". $grupoRequerimento;
			
		}else{
			$sqlRequerimento = " AND requerimento_id = ".$requerimentoId;
		}
		$sql  = "SELECT * FROM $this->table INNER JOIN chamado on chamado.id_chamado = chamado_resposta.id_chamado where  date(data_fechamento) BETWEEN  '".$dataInicio."' AND  '".$dataFim."' ". $sqlRequerimento;
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}

	public function qtdChamadosConfPeriodoCurso($dataInicio, $dataFim,$cursoId){
		$sql  = "SELECT * FROM $this->table INNER JOIN chamado on chamado.id_chamado = chamado_resposta.id_chamado where chamado.status = 1 AND chamado.curso_id = '".$cursoId."' AND date(data_fechamento) BETWEEN  '".$dataInicio."' AND  '".$dataFim."'";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
	public function qtdChamadosCancPeriodoCurso($dataInicio, $dataFim,$cursoId){
		$sql  = "SELECT * FROM $this->table INNER JOIN chamado on chamado.id_chamado = chamado_resposta.id_chamado where chamado.status = 0 AND chamado.curso_id = '".$cursoId."' AND date(data_fechamento) BETWEEN  '".$dataInicio."' AND  '".$dataFim."'";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->rowCount();
		return $result;
	}
}
