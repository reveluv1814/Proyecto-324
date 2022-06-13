<h3>Proceso 10 </h3>
    <h4>Recibir Notificación de La Inscrpción</h4>

    <?php
     $s="select id from usuario where nomusuario='".$_SESSION["id"]."'";
     $r=pg_query($con,$s);
     $repre=pg_fetch_array($r);

     $u="select id from usuario where nomusuario='".$_SESSION["tribunal"]."'";
     $t=pg_query($con,$u);
     $tribu=pg_fetch_array($t);
     


    $sql="select estado,descripcion from notifica where idtribunal=".$tribu["id"]." and idusuario=".$repre["id"];
    $resultado=pg_query($con,$sql);
    $fila=pg_fetch_array($resultado);
    
    ?>
    <div class="containertb">
    <h5 class="noti">El Tribunal Reviso los Requisitos y Documentación entregada. Por lo que se adjunta el <b>Estado</b> de su solicitud:</h5><br>
    
        <?php
            if($fila['estado'] == 'si')
                echo "<h4 class='notif'> Su Solicitud fue <b style='color:#36AE7C;'>ACEPTADA</b>, adjuntamos una descripción sobre la recepción de sus documentos: </h4>";
            else echo "<h4 class='notif'> Su Solicitud fue <b style='color:#EB5353;'>RECHAZADA</b>, adjuntamos los motivos por los cuales su frente no fue inscrita: </h4>";
        ?>
        <div class="connoti">
            <textarea class="descri" name="" id="" cols="30" rows="10" placeholder="<?php echo $fila['descripcion'];?>" readonly ></textarea>
        </div>
    </div>
    
    


<!-- estilo-->
<style>
    h3{
        font-size: 30px;
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
        background-color:#393E46;
        border-radius: 20px;
        margin-bottom: 20px;
        color: #EEEEEE;
    }
    .noti{
        color: #EEEEEE;
        font-weight: 100;
    }
    .notif{
        color: #EEEEEE;
        font-weight: 400;
    }
    .connoti{
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .descri{
        resize: none;
        border-radius: 20px;
        padding: 20px;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
        color: #393E46;
        font-weight: 800;
        text-align: justify;
        box-shadow: 0px 6px 20px -5px rgba(143,140,140,0.75);
    }
</style>