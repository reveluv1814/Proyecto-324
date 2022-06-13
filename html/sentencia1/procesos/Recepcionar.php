<h3>Proceso 4 </h3>
<h4>Recepcionar Requisitos y Documentos</h4>
<input type="hidden" name="id" value=""/>


<div class="containertb">
    <p class="titulon">Los Documentos Que entrego:</p>  
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
    p{
        color: #222831;
    }
    h4{
        font-size: 35px;
        font-weight: bold;
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
</style>