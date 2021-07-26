<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TodoDeporte.com</title>
	 <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" />


    <link href="assets/bootstrap.css" rel="stylesheet" />
	<link href="assets/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/flexslider.css" rel="stylesheet" />
    <link href="assets/style.css" rel="stylesheet" />    
 
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
				<h2>TodoDeporte.com</h2>
				
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/logoz.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="#home">INICIO</a></li>
                     <li><a href="#catalogo-sec">CATALOGO</a></li>
                    <li><a href="#acerca-sec">¿QUIENES SOMOS?</a></li>
                     <li><a href="#redes-sec">REDES SOCIALES</a></li>
					  <li><a href="Contactanos.html">CONTACTANOS</a></li>
                     
                </ul>
            </div>
           
        </div>
    </div>
     
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <li>
                              <h3>Los Mejores Productos Deportivos</h3>
                           <h1>¿Que estas esperando? Compra ahora!</h1>
                            <a  href="loginvista.html" class="btn btn-warning btn-lg">
                                Iniciar Sesion
                            </a>
                             <a  href="registrarvista.html" class="btn btn-success btn-lg" >
                                Registrate
                            </a>
							
							<a  href="#features-sec" class="btn btn-primary btn-lg" >
                                Admin
                            </a>
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>
                            <h3>Los Mejores Productos Deportivos</h3>
                           <h1>Tenemos todo lo que necesitas</h1>
                             <a  href="loginvista.html" class="btn btn-warning btn-lg" >
                               Iniciar Sesion
                            </a>
                             <a  href="registrarvista.html" class="btn btn-success btn-lg" >
                                Registrate
                            </a>
							
							<a  href="#features-sec" class="btn btn-primary btn-lg" >
                                Admin
                            </a>
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                            <h3>Los Mejores Productos Deportivos</h3>
                           <h1>Tenemos todas las marcas</h1>
                             <a  href="loginvista.html" class="btn btn-warning btn-lg" >
                                Iniciar Sesion
                            </a>
                             <a  href="registrarvista.html" class="btn btn-success btn-lg" >
                                Registrate
                            </a>
							<a  href="#features-sec" class="btn btn-primary btn-lg" >
                                Admin
                            </a>
                        </li>
                        <!-- End Slider 03 -->
                    </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> BIENVENIDO A TodoDeporte.com<i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
         <div id="testimonials-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">PRODUCTOS DESTACADOS </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                     Hecha un vistazo a nuestros productos tendencia.
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row" >
           
               
                 <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img src="https://i.pinimg.com/originals/c3/15/46/c315462d248f2c4db0aa0eb74090cf57.png" style="width:200px;height:150px;" />
                   <h3 >Tenis 1</h3>
                 <hr />
                       <hr />
                   <p >
				   Descripcion del producto.
                   </p>
				   </center>
				   <br />
				   <br />
               <a class="btn btn-info btn-set"  >Precio: $380</a>
                </div>
                   </div>
                   
				   
				   <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoRcz742k4FkCZ72BH0AgoDcF10b03vZp_UyaGsBoXxHNG6bZPYa8UGeVwNwZq9T__cXg&usqp=CAU" style="width:200px;height:150px;" />
                   <h3 >Tenis 2</h3>
                 <hr />
                       <hr />
                   <p >
				   Descripcion del producto.
                   </p>
				   </center>
				   <br />
				   <br />
               <a class="btn btn-info btn-set"  >Precio: $450</a>
                </div>
                   </div>
				   
				   
				    <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img  src="https://www.kindpng.com/picc/m/351-3511227_transparent-optimus-prime-png-precio-de-tenis-puma.png" style="width:200px;height:150px;" />
                   <h3 >Tenis 3</h3>
                 <hr />
                       <hr />
                   <p >
				   Descripcion del producto.
                   </p>
				   </center>
				   <br />
				   <br />
               <a class="btn btn-info btn-set"  >Precio: $560</a>
                </div>
                   </div>
                 
				 <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                  <center>  <img src="https://web.asdeporte.com/wp-content/uploads/2018/11/HOVR-CGR-Connected-.png" style="width:210px; height:150px;" />
                   <h3 >Tenis 4</h3>
                 <hr />
                       <hr />
                     <p>Descripcion del producto</p>

				   </center>
				   <br />
				   <br />
               <a class="btn btn-info btn-set"  >Precio: $800</a>
                </div>
                   </div>
                 
                 
               </div>
             </div>
   <!-- FEATURES SECTION END-->
    <div id="faculty-sec" >
    <div class="container set-pad">
            
             <!--/.HEADER LINE END-->

           <div class="row" >
           
               
		   <div id="brand-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">MARCAS</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                     Aqui podras encontrar productos de tus marcas favoritas.
                         </p><br />
						 
					 
                 </div>

             </div>
            
			 <img id="centrado" class="img img-rounded img-responsive" src="img/marcas.png" style="width:900px;height:1100px;"/>
<br>
<br>
               </div>
             </div>
        </div>
		
		
             <!--/.HEADER LINE END-->


             </div>
			 <br />
    

<br />
           
             <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Establecimiento </strong></h2>
        <hr />
                    <div ">
                        <h4>Mexico</h4>
                        <h4>Cancun, Quintana Roo</h4>
						<h4>77535</h4>
                        
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Soporte </strong></h2>
        <hr />
                    <div >
                        <h4><strong>Numero:</strong>  +63 555 444 333 </h4>
                        <h4><strong>Email: </strong>soportetododep@gmail.com</h4>
                    </div>
                    </div>


                </div>
                 </div>
                 
                 
               </div>
             </div>
    
     <!-- CONTACT SECTION END-->
    <div id="footer">
          &copy 2021 TodoDeporte | Todos los derechos reservados |  <a style="color: #fff" target="_blank">Design by : Equipo 3</a>
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
        


</body>
</html>
