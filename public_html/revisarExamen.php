<?php
    

$vector2 = unserialize(stripslashes($_POST["array"]));
    if(isset($_POST["array"]) && $_POST["array"]) {
        $vector2 = unserialize(stripslashes($_POST["array"]));
    }
    $preguntas=array(
        1=>array("pregunta" => "¿Cuál es la descripción que crees que define mejor el concepto 'clase' en la programación orientada a objetos?",
             "respuesta" => "c",
             "a" => "Es un concepto similar al de 'array'",
             "b" => "Es un tipo particular de variable",
             "c" => "Es un modelo o plantilla a partir de la cual creamos objetos",
             "d" => "Es una categoria de datos ordenada secuencialmente"),
        2=>array("pregunta" => "¿Qué elementos crees que definen a un objeto?",
             "respuesta" => "b",
             "a" => "Sus cardinalidad y su tipo",
             "b" => "Sus atributos y sus métodos",
             "c" => "La forma en que establece comunicación e intercambia mensajes",
             "d" => "Su interfaz y los eventos asociados"),
        3=>array("pregunta" => "¿Qué código de los siguientes tiene que ver con la herencia?",
             "respuesta" => "a",
             "a" => "public class Componente extends Producto",
             "b" => "public class Componente inherit Producto",
             "c" => "public class Componente implements Producto",
             "d" => "public class Componente belong to Producto"),
        4=>array("pregunta" => "¿Qué significa instanciar una clase?",
             "respuesta" => "c",
             "a" => "Duplicar una clase",
             "b" => "Eliminar una clase",
             "c" => "Crear un objeto a partir de la clase",
             "d" => "Conectar dos clases entre sí"),
        5=>array("pregunta" => "En Java, ¿a qué nos estamos refiriendo si hablamos de 'Swing'?",
             "respuesta" => "d",
             "a" => "Una función utilizada para intercambiar valores",
             "b" => "Es el sobrenombre de la versión 1.3 del JDK",
             "c" => "Un framework específico para Android",
             "d" => "Una librería para construir interfaces gráficas"),
        6=>array("pregunta" => "¿Qué es Eclipse?",
             "respuesta" => "c",
             "a" => "Una libreria de Java",
             "b" => "Una versión de Java especial para servidores",
             "c" => "Un IDE para desarrollar aplicaciones",
             "d" => "Ninguna de las anteriores"),
        7=>array("pregunta" => "¿Qué es el bytecode en Java?",
             "respuesta" => "b",
             "a" => "El formato de intercambio de datos",
             "b" => "El formato que obtenemos tras compilar un fuente .java",
             "c" => "Un tipo de variable",
             "d" => "Un depurador de código"),
        8=>array("pregunta" => "¿Qué significa sobrecargar (overload) un método?",
             "respuesta" => "c",
             "a" => "Editarlo para modificar su comportamiento",
             "b" => "Cambiarle el nombre dejándolo con la misma funcionalidad",
             "c" => "Crear un método con el mismo nombre pero diferentes argumentos",
             "d" => "Añadirle funcionalidades a un método"),
        9=>array("pregunta" => "¿Qué es una excepción?",
             "respuesta" => "a",
             "a" => "Un error que lanza un método cuando algo va mal",
             "b" => "Un objeto que no puede ser instanciado",
             "c" => "Un bucle que no finaliza",
             "d" => "Un tipo de evento muy utilizado al crear interfaces"),
        10=>array("pregunta" => "¿Cuál método es correcto al imprimir texto?",
             "respuesta" => "b",
             "a" => "System.out()",
             "b" => "System.out.println()",
             "c" => "out.write.Text()",
             "d" => "System.printText()"),
        11=>array("pregunta" => "¿Cuál de las siguientes funciones completa la linea para leer una entrada del siguiente código?
             Scanner sc=new Scanner(System.in);
             String st=sc.______():",
             "respuesta" => "d",
             "a" => "input()",
             "b" => "getLine()",
             "c" => "nextGet()",
             "d" => "nextLine()"),
        12=>array("pregunta" => "Completa los espacios para declarar una variable entera y fija de valor 5
             ___ var=__;",
             "respuesta" => "c",
             "a" => "float,5.0",
             "b" => "double,5",
             "c" => "int,5",
             "d" => "entero,5"),
        13=>array("pregunta" => "¿Cuál es la linea de código que abre un archivo en modo de lectura?",
             "respuesta" => "a",
             "a" => "FileReader fr = new FileReader (archivo);",
             "b" => "FileReader fr = new FileWriter (archivo);",
             "c" => "File archivo = new File ('C:\\archivo.txt');",
             "d" => "String linea = br.readLine()"),
        14=>array("pregunta" => "¿Cuál es la linea de código que abre un archivo en modo de escritura?",
             "respuesta" => "b",
             "a" => "FileReader fr = new FileReader (archivo);",
             "b" => "FileReader fr = new FileWriter (archivo);",
             "c" => "File archivo = new File ('C:\\archivo.txt');",
             "d" => "String linea = br.readLine()")                );

    

