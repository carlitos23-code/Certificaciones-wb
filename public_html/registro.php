<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/9d667bb4f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" type="image/png" href="imagenes/icono.jpg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Sansita+Swashed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
	<title>Registro</title>
</head>
<body>
	<div id="rcontainer1">
		<h1 >Registro</h1> <br>
        <h5 style="color:yellow;">¡Unete a la familia de mexdevelopers y disfruta las ventajas de ello!</h5>
    </div>
    
    <form class="needs-validation" method="post" style=" background-color:#1C2833;color:white;" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" >
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Nombre Completo</label>
      <input type="text" name="nombre" class="form-control" id="validationTooltip01"  required placeholder="Jose Alvarez">
      <div class="valid-tooltip">
        se ve bien!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Correo electronico</label>
      <input type="email" name="email" class="form-control" id="validationTooltip02"  required placeholder="leo@hotmail.com">
      <div class="valid-tooltip">
        se ve bien!
      </div>
    </div>
    
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Username</label>
      <input type="text" name="cuenta" class="form-control" id="validationTooltip01"  required placeholder="gsalazar123" >
      <div class="valid-tooltip">
        se ve bien!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Contraseña</label>
      <input name="contraseña" type="password" class="form-control" id="validationTooltip02"  required>
      <div class="valid-tooltip">
        okay!
      </div>
    </div>
  
  </div>
  <button class="btn btn-dark" type="submit">Enviar</button>
</form>

</body>
</html>


<?php 
if(!empty($_POST["nombre"]) && !empty($_POST["email"]) && !empty($_POST["cuenta"]) && !empty($_POST["contraseña"])){
	$cuenta=$_POST["cuenta"];
	$password= $_POST["contraseña"];
	$mail=$_POST["email"];	
	$name=$_POST["nombre"];
	
	$file = fopen("usuarios.txt","a+");
     
    fwrite($file, $cuenta.":".$password.":".$mail.":".$name."\r\n");
    
    fclose($file);
     
     header("location: index.php");

	
}




?>



