<?php
session_start();

$nombrefrente= trim($_GET["nombrefrente"]);
$nomcandidato= trim($_GET["nomcandidato"]);
$cidentidad= trim($_GET["cidentidad"]);
$cnacimiento= trim($_GET["cnacimiento"]);
$ctitulo= trim($_GET["ctitulo"]);
$cantiguo= trim($_GET["cantiguedad"]);
$sql="update Frente set ";
$sql.="nomfrente='$nombrefrente', nomcandidato='$nomcandidato', ciidentidad = '$cidentidad', cnacimiento = '$cnacimiento',cantiguedad = '$cantiguo', ctitulo = '$ctitulo' ";
$sql.=" where nusuario ='".$_SESSION["id"]."'";
$resultado=pg_query($con,$sql);


/*introduce el fin de proceso en el flujo seguimiento */
date_default_timezone_set("America/La_Paz");
$sql1="update flujoprocesoseguimiento set fechafin='".date('d-m-Y')."', horafin = '".date('H:i:s')."' where proceso ='P3' and usuario='".$_SESSION["id"]."'";
$r=pg_query($con,$sql1);
?>