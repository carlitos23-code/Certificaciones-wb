<?php
                            session_start();                             
                            $nombreUsuario=$_SESSION['nombre'];
                            $file=fopen("certificacion.txt", "r");
                            $band=0; //para saber si la cuenta y contrasena estan en el archivo
                            while(!feof($file)){
                                $linea=fgets($file);
                                if ($linea != ""){
                                    $aux=explode(':',$linea);
                                    $nombreUsuario2=$aux[7];
                                    if ($nombreUsuario==$nombreUsuario2){
                                        $band=1;
                                        break;
                                    }
                                }
                            }
                            fclose($file);
                            if($band==1){
                                echo "mocos";
                                header('location:certificaciones.php');
                            }
                           
                        
                        ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Certificación empresaurios</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/9d667bb4f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="shortcut icon" type="image/png" href="imagenes/icono.jpg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 
</head>

<body style="background-color:black; margin:15px;">
   
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
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav mr-auto" id="menuprincipal">
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
						echo "<p style='font-size:20px;color:white;'>Suerte ". $_SESSION['cuenta']."</p>";	
					}
					
					?>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container col-xs-5">
     
      <form method="post" action="revisarExamen.php" >
                        <div class="mb-3 ">
                            <!-- Pregunta 1 -->
                            
                             <?php echo "<h3> 1.-". $pregunta[0]['pregunta'] . "</h3>"; ?>   
                            
                            
                            <hr class="hrOrangered">

                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="00" value="a">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="00">'.
                                        $pregunta[0]['a']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="01" value="b">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="01">'.
                                        $pregunta[0]['b']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="02" value="c">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="02">'.
                                        $pregunta[0]['c']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="03" value="d">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="03">'.
                                        $pregunta[0]['d']
                                    .'</label>';
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <!-- Pregunta 2 -->
                            <?php echo "<h3> 2.-". $pregunta[1]['pregunta'] . "</h3>"; ?>
                            <hr class="hrOrangered">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="04" value="a">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="04">'.
                                        $pregunta[1]['a']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="05" value="b">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="05">'.
                                        $pregunta[1]['b']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="06" value="c">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="06">'.
                                        $pregunta[1]['c']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="07" value="d">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="07">'.
                                        $pregunta[1]['d']
                                    .'</label>';
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <!-- Pregunta 3 -->
                            <?php echo "<h3> 3.-". $pregunta[2]['pregunta'] . "</h3>"; ?>
                            <hr class="hrOrangered">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios3" id="08" value="a">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="08">'.
                                        $pregunta[2]['a']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios3" id="09" value="b">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="09">'.
                                        $pregunta[2]['b']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios3" id="10" value="c">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="10">'.
                                        $pregunta[2]['c']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios3" id="11" value="d">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="11">'.
                                        $pregunta[2]['d']
                                    .'</label>';
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <!-- Pregunta 4 -->
                            <?php echo "<h3> 4.-". $pregunta[3]['pregunta'] . "</h3>"; ?>
                            <hr class="hrOrangered">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios4" id="12" value="a">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="12">'.
                                        $pregunta[3]['a']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios4" id="13" value="b">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="13">'.
                                        $pregunta[3]['b']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios4" id="14" value="c">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="14">'.
                                        $pregunta[3]['c']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios4" id="15" value="d">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="15">'.
                                        $pregunta[3]['d']
                                    .'</label>';
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <!-- Pregunta 5 -->
                            <?php echo "<h3> 5.-". $pregunta[4]['pregunta'] . "</h3>"; ?>
                            <hr class="hrOrangered">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios5" id="16" value="a">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="16">'.
                                        $pregunta[4]['a']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios5" id="17" value="b">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="17">'.
                                        $pregunta[4]['b']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios5" id="18" value="c">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="18">'.
                                        $pregunta[4]['c']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios5" id="19" value="d">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="19">'.
                                        $pregunta[4]['d']
                                    .'</label>';
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <!-- Pregunta 6 -->
                            <?php echo "<h3> 6.-". $pregunta[5]['pregunta'] . "</h3>"; ?>
                            <hr class="hrOrangered">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios6" id="20" value="a">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="20">'.
                                        $pregunta[5]['a']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios6" id="21" value="b">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="21">'.
                                        $pregunta[5]['b']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios6" id="22" value="c">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="22">'.
                                        $pregunta[5]['c']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios6" id="23" value="d">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="23">'.
                                        $pregunta[5]['d']
                                    .'</label>';
                                ?>
                            </div>
                        </div>

                        <hr>
                        <div class="container mt-4">
                            <input type="hidden" name="array" value='<?php echo serialize($vector2);?>'>
                            <input type="submit" class="btn btn-primary" value="Consultar" name="enviar">
                        </div>
                    </form>

      
       
       
    </div>
    <footer>
       <div class="container">
          <div class="row">
             <div class="col-lg-2">
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
             </div>
              <div class="col-lg-2">
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
              </div>
        <div class="col-lg-3">
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
        </div>
        <div class="col-lg-2">
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
        </div>
        <div class="col-lg-2">
            <li>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.4979554250415!2d-4.474075580470723!3d36.72163822260717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7290180f601819%3A0x1a09c03feae20089!2sResidencia%20Universitaria%20Balc%C3%B3n%20del%20Romeral!5e0!3m2!1ses-419!2smx!4v1601865932024!5m2!1ses-419!2smx" width="300em" height="250em" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </li>
        </div>
        
          </div>
           
       </div>
        
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>