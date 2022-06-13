<?php
session_start();

$idfrente= intval(trim($_GET["idfrente"]));
$horaentrega= $_GET["horaentrega"];
$fecha= $_GET["fecha"];



$sql="insert into Entrega (idfrente, horaentrega, fecha) values( $idfrente, '$horaentrega','$fecha')";
$resultado=pg_query($con,$sql);

/*introduce el fin de proceso en el flujo seguimiento */
date_default_timezone_set("America/La_Paz");
    $sql1="update flujoprocesoseguimiento set fechafin='".date('d-m-Y')."', horafin = '".date('H:i:s')."' where proceso ='P5' and usuario='".$_SESSION["secretaria"]."'";
    $r=pg_query($con,$sql1);

?>