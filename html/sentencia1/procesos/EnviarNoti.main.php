<?php
    session_start();
    
?>
<h2>Bienvenido:&nbsp;&nbsp;&nbsp;<b><?php echo "".$_SESSION["tribunal"]; ?></b></h2>


<?php

    $sql1="select idfrente from Frente where nusuario='".$_SESSION["id"]."'";
    $resultado1=pg_query($con,$sql1);
    $fila=pg_fetch_array($resultado1);

    $sql1="insert into flujoprocesoseguimiento (flujo, proceso,numerosolicitud, usuario, fechainicio, horainicio) values('F1','P9',".$fila["idfrente"]." ,'".$_SESSION["tribunal"]."','".date('d-m-Y')."', '".date('H:i:s')."')";
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