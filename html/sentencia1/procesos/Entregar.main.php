<?php
    session_start();
  
?>
<h2>Bienvenido:&nbsp;&nbsp;&nbsp;<b><?php echo "".$_SESSION["secretaria"]; ?></b></h2>

<?php
  
    $sql="select idfrente,nomfrente from frente where nusuario ='".$_SESSION["id"]."'";
    $resultado=pg_query($con,$sql);
    $fila=pg_fetch_array($resultado);
    $idfrente= $fila["idfrente"];
    $nombrefrente = $fila["nomfrente"];

    
    $sql1="insert into flujoprocesoseguimiento (flujo, proceso,numerosolicitud, usuario, fechainicio, horainicio) values('F1','P5',$idfrente, '".$_SESSION["secretaria"]."','".date('d-m-Y')."', '".date('H:i:s')."')";
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

