<?php

require_once 'Crud.php';

class Curso extends Crud{
	protected $table = 'curso';
	protected $id_coluna = 'id_curso';
	protected $id_coluna_fk = 'tipo_curso_id';

}