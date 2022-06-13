<!--FOOTER-->
<section id="contacto">
            <div id="contacto-container">
                
                <div id="textcontact">
                    
                    <h3>Flujo de Procesos </h3>
                    <h4>Procesos para la Inscripción y Recepción de Frentes a la Dirección de la Carrera de Informática</h4>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer-container" style="background-image:url(imagenes/school.jpg);">
                <div class="footer-overlay">
                    <div class="footer-intro">
                        <img id="logofcpn"src="imagenes/logo2.png">    
                        <h3>Síguenos</h3>                     
                        <img src="imagenes/umsa.png" style="width: 3.5%;height: 3.5%">
                    </div>
                    <div class="redessol">
                        <a href="" class="fenlaces"><i class="fab fa-facebook"></i></a>
                        <a href="" class="fenlaces"><i class="fab fa-instagram"></i></a>
                        <a href="" class="fenlaces"><i class="fab fa-twitter"></i></a>
                        <a href="" class="fenlaces"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div>
                        <p class="footer-copy">Copyright &copy; 2022 Neil Graneros</p>
                    </div>
                </div>
               
               
            </div>
        </footer>
        <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
        <script>
            $(document).ready(function(){
              $(window).scroll(function(){
                if($(this).scrollTop() > 40){
                  $('#topBtn').fadeIn();
                } else{
                  $('#topBtn').fadeOut();
                }
              });
              $("#topBtn").click(function(){
                $('html ,body').animate({scrollTop : 0},800);
              });
            });
        </script>      
        
       
    </div>
<div class="fh5co-loader"></div>
</body>
<script src="js/main.js"></script>
</html>