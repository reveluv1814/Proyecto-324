<?php
session_start();

$descrip= $_GET["noti"];
$estado= $_GET["estado"];

$sql1="select id from usuario where nomusuario='".$_SESSION["tribunal"]."'";
$r=pg_query($con,$sql1);
$tri=pg_fetch_array($r);

$sql2="select id from usuario where nomusuario='".$_SESSION["id"]."'";
$u=pg_query($con,$sql2);
$ur=pg_fetch_array($u);

$noti= intval(trim($_GET["noti"]));
$sql="insert into notifica (idtribunal, idusuario,descripcion) values(".$tri["id"].",".$ur["id"].",'$descrip')";
$resultado=pg_query($con,$sql);


$sql3="update notifica set estado ='$estado' where idtribunal=".$tri["id"];
$r3=pg_query($con,$sql3);

/*introduce el fin de proceso en el flujo seguimiento */
date_default_timezone_set("America/La_Paz");
$sql1="update flujoprocesoseguimiento set fechafin='".date('d-m-Y')."', horafin = '".date('H:i:s')."' where proceso ='P9' and usuario='".$_SESSION["tribunal"]."'";
$r=pg_query($con,$sql1);

?>