<?
	$host = '\SQLEXPRESS';
	$contrasena = '';
	$database = 'GunzDB';

	$r = mssql_connect($host, 'sa', $contrasena);
	mssql_select_db($database, $r) or die("No se encontro la DB");

	if (!$r) {
		echo 'No se pudo realizar la conexión a la Base de Datos :(';
	}
?>