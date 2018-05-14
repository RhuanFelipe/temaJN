<?php

require_once 'Crud.php';

class Pessoa extends Crud{
	protected $table = 'pessoa';
	protected $id_coluna = 'id_pessoa';
}