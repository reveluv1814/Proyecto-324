<h3>Proceso 6 </h3>
    <h4>Recibir Notificación del Pago de la Inscripción</h4>
    
    <div class="containertb">
    <h5 class="noti">El Tribunal Recibio el pago de la inscripción. Por lo que se adjunta el <b>Estado</b> de su solicitud:</h5><br>
    
 

    <h4 class='notif'> El pago realizado por el estudiante 
    <?php
    session_start();
    $sql1="select nombrec,idalumno from Alumno where nomusuario= '".$_SESSION["alumno"]."'";
    $r=pg_query($con,$sql1);
    $tri=pg_fetch_array($r);
    echo $tri["nombrec"];  
    ?> fue 
    <b style='color:#36AE7C;'>ACEPTADA</b>, Se adjunta el codigo de pago : </h4>
       
        <div class="connoti">
            <textarea class="descri" name="" id="" cols="30" rows="10" placeholder="<?php echo  $ran = rand(10,9999);
                $sql1="insert into Inscripcion (idalumno, pagoinscripcon) values(". $tri["idalumno"].",'".$ran."')";
                $r=pg_query($con,$sql1);
            ?>" readonly ></textarea>
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
    label{
        font-size: 25px;
        margin-left: 25%;
        color:#3A4750;
        font-weight: 100;
        text-align: center;
    }
    input{
    width: 20%;
    padding: 10px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
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
    input:focus {
    border: 3px solid #555;
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