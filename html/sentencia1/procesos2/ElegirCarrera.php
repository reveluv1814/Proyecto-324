<h3>Proceso 8 </h3>
<h4>Elegir Carrera</h4>
<input type="hidden" name="id" value=""/>

<div class="formu">
<h5 class="titu">Seleciona una Carrera</h5>

<p type="CARRERA:">
                <select name = "carrera">
                    <option value="seleccionar">Seleccionar</option>
                    <option value="INFORMÁTICA">Informática</option>
                    <option value="MATEMÁTICXA">Matemática</option>
                    <option value="FÍSICA">Física</option>
                    <option value="ESTADISTICA">Estadistica</option>
                </select></p>




</div>




<!-- estilo-->
<style>
    h3{
        font-size: 30px;
        font-weight: 400;
        text-align: center;
        color: #3A4750;
    }
    h6{
        font-size: 18px;
        color: #EEEEEE;
    }
    h4{
        font-size: 35px;
        font-weight: bold;
        text-align: center;
        color: #3A4750;
    }
    .titu{
        margin:10px 0;
        padding-bottom:10px;
        text-align: center;
        width:380px;
        color:#EEEEEE;
        border-bottom:3px solid #fff;
        font-size: 25px;
    }
    .formu{
        width:540px;
        height:auto;
        background:#255965;
        border-radius:8px;
        box-shadow:0 0 40px -10px #000;
        margin:calc(26vh - 220px) auto;
        padding:20px 30px;
        padding-bottom: 50px;
        max-width:calc(100vw - 40px);
        box-sizing:border-box;
        font-family:'Poppins',sans-serif;
        position:relative;
        text-align: center;
    }
    input{
        width:50%;
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
    .dif{
        width:29%;
        color: #EEEEEE;
    }
    input:focus{
        border-bottom:2px solid #fff;
    }
    .read{
        background-color: #4C6F7B;
        color: #EEEEEE;
        font-size: 18px;
        border-bottom:2px solid #000;
        text-align: center;
        border-radius: 10px 10px 0 0;
    }
    p:before{
        content:attr(type);
        display:block;
        margin:28px 0 0;
        font-size:20px;
        color:#EEEEEE;
        font-weight: 100;
    }
    
</style>