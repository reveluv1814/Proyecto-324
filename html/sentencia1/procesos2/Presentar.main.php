<?php
session_start();
?>
<h2>Bienvenido:&nbsp;&nbsp;&nbsp;<b><?php echo "".$_SESSION["alumno"]; ?></b></h2>

<?php
    $sql="select * from Alumno where nomusuario='".$_SESSION["alumno"]."'";
    $resultado=pg_query($con,$sql);
    $fila=pg_fetch_array($resultado);

    $usuario= $fila["nomusuario"];
    $nombrec= $fila["nombrec"];
    $cidentidad= $fila["cidentidad"];
    $cnacimiento= $fila["cnacimiento"];
    $idalumno = $fila["idalumno"];


    $sql1="insert into flujoprocesoseguimiento (flujo, proceso,numerosolicitud, usuario, fechainicio, horainicio) values('F2','P3',".$idalumno." , '".$_SESSION["alumno"]."','".date('d-m-Y')."', '".date('H:i:s')."')";
    $r=pg_query($con,$sql1);
?>




<!-- estilo-->
<style>
    h2{
        padding: 30px;
        color: #fff;
        background-color: #4C6983;
        width: 20%;
        border-radius: 40px;
        margin-left: 1%;
        margin-top: 2%;
        font-weight: 100;
        font-size: 30px;
    }
    h2:hover{
        background-color: #222831;
    }
</style>