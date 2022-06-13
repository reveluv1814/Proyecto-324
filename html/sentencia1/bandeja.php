<?php
session_start();
require_once "conexion.php";
include ('header.php');
//$usuario=$_SESSION['nombre_usuario'];

//$query="select * from flujoprocesoseguimiento where horafin is null";
$query="select * from flujoprocesoseguimiento where horafin is not null";
$consulta = pg_query($con,$query);


?>

<div class="containertb">
    <h2 class="titulon">Procesos Terminados:</h2>  
    <table class="table">
        <thead>
            <th><b>Flujo</b></th>
            <th><b>Proceso</b></th>
            <th><b>Número de Solicitud</b></th>
            <th><b>Usuario</b></th>
            <th><b>Fecha Inicio</b></th>
            <th><b>Hora Inicio</b></th>    
            <th><b>Fecha Fin</b></th>
            <th><b>Hora Fin</b></th>      
        </thead>
            <tbody>
            <?php
                while($value = pg_fetch_array($consulta)){
                    ?>
                    <tr>
                        <td><?php echo $value[1]; ?></td>
                        <td><?php echo $value[2]; ?></td>
                        <td><?php echo $value[3]; ?></td>
                        <td><?php echo $value[4]; ?></td>
                        <td><?php echo $value[5]; ?></td>
                        <td><?php echo $value[6]; ?></td>
                        <td><?php echo $value[7]; ?></td>
                        <td><?php echo $value[8]; ?></td>
                    </tr>    
                    <?php
                }
            ?>
            </tbody>
    </table>
    <?php
        $q="select * from flujoprocesoseguimiento where horafin is null";
        $r = pg_query($con,$q);
    ?>
    <h2 class="titulon">Procesos NO Terminados:</h2>  
    <table class="table">
        <thead>
            <th><b>Flujo</b></th>
            <th><b>Proceso</b></th>
            <th><b>Número de Solicitud</b></th>
            <th><b>Usuario</b></th>
            <th><b>Fecha Inicio</b></th>
            <th><b>Hora Inicio</b></th>    
            <th colspan = "1"></th>      
        </thead>
            <tbody>
            <?php
                while($fila = pg_fetch_array($r)){
                    ?>
                    <tr>
                        <td><?php echo $fila[1]; ?></td>
                        <td><?php echo $fila[2]; ?></td>
                        <td><?php echo $fila[3]; ?></td>
                        <td><?php echo $fila[4]; ?></td>
                        <td><?php echo $fila[5]; ?></td>
                        <td><?php echo $fila[6]; ?></td>
                        <td><a href='principal.php?flujo=<?php echo $fila["flujo"];?>&proceso=<?php echo $fila["proceso"];?>'>Editar</a></td>
                    </tr>    
                    <?php
                }
            ?>
            </tbody>
    </table>
</div>
<style>
    .containertb{
        padding-top:30px;
        padding-bottom:30px;
        margin:0;
        background-color:#DFDFDE;
    }
    .titulon{
        
        font-size:60px;
        font-family: 'Poppins', sans-serif;
        text-align: center;
    }
    .table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 60%;
        text-align:center;
        margin-left:auto;
        margin-right:auto;
    }
    .table td, .table th {
        border: 1px solid #ddd;
        padding: 8px;
        font-size:18px;
    }
    .table tr:nth-child(even){background-color: #f2f2f2;}

    .table tr:hover {background-color: #ddd;}

    .table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align:center;
        background-color: #1D5C63;
        color: white;
    }
</style>
<?php
include "footer.php";
?>