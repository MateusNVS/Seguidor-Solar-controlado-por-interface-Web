<html>
<head>
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" type="text/css" href="estilos.css">
<title>Controle do Segudor Solar</title>
</head>
<body>
<div align="center">
<br><br><br><br>
    <table cellspacing="30">
     <tr><td>
 

<form method="POST" action="arduino.php">

    <input type="hidden" value="liga" name="estado" >
    <input type="submit" value="LIGA" name="liga" class="botao">

</form>

 </td><td>
   

 
<form method="POST" action="arduino.php">

    <input type="hidden" value="desliga" name="estado" >
    <input type="submit" value="DESLIGA" name="desliga" class="botao">

</form>
        
 </td></tr>
 <tr><td>

 
<form method="POST" action="arduino.php">
 
    <input type="hidden" value="reinicia" name="estado" >
    <input type="submit" value="REINICIAR" name="reinicia" class="botao">

</form>

</td>
<td>
	<form method="POST" action="arduino.php">
 
    <input type="hidden" value="reinicia" name="estado" >
    <input type="submit" value="SOBEDESCE" name="sobeDesce" class="botao">
</form>

</td>
</tr>

 </table>

</div>
</body>
</html>