<?php
session_start();
$id = $_GET["id"];
$sql="select u.Nomusuario from Usuario u, Rol r, RolUsuario rl where r.namerol = 'Alumno' and u.id=".$id." and rl.Idusuario = ".$id." and rl.IdRol = r.IDrol";
$resultado=pg_query($con,$sql);
$fila=pg_fetch_array($resultado);
$_SESSION["alumno"]=$fila['nomusuario'];
//echo $_SESSION["nombre"];

/*introduce el fin de proceso en el flujo seguimiento */
date_default_timezone_set("America/La_Paz");

$sql3="insert into flujoprocesoseguimiento (flujo, proceso, usuario,fechainicio, horainicio,fechafin,horafin) values('F2','P1','".$_SESSION["alumno"]."' ,'".date('d-m-Y')."', '".date('H:i:s')."','".date('d-m-Y')."','".date('H:i:s')."')";
pg_query($con,$sql3);
?>