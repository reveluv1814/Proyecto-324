<?php
session_start();
$idalumno=$_GET["idalumno"];
$nombrec= trim($_GET["nombrec"]);
$cidentidad= trim($_GET["cidentidad"]);
$cnacimiento= trim($_GET["cnacimiento"]);
$sql="update Alumno set ";
$sql.="nombrec='$nombrec', cidentidad = '$cidentidad', cnacimiento = '$cnacimiento' ";
$sql.=" where nomusuario ='".$_SESSION["alumno"]."'";
$resultado=pg_query($con,$sql);







/*introduce el fin de proceso en el flujo seguimiento */
date_default_timezone_set("America/La_Paz");
$sql1="update flujoprocesoseguimiento set fechafin='".date('d-m-Y')."', horafin = '".date('H:i:s')."' where flujo= 'F2' and proceso ='P3' and usuario='".$_SESSION["alumno"]."'";
$r=pg_query($con,$sql1);

$u="insert into Recepcion (IdAlumno, horaentrega, fecha) values( $idalumno, '".date('H:i:s')."','".date('d-m-Y')."')";
pg_query($con,$u);
?>