<?php
session_start();

$nombrefrente= trim($_GET["nombrefrente"]);
$nomcandidato= trim($_GET["nomcandidato"]);
$cidentidad= trim($_GET["cidentidad"]);
$cnacimiento= trim($_GET["cnacimiento"]);
$ctitulo= trim($_GET["ctitulo"]);
$cantiguo= trim($_GET["cantiguedad"]);


$sql="insert into Frente (nusuario, nomFrente, nomCandidato, ciIdentidad, cNacimiento, Ctitulo, Cantiguedad) values('".$_SESSION["id"]."', '$nombrefrente', '$nomcandidato','$cidentidad','$cnacimiento','$ctitulo','$cantiguo')";
$resultado=pg_query($con,$sql);

$sql1="select idfrente from Frente where nusuario='".$_SESSION["id"]."'";
$resultado1=pg_query($con,$sql1);
$fila=pg_fetch_array($resultado1);

/*introduce el fin de proceso en el flujo seguimiento */
date_default_timezone_set("America/La_Paz");
$sql="update flujoprocesoseguimiento set numerosolicitud =".$fila["idfrente"]." , fechafin='".date('d-m-Y')."', horafin = '".date('H:i:s')."' where proceso ='P2' and usuario='".$_SESSION["id"]."'";
$resultado=pg_query($con,$sql);
?>