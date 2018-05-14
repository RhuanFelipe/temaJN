<?php

require_once 'Crud.php';

class TipoRequerimento extends Crud{
	protected $table = 'tipo_requerimento';
	protected $id_coluna = 'id_requerimento';
}