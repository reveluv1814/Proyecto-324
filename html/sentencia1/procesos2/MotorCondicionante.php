<?php
include "../conexion.php";
session_start();
/*introduce el fin de proceso en el flujo seguimiento */
date_default_timezone_set("America/La_Paz");
$sql1="update flujoprocesoseguimiento set fechafin='".date('d-m-Y')."', horafin = '".date('H:i:s')."' where flujo = 'F2' and proceso ='ProcesoCondicionante' and usuario='".$_SESSION["kardex"]."'";
$r=pg_query($con,$sql1);

if(isset($_POST['procesosi'])){
    //echo "si dice"."<br> ";
    $sql1="update flujoprocesocondicionante set estado ='si' where proceso='P3' and flujo = 'F2'";
    $r=pg_query($con,$sql1);


    $sql="select procesosi,flujo,procesosisig from flujoprocesocondicionante where proceso='P3' and flujo = 'F2'";
    $resultado=pg_query($con, $sql);
    $fila=pg_fetch_array($resultado);
    header("Location: ./../principal2.php?flujo=".$fila["flujo"]."&proceso=".$fila["procesosisig"]);
}
if(isset($_POST['procesono'])){
    //echo "no dice";
    $sql2="update flujoprocesocondicionante set estado ='no' where proceso='P3' and flujo = 'F2'";
    $r=pg_query($con,$sql2);


    $sql1="select procesono,flujo,procesonosig from flujoprocesocondicionante where proceso='P3' and flujo = 'F2'";
    $resultado1=pg_query($con, $sql1);
    $fila=pg_fetch_array($resultado1);
    header("Location: ./".$fila["procesonosig"].".php");
}
?>
