<h3>Proceso 3 </h3>
<h4>Presentar Inscripción</h4>
<input type="hidden" name="id" value=""/>
<div class="formu">
<h5 class="titu">Documentos Subidos</h5>
<h6>Revisa los Documentos que preparaste para Entregarlo a la Secretaria.</h6>
<p type="Nombre Frente:"><input type="text" name="nombrefrente" value="<?php echo $nombrefrente; ?>"></p>

<p type="Nombre Candidato:"><input type="text" name="nomcandidato" value="<?php echo $nomcandidato; ?>"></p>

<p type="Num. Carnet de Identidad:"><input type="text" name="cidentidad" value="<?php echo $cidentidad; ?>"></p>

<p type="Num. Certificado de Nacimiento:"><input type="text" name="cnacimiento" value="<?php echo $cnacimiento; ?>"></p>

<p type="Num. Titulo Universitario:"><input type="text" name="ctitulo" value="<?php echo $ctitulo; ?>"></p>

<p type="Num Certificado Antigüedad:"><input type="text" name="cantiguedad" value="<?php echo $cantiguo; ?>"></p>


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
    h6{
        font-size: 18px;
        color: #393E46;
    }
    .formu{
        width:540px;
        height:auto;
        background:#EEEEEE;
        border-radius:8px;
        box-shadow:0 0 40px -10px #000;
        margin:calc(26vh - 220px) auto;
        padding:20px 30px;
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
        color: #393E46;
    }
    input:focus{
        border-bottom:2px solid #78788c;
    }
    input::-ms-value{
        color: #393E46;
        font-size:15px;
    }
    p:before{
        content:attr(type);
        display:block;
        margin:28px 0 0;
        font-size:20px;
        color:#393E46;
        font-weight: 100;
    }
    h5{
        margin:10px 0;
        padding-bottom:10px;
        width:280px;
        color:#393E46;
        border-bottom:3px solid #78788c;
        font-size: 25px;
    }
</style>