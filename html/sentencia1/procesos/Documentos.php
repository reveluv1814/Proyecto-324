    <h3>Proceso 2 </h3>
    <h4>Preparar Documentos y Requisitos</h4>
<div class="formu">
<input type="hidden" name="id" value=""/><br>
<h5 class="titu">Prepara Tus Documentos</h5>
<p type="Nombre Frente:"><input type="text" name="nombrefrente" placeholder="Escribe el nombre de tu frente..."></p>

<p type="Nombre Candidato:"><input type="text" name="nomcandidato" placeholder="Escribe el nombre completo del candidato."></p>

<p type="Num. Carnet de Identidad:"><input type="text" name="cidentidad" placeholder="Escribe el CI del candidato."></p>

<p type="Num. Certificado de Nacimiento:"><input type="text" name="cnacimiento" placeholder="Escribe el Número del Certificado de Nacimiento."></p>

<p type="Num. Titulo Universitario:"><input type="text" name="ctitulo" placeholder="Escribe el Número del Titulo Universitario."></p>

<p type="Num Certificado Antigüedad:"><input type="text" name="cantiguedad" placeholder="Escribe el Número del Certificado de Antigüedad."></p>


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
    .formu{
        width:540px;
        height:auto;
        background:#393E46;
        border-radius:8px;
        box-shadow:0 0 40px -10px #000;
        margin:calc(26vh - 220px) auto;
        padding:0px 30px;
        padding-bottom: 50px;
        max-width:calc(100vw - 40px);
        box-sizing:border-box;
        font-family:'Poppins',sans-serif;
        position:relative
    }
    input{
        width:100%;
        padding:10px;
        box-sizing:border-box;
        background:none;
        outline:none;
        resize:none;
        border:0;
        font-family:'Poppins',sans-serif;
        transition:all .3s;
        border-bottom:2px solid #bebed2;
        color: #EEEEEE;
    }
    input:focus{
        border-bottom:2px solid #78788c;
    }
    input::placeholder{
        color: #929AAB;
    }
    p:before{
        content:attr(type);
        display:block;
        margin:28px 0 0;
        font-size:20px;
        color:#EEEEEE;
        font-weight: 100;
    }
    h5{
        margin:10px 0;
        padding-bottom:10px;
        width:280px;
        color:#929AAB;
        border-bottom:3px solid #78788c;
        font-size: 25px;
    }
</style>