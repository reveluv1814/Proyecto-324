<h3>Proceso 8 </h3>
<h4>Control de Documentos y Requisitos <b>ACEPTADOS</b></h4>
<h5>Controlor  de los Documentos y Requisitos del Frente del Usuario <b><?php echo "".$_SESSION["id"]; ?></b></h5><br>
<h4>Estos Documentos serán Subidos Al Sistema</h4>

<div class="containertb">
    <p class="titulon">Los Documentos que Entrego el Representante del Frente:</p>  
    <table class="table">
        <thead>
            <th><b>Nombre Usuario</b></th>
            <th><b>Nombre del Frente</b></th>
            <th><b>Nombre Candidato</b></th>
            <th><b>Carnet de Identidad</b></th>
            <th><b>Certificado de Nacimiento</b></th>
            <th><b>Título Universitario</b></th> 
            <th><b>Certificado de Antigüedad</b></th>      
        </thead>
            <tbody>
                    <tr>
                        <td><?php echo $fila[1]; ?></td>
                        <td><?php echo $fila[2]; ?></td>
                        <td><?php echo $fila[3]; ?></td>
                        <td><?php echo $fila[4]; ?></td>
                        <td><?php echo $fila[5]; ?></td>
                        <td><?php echo $fila[6]; ?></td>
                        <td><?php echo $fila[7]; ?></td>
                    </tr>  
            </tbody>
    </table>

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
        background-color:#F1EEE9;
        border-radius: 20px;
        margin-bottom: 20px;
    }
    .titulon{
        
        font-size:30px;
        font-family: 'Poppins', sans-serif;
        text-align: center;
        color: #222831;
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
  
</style>