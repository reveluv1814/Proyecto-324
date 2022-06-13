<?php
session_start();
include "conexion.php";
include "header.php";
//selecciona el flujo y el proceso
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
if($proceso=="P6")
	include "procesos/ProcesoCondicionante.php";
else{	
$sql="select * from flujoproceso ";
$sql.="where Flujo='$flujo' and proceso='$proceso'";
$resultado=pg_query($con, $sql);
$fila=pg_fetch_array($resultado);

//llama a la pantalla de ese flujo
$pantalla=$fila['pantalla'];
$pantalla.=".php";
//llama al controlador de esa pantalla
$pantallalogica=$fila['pantalla'];
$pantallalogica.=".main.php";
//se hace un solapamiento en las variables 
$procesoanterior=$proceso;
$proceso=$fila['procesosiguiente'];

//llama a la sesion
include "procesos/".$pantallalogica;
?>
<html>
	<style>
		h1{
			text-align: center;
			font-family: 'Poppins', sans-serif;
			font-weight: 400;
    		font-size: 88px;
			top: 20%;
			color: #393E46;
		}
		.container{
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 30px;
			margin-bottom: 90px;
			height: auto;
		}
		.containerPri{
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 10px;
			background-color: #FFD369;
			border-radius: 20px;
			width: 760px;;
			height: 500%;
			box-shadow: 0 6px 20px -5px rgba(0,0,0,0.4);
		}
		.button{
			width: 170px;
			height: 70px;
			border: none;
			outline: none;
			background: #BE3144;
			color: #fff;
			font-size: 22px;
			border-radius: 40px;
			text-align: center;
			box-shadow: 0 6px 20px -5px rgba(0,0,0,0.4);
			position: relative;
			overflow: hidden;
			cursor: pointer;
			margin: 20px;
			margin-top: 1px;
		}
		.button:hover{
			background: #3A4750;
		}
		.containerAnt{
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 30px;
			padding-top: 1px;
		}
	</style>
<body>
	<h1>Flujo de Procesos</h1>
	<div class="container">
		<div class="containerPri">
			<form action="<?php if($procesoanterior=='P10'){echo 'procesos/FinProceso.php';}else{echo 'motor.php';}?>" method="GET">
				<!--iframe src="pantalla.php"></iframe-->
				<input type="hidden" name="flujo" value="<?php echo $flujo;?>"/>
				<input type="hidden" name="proceso" value="<?php echo $proceso;?>"/>
				<input type="hidden" name="procesoanterior" value="<?php echo $procesoanterior;?>"/>

				<?php
				//var_dump($fila);
				//la pantalla
				include "procesos/".$pantalla;
				?>
				<div class="containerAnt">
					<input class="button" type="submit" name="Anterior" value="Anterior"/>
					<input class="button" type="submit" name="Siguiente" value="Siguiente"/>
				</div>
				
			</form>
		</div>
		
	</div>
	
</body>
</html>
<?php
}
include "footer.php";
	

?>