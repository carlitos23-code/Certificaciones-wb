<?php
$vector2 = unserialize(stripslashes($_POST["array"]));
    if(isset($_POST["array"]) && $_POST["array"]) {
        $vector2 = unserialize(stripslashes($_POST["array"]));
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Certificado de java</title>
    <style>
        .certificado{
            align-content: center;
            
        }
        .imglog{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-content: center;
            align-items: center;
            padding-right: 250px;
        }
		.texto2{
			font-family: sans-serif;
			text-align: center;
		}
		
		.texto1{
			font-size: 20px;
		}
		
		
		
	
		
    </style>
</head>
<body>
  
   <header id="cabecera">
   	<img src="imagenes/icono.jpg" alt="" height="20%" width="20%">
   
   </header>
    
     <div>
       <?php echo '<p class="texto1">Se hace entrega a: <i>'.$vector2[2].'</i> el siguiente</p><br>';?>
    </div>
   
   <div  class="certificado" align="center">
        <h1>CERTIFICADO</h1><br>   
   </div>
    
   <?php echo ' <p class="texto1">Por haber obtenido una calificacion aprobatoria de <strong>'.$vector2[3].'</strong> en el examen de certificacion del lenguaje de programacion java realizado en la fecha correspondiente <b> '.$vector2[4].'</b> por la empresa mexdevelopers</p><br>';  ?>
    <p class="texto2">En la ciudad de Aguascalientes, ags, Mexico.<p>
    <p class="texto2">El cual fue aplicado por la empresa <b>Mexdevelopers</b> </p>
    
    <div class="imglog">
        <div class="firma">
           <figure>
           	<img src="imagenes/firma.png" alt="" height="30%" width="30%">
            <figcaption>
            	<u class="texto1">C.E.O Juan Salvador Alvarez Herrera </u>
            </figcaption>
           </figure>
            
        </div>
     
    </div>
    <br><br>
    <footer style="width: 750px;">
    	 <p class="texto2">Este certificado hace valer los concimientos sobre el lenguage de programación java, se espera que el presente documento sea constancia de que esta cpacitado para el manejo del lenguaje por parte de la empresa mexdevelopers </p>
    </footer>
   
   
    
    
</body>
</html>



<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "certificado.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
















