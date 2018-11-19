
<?php
// Formata data dd/mm/aaaa para aaaa-mm-dd
function datasql($databr) {
	if (!empty($databr)){
	$p_dt = explode('/',$databr);
	$data_sql = $p_dt[2].'-'.$p_dt[1].'-'.$p_dt[0];
	return $data_sql;
	}
}