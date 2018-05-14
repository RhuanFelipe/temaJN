<?php

require_once 'Crud.php';

class GrupoRequerimento extends Crud{
	protected $table = 'grupo_requerimento';
	protected $id_coluna = 'id_grupo';
	protected $id_coluna_fk = 'tipo_requerimento_id';

	
}