<?php

require_once 'Crud.php';

class Requerimento extends Crud{
	protected $table = 'requerimento';
	protected $id_coluna = 'grupo_requerimento_id';
}