<?php 

function getAll($tbl){
	include('connect.php');
	$queryAll = 'SELECT * FROM '.$tbl;

	$runAll = $pdo->query($queryAll);

	if($runAll){
		return $runAll;
	}else{
		$error = 'There was a problem';
		return $error;
	}
}

function filterResults($tbl,$tbl_2,$tbl_3,$col,$col_2,$col_3,$filter){
	include('connect.php');
	$queryAll = 'SELECT * FROM '.$tbl.' a,';
	$queryAll .= ' '.$tbl_2.' b,';
	$queryAll .= ' '.$tbl_3.' c';
	$queryAll .= ' WHERE a.'.$col.' = c.'.$col;
	$queryAll .= ' AND b.'.$col_2.' = c.'.$col_2;
	$queryAll .= ' AND b.'.$col_3.' = "'.$filter.'"';

	// echo $queryAll;exit;

	$runAll = $pdo->query($queryAll);

	if($runAll){
		return $runAll;
	}else{
		$error = 'There was a problem';
		return $error;
	}
}

function getSingle($tbl,$col,$value){
	include ('connect.php');

	$query = 'SELECT * FROM '.$tbl.' WHERE '.$col.'='.$value;

	$runQuery = $pdo->query($query);
	if($runQuery){
		return $runQuery;
	}else{
		$error = 'There was a problem';
		return $error;
	}
}
