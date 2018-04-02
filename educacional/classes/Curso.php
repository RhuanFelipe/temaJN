<?php

require_once 'Crud.php';

class Curso extends Crud{
	protected $table = 'curso';
	protected $id_coluna = 'tipo_curso_id';
}