<?php
session_start();

$carrera=$_GET["carrera"];

$sql2="select idalumno from alumno where nomusuario='".$_SESSION["alumno"]."'";
    $resultado1=pg_query($con,$sql2);
    $fila1=pg_fetch_array($resultado1);

$sql1="update Inscripcion set carrera='".$carrera."' where idalumno = ".$fila1["idalumno"]."";
$r=pg_query($con,$sql1);

/*introduce el fin de proceso en el flujo seguimiento */
date_default_timezone_set("America/La_Paz");
    $sql1="update flujoprocesoseguimiento set fechafin='".date('d-m-Y')."', horafin = '".date('H:i:s')."' where flujo='F2' and proceso ='P8' and usuario='".$_SESSION["alumno"]."'";
    $r=pg_query($con,$sql1);

?>