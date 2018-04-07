<?php

require_once 'Crud.php';

class Requerimento extends Crud{
	protected $table = 'requerimento';
	protected $id_coluna = 'id_requerimento';
	protected $id_coluna_fk = 'grupo_requerimento_id';
}