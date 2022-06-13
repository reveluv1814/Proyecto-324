<?php
include "conexion.php";
//obtiene por el get el flujo, el proceso y el proceso anterior
$flujo=$_GET["flujo"];
$proceso=$_GET["procesoanterior"];
$procesosiguiente=$_GET["proceso"];
//hace la conculta sql
$sql="select * from flujoproceso ";
$sql.="where Flujo='$flujo' and Proceso='$proceso'";
$resultado=pg_query($con, $sql);
$fila=pg_fetch_array($resultado);
//llama al controlador de la sesion interna de cada proceso

$pantalla=$fila['pantalla'];
$pantalla.=".motor.php";
include "procesos/".$pantalla;

// lleva al proceso anterior
if(isset($_GET["Anterior"]))
{ 
    if($proceso =='P8'){
        $proceso = 'P6';
    }
    //echo $proceso;
    $sql="select * from flujoproceso ";
    $sql.="where Flujo='$flujo' and procesosiguiente='$proceso'";
    $resultado1=pg_query($con, $sql);
    $fila1=pg_fetch_array($resultado1);
    $procesosiguiente=$fila1["proceso"];
   
    
}
header("Location: principal.php?flujo=$flujo&proceso=$procesosiguiente");

?>