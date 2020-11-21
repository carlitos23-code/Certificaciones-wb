<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Certificación empresaurios</title>
    <script src="https://kit.fontawesome.com/9d667bb4f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" type="image/png" href="imagenes/icono.jpg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Sansita+Swashed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
 <?php
	session_start();
	?>
   
   <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-7 col-lg-8">
                    <table>
                        <tr>
                            <th rowspan="2">
                                <img src="imagenes/icono.jpg" class="animate__animated animate__rubberBand" alt="Balcon del romeral" width="200" height="200">
                            </th>
                            <th colspan="2">
                                <p id="titulo">&nbsp;&nbsp;&nbsp;Certificaciones Mexdevelopers</p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <p id="subtitulos">&nbsp;&nbsp;&nbsp;Abriendo <br> oportunidades</p>
                            </td>
                            <td>
                                <p><i class="fas fa-phone-alt"></i> <a href="#telefono">952 28 90 74</a></p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <a class="button button2 buttonColorBlue" class="animate__animated animate__rubberBand" href="https://www.facebook.com/salvador.diosdado.33/" target="_blank">
                        <i class="fab fa-facebook-square"></i></a>

                    <a class="button button2 buttonColorBlue" class="animate__animated animate__rubberBand" href="https://twitter.com/MiCanal5" target="_blank">
                        <i class="fab fa-twitter-square"></i></a>

                    <a class="button button2 buttonColorRed" class="animate__animated animate__rubberBand" href="https://www.pinterest.com.mx/" target="_blank">
                        <i class="fab fa-pinterest-square"></i></a>

                    <a class="button button2 buttonColorRed" class="animate__animated animate__flip" href="https://www.youtube.com/" target="_blank">
                        <i class="fab fa-youtube-square"></i></a>
                </div>
                <div>
                <?php
				date_default_timezone_set("America/Mexico_City");
				$hora=date("H");
				if(isset($_SESSION["logueado"])){
					echo " <h2  style='color: beige;font-size: 20px;'> Hola ".$_SESSION['nombre'];
					
					if($hora>=20 && $hora<=24){
						echo " buenas noches!";
					}else if($hora>=7 && $hora<12){
						echo " buenos dias!";
					}else if($hora>=12 && $hora<20){
						echo " buenas tardes!";
					}else{
						" Mejor duermete un rato :v";
					}
	
					
					echo "</h2>";
					
					
				}
                
				?>
           </div>
            </div>
        </div>

    </header>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" >
        
  <div class="container">
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto2.php">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acercade.php">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="certificaciones.php">Certificaciones</a>
                </li>
                
    
                
                
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lenguajes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="certificaciones.php #javascript">JavaScript</a>
                        <a class="dropdown-item" href="certificaciones.php #java">Java</a>
                        <a class="dropdown-item" href="certificaciones.php #python">Python</a>
                    </div>
                </li>
               
                 
            </ul>
           
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto" <?php if(isset($_SESSION["logueado"])){echo "style='width:200px;'";} ?> >
               
                <li>
                   <?php 
					if(isset($_SESSION["logueado"])){
						echo "<a href='logout.php' class='btn btn-secondary btn-lg active' role='button' aria-pressed='true'>"."Logout</a>";
						
					}else{
						echo "<a href='login.php' class='btn btn-secondary btn-lg active' role='button' aria-pressed='true'>"."Login</a>";
					}
					
					?>
           
                </li>
                  
                <li>
                	<?php 
					if(isset($_SESSION["logueado"])){	
						echo "<p style='font-size:20px;color:white;'>". $_SESSION['cuenta']."</p>";	
					}
					
					?>
                </li>
            </ul>
        </div>
    </div>
    </nav>

  <nav class="acerca">
  	<h1>¿Quines somos?</h1>
 
  		<pe style="font-size: 20px;"> 
  		Somos una empresa que as más de 15 años trabajando en el mundo del desarrollo software había una pregunta que siempre se nos quedaba en el aire y nunca éramos capaces de aterrizar, ¿Realmente que es lo en lo que un desarrollador se basa para decir que sabe un lenguaje?. La respuesta inmedianta fue, una certidicacion y aunque ya existen certificaciones en todo el mundo creiamos que realmente muchas eran carentes
  		de sentido y es por ello que vimos la ventana abierta para poder realizar nuestras certificaciones ntos de conversaciones planteando planificaciones, estimando proyectos, evolutivos, nuevas plataformas, etc acababan en el mismo punto sin retorno, – si elijo a las personas que conozco para hacer el trabajo tardo X, si no, X * 2. La planificación está íntimamente ligada a la productividad de las personas que compondrán el equipo de trabajo, pero como se puede explicitar!!!

Finalmente decidimos ponernos a ello y montamos esta iniciativa con un objetivo claro, explicitar la productividad de las personas en el desarrollo de software. Detectamos que necesitamos ayuda y se la pedimos al grupo de investigación IWT2 de la Universidad de Sevilla y a expertos en el análisis de las competencias asociadas a la productividad. Luego el CDTI apoya el proyecto y nos permite financiarlo.

Con el equipo formado y una carga de ilusión desbordante comenzamos el proyecto con una serie de tormentas de ideas en las que intentamos sacar a luz todos los factores que influyen en la productividad de un desarrollador software, analizando el estado del arte de todas las iniciativas relacionadas que pudimos identificar.
  		</pe>
  
  </nav>
  
  <div class="video">
  	<h1>Verifica las mejores certificaciones</h1>
  	<iframe width="560" height="315" src="https://www.youtube.com/embed/273zVcXdMQg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>


    <footer>
        <ul id="menusec"> Contactenos
            <li><a href="#">Encontrar a mi representante de capacitación</a>
            </li>
            <li><a href="#">Soporte de capacitación de Oracle</a>
            </li>
            <li><a href="#">Soporte de certificación de Oracle</a>
            </li>
            <li><a href="#">Solicitar capacitación</a>
            </li>
            <li><a href="#">Ubicaciones de capacitación</a>
            </li>
        </ul>
        <ul id="menusec"> Capacitación
            <li><a href="#">Rutas de capacitación</a>
            </li>
            <li><a href="#">Programa de curso</a>
            </li>
            <li><a href="#">Créditos de capacitación</a>
            </li>
            <li><a href="#">Eventos privados</a>
            </li>
        </ul>
        <ul id="menusec"> Acciones más destacadas
            <li><a href="#">COMPRAR UN VOUCHER</a>
            </li>
            <li><a href="#">INSCRÍBASE EN UN EXAMEN</a>
            </li>
            <li><a href="#">Capacitación cloud</a>
            </li>
            <li><a href="#">Capacitación en bases de datos</a>
            </li>
            <li><a href="#">Capacitación en Java</a>
            </li>
            <li><a href="#">Capacitación en aplicaciones</a>
            </li>
            <li><a href="#">Oracle Hardware/Software Products A-Z</a>
            </li>
        </ul>
        <ul id="menusec2">
            Localizanos
            <li>
                Residencia Estudiantes
            </li>
            <li>
                CL Francisco Barbín, 4
            </li>
            <li>
                29010 Málaga
            </li>
            <li id="telefono">
                Telf: 952 28 90 74
            </li>
        </ul>
        <li>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.4979554250415!2d-4.474075580470723!3d36.72163822260717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7290180f601819%3A0x1a09c03feae20089!2sResidencia%20Universitaria%20Balc%C3%B3n%20del%20Romeral!5e0!3m2!1ses-419!2smx!4v1601865932024!5m2!1ses-419!2smx" width="400em" height="300em" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </li>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>