<?php
    session_start();
    
?>
<h2>Bienvenido:&nbsp;&nbsp;&nbsp;<b><?php echo "".$_SESSION["kardex"]; ?></b></h2>
<?php
    $sql="select a.idalumno,a.nomusuario, a.nombrec, a.cidentidad, a.cnacimiento, i.pagoinscripcon from alumno a, inscripcion i where a.nomusuario='".$_SESSION["alumno"]."' and a.idalumno = i.idalumno ";
    $resultado=pg_query($con,$sql);
    $fila=pg_fetch_array($resultado);

    $sql2="select idalumno from alumno where nomusuario='".$_SESSION["alumno"]."'";
    $resultado1=pg_query($con,$sql2);
    $fila1=pg_fetch_array($resultado1);

    $sql1="insert into flujoprocesoseguimiento (flujo, proceso,numerosolicitud, usuario, fechainicio, horainicio) values('F2','P7',".$fila1["idalumno"]." , '".$_SESSION["kardex"]."','".date('d-m-Y')."', '".date('H:i:s')."')";
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