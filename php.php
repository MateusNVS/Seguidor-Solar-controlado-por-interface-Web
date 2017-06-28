<?php

$port = fopen("COM5", "w");



if($_POST['liga'] == "LIGA"){
fwrite($port, 'a');
fclose($port);

}

else if($_POST['desliga'] == "DESLIGA"){
fwrite($port, "b");
fclose($port);	
}

else if($_POST['reinicia'] == "REINICIAR"){
fwrite($port, "c");
fclose($port);	
}

else if($_POST['sobeDesce'] == "SOBEDESCE"){
fwrite($port, "d");
fclose($port);	
}


header("location: painel.php");

?>
