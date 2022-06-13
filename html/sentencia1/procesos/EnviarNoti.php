<h3>Proceso 9 </h3>
    <h4>Enviar Notificación de la Inscripción</h4>
    <label for="">Descripción de la Notificación </label><br>
    <label for="">&nbsp;&nbsp;&nbsp;&nbsp;Escribe la Notificación</label>
    <div class="connoti">
        <textarea class="descri" name="noti" id="" cols="30" rows="10"></textarea><br>
    </div>    
    <input type="hidden" name="estado" value="<?php 
        $sql1="select estado from flujoprocesocondicionante where flujo= 'F1'";
        $r=pg_query($con,$sql1);
        $tri=pg_fetch_array($r);
        echo $tri["estado"];    
    ?>" ><br>

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