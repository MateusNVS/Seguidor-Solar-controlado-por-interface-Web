<?php


class Conecta
{
	
	function conectar()
	{

		$host = "localhost";
		$usuario = "root";
		$senhausr = "alunosebastiao";
		$banco = "seguidorsolar";
		$conexao = mysql_connect($host, $usuario, $senhausr) or die ('não foi possível conectar ao banco de dados...');
		mysql_select_db($banco);

	}


}

?>