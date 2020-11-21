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
    <h1 class="contacta">Lenguajes de Programación y su importancia!</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="card">
                    <img class="card-img-top javaimg" src="imagenes/java.webp" alt="Card image cap" width="120px" height="170px">
                    <div class="card-body">
                        <h4 class="card-title">Java</h4>
                        <p class="card-text">
                            Tener la certificación en Java te abrira las puertas a muchas empresas, desde nacionales hasta empresas en el extranjero, además de poder resolver prácticamente cualquier problema que se te presente. <br>
                            Para aprobar necesitaras obtner un promedio superiro a 8 <br>
                            Total de preguntas = 6 <br>
                            01/01/2020 al 01/01/2021 <br>
                            Costo $7999 
                        </p>
                        <?php
                        if(isset($_SESSION["logueado"])){
                            $nombreUsuario=$_SESSION['nombre'];
                           
							$file=fopen("certificacion.txt", "r");
                            $band=0; //para saber si la cuenta y contrasena estan en el archivo
                            while(!feof($file)){
                                $linea=fgets($file);
                                if ($linea != ""){
                                    $aux2=explode(':',$linea);
                                    $nombreUsuario2=$aux2[7];
                                    if ($nombreUsuario==$nombreUsuario2){
                                        $band=1;
                                        break;
                                    }
                                }
                            }
                            fclose($file);
                            if($band==1){
                                 echo '<a href="#" class="btn btn-primary" style="background-color: #353a40; color:red">Examen ya realizado</a>';
                            }else{
                                 echo '<a href="preguntas.php" class="btn btn-primary" style="background-color: #353a40;">Realizar certificación</a>';
                            }
                           
                        }
                        else{
                            echo '<a href="#" class="btn btn-primary" style="background-color: #353a40; color:red;">Logueate para poder comenzar</a>';
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="imagenes/javascript.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">JavaScript</h4>
                        <p class="card-text">
                            Al realizar tu certificación de JavaScript contaras con conociinetos los cuales podrás aplicar en el desarrolo web, el cual es por demas decir que se encuentra en la cuspide del mundo laboral, además con este curso recibirias una promoción para que después puedas estudiar el curso de Python con un descuento.
                            Promedio minimo de aprobación=8.5 <br>
                            Total de preguntas = 20 <br>
                            01/01/2020 al 01/12/2022 <br>
                            Costo $6000 
                        </p>
                        <a href="#javascript" class="btn btn-primary" style="background-color: #353a40;">Realizar certificación</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="imagenes/python.jpg" alt="Card image cap" height="130px;">
                    <div class="card-body">
                        <h4 class="card-title">Python</h4>
                        <p class="card-text">
                            El tener una certificacion de python es una de las bendiciones mas grandes que un desarrolador de software puede tener
                            ya ue en estos momentos python es uno de los lenguajes mas usados e todas las industrias debido a su simpleza y potencia. Este examen consta de 20 preguntas y pregunta lo esencial
                            que una persona debe saber para demasotros que conoce a python, estaspreguntas pasan en un lapzo de 60 minutos y si contestas 15 preguntas bien,
                            tendras tu certificado de python sin ningun problema osea que si obtines un 7.5 seras aprobado, esta certificacion tine un costo de tan solo 5,000 pesos mx
                            y sera disponible realizar esta certificacion desde el 15 de noviermbre del 2020 hatsa el 24 de diciembre 2020.
                        </p>
                        <a href="#python" class="btn btn-primary" style="background-color: #353a40;">Realizar certificación</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h1 class="contacta" style="align-content:flex-start; " id="java">Java</h1>
            <p style="color: white;">Es más simple, la sintaxis es mucho más legible que C, C++ y cualquier otro lenguaje.
                Es bueno para aprender programación orientada a objetos, una habilidad útil porque maneja bien la complejidad de una aplicación del mundo real.
                Tiene una API rica, puedes hacer mucho más con Java. Incluyendo gráficos, sonido, y juegos pequeños, sin tener que instalar diferentes módulos y bibliotecas.
                Puedes encontrar apoyo de la comunidad, sin importar qué tipo de preguntas, dudas, o problemas tengas. Cuando comienzas a aprender a programar, enfrentas muchos problemas para comprender tanto fundamentos de programación como Java. Puedes encontrar respuestas en Google, StackOverflow, foros de Java, entre otros.
                Es un lenguaje fuertemente tipado, que atrapa muchos errores de novato. Que a diferencia de Python, es un lenguaje de escritura estático.
                Java viene con un in-built Garbage collection, que es una gran ventaja para un principiante. Tratar con la gestión de la memoria es una gran cosa al comienzo del aprendizaje de programación.</p>
        </div>
        <div class="row">
            <h1 class="contacta" style="align-content:flex-start; " id="javascript">JavaScript</h1>
            <p style="color: white;">Una de las grandes ventajas que ofrece JavaScript es que la mayor parte de las aplicaciones web funcionan con este lenguaje, y se debe en gran medida a que los navegadores permiten la interacción entre aplicaciones.JavaScript permite la programación de microcontroladores; el desarrollo de plataformas para el internet de las cosas, y aplicaciones móviles, de hecho, como detalle de este último punto, este potente lenguaje de programación puede ser ejecutado de manera híbrida en cualquier sistema operativo móvil.Aprender JavaScript es muy sencillo, y quizá esta sea una de sus características principales.</p>
        </div>
        <div class="row">
            <h1 class="contacta" style="align-content:flex-start; " id="python">Python</h1>
            <p style="color: white;">Está desarrollado bajo una licencia de código abierto, por lo que es de libre uso y distribución, incluso para uso comercial.
                Es uno de los lenguajes de programación más versátiles que existen, puede ser usado en muchos campos diferentes. Es decir, permite programar desde videojuegos hasta aplicaciones móviles.
                Es fácil de aprender. Si comprendes Python, podrás entender más fácilmente otros lenguajes de programación. Esto quiere decir que es una excelente opción si apenas incursionas en el mundo de los desarrolladores.
                Gracias a su popularidad, cuenta con una amplia comunidad que organiza eventos, conferencias, reuniones y colabora en materia de códigos e información.
                El Python Package Index (PyPI) aloja miles de módulos de terceros para Python. Tanto la biblioteca estándar de Python como los módulos aportados por la comunidad permiten infinitas posibilidades.
                Este lenguaje de programación permite una diversidad de desarrollos de una manera fácil, ágil y rápida.</p>
        </div>
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