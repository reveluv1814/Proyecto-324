<h3>Proceso 9 </h3>
    <h4>Recibir Confirmación de La Inscripción</h4>

    <?php
     $s="select idalumno from alumno where nomusuario='".$_SESSION["alumno"]."'";
     $r=pg_query($con,$s);
     $repre=pg_fetch_array($r);

    $sql="select carrera from inscripcion where idalumno=".$repre["idalumno"];
    $resultado=pg_query($con,$sql);
    $fila=pg_fetch_array($resultado);
    
    ?>
    <div class="containertb">
    <h5 class="noti">Se realizó con <b>ÉXITO</b> la inscripción:</h5><br>
    
       <h4 class='notif'> La carrera en la que se Inscribió es <b style='color:#36AE7C;'><?php echo $fila["carrera"]; ?></b>, carrera que cursaras este semestre. Exitos en tu aprendizaje.</h4>
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