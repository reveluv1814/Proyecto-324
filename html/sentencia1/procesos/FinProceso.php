<?php
    if(isset($_GET["Anterior"]))
    {       
        header("Location: ../principal.php?flujo=F1&proceso=P9");
    }
    else{
        /*introduce el fin de proceso en el flujo seguimiento */
        session_start();
        $con = pg_connect("host=postgres port=5432 dbname=mibaseneil user=neil password=admin");

        date_default_timezone_set("America/La_Paz");
        $sql1="update flujoprocesoseguimiento set fechafin='".date('d-m-Y')."', horafin = '".date('H:i:s')."' where proceso ='P10' and usuario='".$_SESSION["id"]."'";
        pg_query($con,$sql1);
        
        unset($_SESSION['id']);
        unset($_SESSION['secretaria']);
        unset($_SESSION['tribunal']);
        session_destroy();
        
    }
    
    
?>
<h1>Fin</h1>

<h3>Final del Proceso</h3>
    <h4>Flujo Terminado</h4>
    <div class="but">
        <form action="../index.php" method="get">
            <button type="submit" class="log-btn" >Volver a Inicio</button>
        </form>
    </div>
<!-- estilo-->
<style>
    body{
        background-image: url(fondofin.gif);background-position: center; 
        background-size: cover; 
        position: relative;
    }
    h1{
			text-align: center;
			font-family: 'Poppins', sans-serif;
			font-weight: 400;
    		font-size: 98px;
			top: 20%;
			color: #EEEEEE;
            margin-top: 15%;
		}
    h3{
        font-size: 40px;
        font-weight: 400;
        text-align: center;
        font-family: 'Poppins', sans-serif;
        color: #EEEEEE;
    }
    h4{
        font-size: 30px;
        font-weight: 100;
        text-align: center;
        color: #EEEEEE;
        font-family: 'Poppins', sans-serif;
    }
    .but{
        display: flex;
        justify-content: center;
    }
    button{
        background-color: #BE3144;
        text-align: center;
        border: none;
        cursor: pointer;
        display: inline-block;
        font-size: 26px;
        padding: 15px 32px;
        color: #EEEEEE;
        border-radius: 30px;
    }
    button:hover{
        background-color: #FFD369;
        color: #222831;
    }
</style>


