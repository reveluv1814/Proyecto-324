<?php
session_start();


/*introduce el fin de proceso en el flujo seguimiento */
date_default_timezone_set("America/La_Paz");
$sql1="update flujoprocesoseguimiento set fechafin='".date('d-m-Y')."', horafin = '".date('H:i:s')."' where proceso ='P8' and usuario='".$_SESSION["tribunal"]."'";
$r=pg_query($con,$sql1);
?>