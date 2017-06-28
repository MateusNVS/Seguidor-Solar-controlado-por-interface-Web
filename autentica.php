<?php

require 'conet.php';
$a = new Conecta();
$a -> conectar();


$usr = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = mysql_query("SELECT * FROM user WHERE usr = '$usr' and senha = '$senha'");
$linha = mysql_num_rows($sql);
$nome = mysql_fetch_array($sql);



if($linha > 0)
{
	session_start();

	
	$_SESSION['usr'] = $usr;
	$_SESSION['senha'] = $senha;

	header("location: painel.php");
}
else
{
	header("location: erro_login.html");
}


?>


