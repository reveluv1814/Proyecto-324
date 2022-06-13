<?php

    session_start();
    $con = pg_connect("host=postgres port=5432 dbname=mibaseneil user=neil password=admin");

    $sql="select u.Nomusuario from Usuario u, Rol r, RolUsuario rl where u.id = rl.idusuario and r.idrol = rl.idrol and r.namerol = 'TribElectoral'";
    $resultado=pg_query($con,$sql);
    $fila=pg_fetch_array($resultado);

    $_SESSION["tribunal"]=$fila['nomusuario'];


    $sql2="select idfrente from Frente where nusuario='".$_SESSION["id"]."'";
    $resultado1=pg_query($con,$sql2);
    $fila1=pg_fetch_array($resultado1);

    $sql1="insert into flujoprocesoseguimiento (flujo, proceso,numerosolicitud, usuario, fechainicio, horainicio) values('F1','ProcesoCondicionante',".$fila1["idfrente"]." , '".$_SESSION["tribunal"]."','".date('d-m-Y')."', '".date('H:i:s')."')";
    $r=pg_query($con,$sql1);
?>
<h2>Bienvenido:&nbsp;&nbsp;&nbsp;<b><?php echo "".$_SESSION["tribunal"]; ?></b></h2>
<h1>Flujo de Proceso Condicionante</h1>

<h3>Proceso 6 y 7 </h3>
    <h4>Proceso Condicionante</h4>
<h5>Controlor y Revisión de los Documentos y Requisitos del Frente del Usuario <b><?php echo "".$_SESSION["id"]; ?></b></h5><br>

<div class="containertb">
    <p class="titulon">Los Documentos que se Recepcionó:</p>  
    <table class="table">
        <thead>
            <th><b>Numero de Entrega</b></th>
            <th><b>ID Frente</b></th>
            <th><b>Nombre del Frente</b></th>
            <th><b>Hora en la que fue Entregada la Solicitud</b></th>
            <th><b>Fecha en la que fue Entregada la Solicitud</b></th>     
        </thead>
            <tbody>
                    <tr>
                        <?php
                             $sql="select g.identrega, g.idfrente, f.nomfrente, g.horaentrega, g.fecha from entrega g, frente f where f.nusuario='".$_SESSION["id"]."' and f.idfrente = g.idfrente";
                             $resultado=pg_query($con,$sql);
                             $fila=pg_fetch_array($resultado);
                        ?>
                        <td><?php echo $fila[0]; ?></td>
                        <td><?php echo $fila[1]; ?></td>
                        <td><?php echo $fila[2]; ?></td>
                        <td><?php echo $fila[3]; ?></td>
                        <td><?php echo $fila[4]; ?></td>
                    </tr>  
            </tbody>
    </table>

    <form action="procesos/MotorCondicionante.php" method="post" >
        <br><br>
        <h5>El Frente cumplió con el plazo de la Convocatoria, el Frente cumplió con los Requisitos y la Documentación necesaria?</h5>
        <h5>Por tanto,&nbsp; <b>La Solicitud de Inscripción del Frente fue ACEPTADA?</b></h5>
        <div class="condicion">
            
            <input type="checkbox" name="procesosi" value="value1">
            <label for="procesosi">SI Cumplió</label><br>
            <input class="nop" type="checkbox" name="procesono" value="value2">
            <label for="procesono">NO Cumplió</label><br>
            <input class="enviar" type="submit" value="Submit"> 
        </div>
 </form>
</div>
  





<!-- estilo-->
<style>
    h1{
			text-align: center;
			font-family: 'Poppins', sans-serif;
			font-weight: 400;
    		font-size: 88px;
			top: 20%;
			color: #393E46;
		}
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
    h3{
        font-size: 50px;
        font-weight: 400;
        text-align: center;
        color: #3A4750;
    }
    h4{
        font-size: 35px;
        font-weight: bold;
        text-align: center;
        color: #3A4750;
    }
    h5{
        font-size: 35px;
        font-weight: 100;
        text-align: center;
        color: #3A4750;
    }
    .containertb{
        padding-top:30px;
        padding-bottom:30px;
        margin:0;
        background-color:#F1EEE9;
        border-radius: 20px;
        margin-bottom: 20px;
        height: auto;
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
    .table th {
        border: 1px solid #ddd;
        padding: 8px;
        font-size:18px;
    }
    .table td{
        border: 1px solid #ddd;
        padding: 8px;
        font-size:18px;
        color: #F1EEE9;
    }
    .table tr{
        background-color: #222831;
    }
    .table tr:nth-child(even){background-color: #f2f2f2;}

    .table tr:hover{background:#334257; }

    .table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align:center;
        background-color: #EC994B;
        color: #F1EEE9;
    }
    .condicion{
        width:450px;
        padding:20px 20px;
        background:#4E89AE;
        border-radius:30px;
        margin:auto;
        left: 0;
        right: 0;
        text-align: center;
        box-shadow: 0 6px 20px -5px rgba(0,0,0,0.4);
    }
    label{
        font-size: 30px;
        color: #fff;
        font-weight: 200;
    }
    .enviar{
        border: none;
        text-decoration: none;
        padding: 20px 20px;
        margin: 20px 20px;
        cursor: pointer;
        font-size: 20px;
        border-radius: 20px;
        background-color: #be3144;
        color: #ddd;
        box-shadow: 0 6px 20px -5px rgba(0,0,0,0.4);
    }
    .enviar:hover{
        background-color: #FFD369;
        color: #222831;
    }
    input{
        margin-right: 10px;
    }
    input:checked {
        box-shadow: 0 0 0 3px #5FD068;
    }
    .nop:checked{
        box-shadow: 0 0 0 3px #EB5353;
    }
    input:checked + label {
        font-weight: 600;
    }
</style>