<?php

require_once 'Crud.php';

class GrupoRequerimento extends Crud{
	protected $table = 'grupo_requerimento';
	protected $id_coluna = 'tipo_requerimento_id';
}