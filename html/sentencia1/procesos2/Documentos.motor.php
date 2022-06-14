<?php
session_start();

$nombrec= trim($_GET["nombrec"]);
$cidentidad= trim($_GET["cidentidad"]);
$cnacimiento= trim($_GET["cnacimiento"]);


$sql="insert into Alumno (nomusuario, nombrec, cidentidad, cnacimiento) values('".$_SESSION["alumno"]."', '$nombrec','$cidentidad','$cnacimiento')";
$resultado=pg_query($con,$sql);

$sql1="select idalumno from Alumno where nomusuario='".$_SESSION["alumno"]."'";
$resultado1=pg_query($con,$sql1);
$fila=pg_fetch_array($resultado1);

/*introduce el fin de proceso en el flujo seguimiento */
date_default_timezone_set("America/La_Paz");
$sql="update flujoprocesoseguimiento set numerosolicitud =".$fila["idalumno"]." , fechafin='".date('d-m-Y')."', horafin = '".date('H:i:s')."' where proceso ='P2' and flujo = 'F2' and usuario='".$_SESSION["alumno"]."'";
$resultado=pg_query($con,$sql);
?>