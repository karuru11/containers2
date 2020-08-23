<!DOCTYPE html>
<html lang="es-AR">
  <head>
    <title>CRP Containers Rio de la Plata</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles-menu.css" type="text/css" media="all">
      <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <script src="/assets/js/navbar.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <body>
  
      <!-- header -->
    <div class="header-grey">
        <div class="header-grey-grid">
            <div class="logo-crp"><img src="img/logocrp.png"></div>
            <div class="header-datos">
            <div><img src=""><p>operaciones@containersriodelaplata.com</p></div>
            <div><img src=""><p>11-4802-5424</p></div>
            <div><img src=""><p>9:00 AM - 18:00 PM</p></div>
            </div>
            
        </div>
    </div>
      
    <div>
      <div class="header-white-wrap pricing-wrap">
          <?php include("includes/header-pricing.php"); ?>
      </div>
    </div>
      <!-- fin de header -->
      
      <!--Inicio Hero Section-->
      <section class="hero-section">
        <div class="hero-grid">
            <div class="hero-content">

            	<div class="hero-img">
            		<img src="img/hero-image.png">
            	</div>


                <div class="hero-text">
                    <h2>CRP Containers Rio de la plata</h2>
                     <h1>Ser licenciatario<br>
				nunca fue tan<br>
				facil!</h1>
                
                <p>Ofrece servicios relacionados con la venta de
Containers Maritimos, logisitica , gestion aduanera,
consolidado de carga segura, gestion de presupuestos
y transporte.</p>
                </div>
                
                
               
            </div>
            
            <div></div>
        </div>
      </section>
      <!--Fin Hero Section-->

      <!--Inicio requisitos section -->
        <section class="section-requisitos">
          <div class="requisitos-grid">
            <div class="requisitos-txt">
                <h1>REQUISITOS</h1>
                <h2>PARA SER <b>LICENCIATARIO</b></h2>
                <p>- Ser mayor de 21 años</p>
                <p>- Enviar foto del DNI (Frente y dorso)</p>
                <p>- Tener CUIT</p>
                <p>- Comprobante de servicio público o de domicilio</p>
                <p>- Pagar el canon y enviar el comprobante por email</p>
                <p>- No tener antecedentes penales</p>
                <p>- Firmar el contrato</p>

            </div>
          
          <div class="requisitos-img">
              <img src="img/requisitos.png" alt="">
          </div>

          </div>
          
          
        </section> 

      <!--Fin requisitos section -->

  <!--FOOTER-->
    <section class="footer-section">
        <div class="footer-logo">
          <img src="img/logocrp.png" alt="logo crp">
        </div>

        <div class="footer-redes">
          <img src="" alt="">
          <img src="" alt="">
        </div>

        <div class="footer-frase">
          <p>CONTAINERS RIO DE LA PLATA - SERGIO SABAN</p>
        </div>


    </section>
  <!--FIN FOOTER-->
      
      
      
  <script>
    var dataID = 1;
    var toolSelected = 1;

   
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 500) {
            $(".nav-bar").addClass("sticky-nav-bar");
        } else {
            $(".nav-bar").removeClass("sticky-nav-bar");
        }
    });    
  

    function enableResponsive() {
      if ($("#TopNav").hasClass("responsive")) {
        $("#TopNav").removeClass("responsive");
      }
        else {
          $("#TopNav").addClass("responsive");
        }
    };

    
  </script>
  </body>
</html>