$pregunta=array();
$pregunta[0]=$preguntas[$vector2[0]];
$pregunta[1]=$preguntas[$vector2[1]];
$pregunta[2]=$preguntas[$vector2[2]];
$pregunta[3]=$preguntas[$vector2[3]];
$pregunta[4]=$preguntas[$vector2[4]];
$pregunta[5]=$preguntas[$vector2[5]];

        $countResp = 0;

        if($pregunta[0]['respuesta'] == $_POST['exampleRadios1']) {
            $countResp++;
        }
        if($pregunta[1]['respuesta'] == $_POST['exampleRadios2']) {
            $countResp++;
        }
        if($pregunta[2]['respuesta'] == $_POST['exampleRadios3']) {
            $countResp++;
        }
        if($pregunta[3]['respuesta'] == $_POST['exampleRadios4']) {
            $countResp++;
        }
        if($pregunta[4]['respuesta'] == $_POST['exampleRadios5']) {
            $countResp++;
        }
        if($pregunta[5]['respuesta'] == $_POST['exampleRadios6']) {
            $countResp++;
        }
    $prom=$countResp*10/6;

?>


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

<body style="background-color:black; margin:15px;">
   <?php session_start(); ?>
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
						echo "<p style='font-size:20px;color:white;'> ". $_SESSION['cuenta']."</p>";	
					}
					
					?>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
           <div class="col-sm-4 col-md-4 col-lg-2">
               
            </div>
            <div class="col-sm-4 col-md-4 col-lg-8">
                <h2 style="color:white; align-content: center;">Resultado de tu Certificación = <?php echo $prom; ?></h2>
            </div>
            
        </div>
        <div class="row">
           <div class="col-sm-4 col-md-4 col-lg-">
               
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <?php
                    if($prom>8){
                        echo "<img src='imagenes/casquillo-graduacion-certificado-felicitacion-educacion-concepto_38391-470.jpg' alt='' width:200px; height=200px;>";
                    }
                    else{
                        echo "<img src='imagenes/db9b121e-6843-44e7-b411-694efdb77a65.jpg' alt=''width:200px; height=200px;> ";
                    }
                ?>
                
                
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
               
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-12">
                <h4 style="color:white; align-content: center;">
                <?php
                    if($prom>8){
                        echo "Felicidades te has certificado, recuerda que puedes realizar con nosotros otras tantas certificaciones para quue puedas
                        contar con mejor preparación, ya que nuestros certificados son en México y el extranjero";
                    }
                    else{
                        echo "Lo sentimos pero has reprobado, recuerda que puedes estudiar con nosotros para posteriormente tomar otra
                       certificacion";
                    }
                ?>
                </h4>
            </div>
        </div>
    </div>
    <?php    
    
    $estado="";
    
    $nombreCertificaciones="Certificación Java";
	$cuenta=$_SESSION["cuenta"];
	$e_mail=$_SESSION["email"];	
	$name=$_SESSION["nombre"];
     if($prom>=8){
        $estado="Aprobado";
    }
    else{
        $estado="Reprobado";
    }
	
	$file = fopen("certificacion.txt","a+");
    
    $fecha = date('d/m/Y');
    date_default_timezone_set("America/Mexico_City");
    $hora=date('H');
    $minutos=date('i');
    

    $array1=array($estado,$nombreCertificaciones,$name,$prom,$fecha,$hora,$minutos);
    fwrite($file, $e_mail.":".$nombreCertificaciones.":".$prom.":".$estado.":".$fecha.":".$hora.":".$minutos.":".$name);
    
    fclose($file);
     
    //header("location: index.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


$mail = new PHPMailer(true);

$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'salvadordiosdado711@gmail.com';                     // SMTP username
    $mail->Password   = 'Jesus1234567890';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('salvadordiosdado711@gmail.com', 'Certificaciones Mexdevelopers');
    $mail->addAddress($e_mail, 'Juan CaCastian');     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Certificaciones Mexdevelopers';
    $mail->Body    = 'Su calificación es de '. $prom .' Gracias por certificarte con nosotros</b>';


    $mail->send();
    //echo 'El mensaje se envio a su corrreo';
} catch (Exception $e) {
    //echo "Hubo un error wapo: {$mail->ErrorInfo}";
}

?>
  
  <?php 
	if($estado=="Aprobado"){
		echo "xd";
		echo ' <form action="crear.php" method="post" style="background-color:black;">';
		echo ' <div class="container mt-4">'; ?>
		
		<input type="hidden" name="array" value='<?php echo serialize($array1);?>'>
		
		<?php
		echo ' <input type="submit" class="btn btn-primary" value="Descargar certificado" name="enviar">';
		echo " </div>";
		echo "</form>";
	    }
	?>
  
  
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

