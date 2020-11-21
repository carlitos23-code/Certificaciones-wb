<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Iniciar sesion</title>
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

	<div id="rcontainer1">
		<h1 >Iniciar sesion</h1> <br>
       
    </div>

	<div id="Rconteiner2" style="justify-content: center;">
		<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" style=" background-color: #1C2833;color:white; font-size:30px;">
  <div style="text-align: center">
    <label for="inputEmail3" >Cuenta</label> 
    <div style="text-align: center" >
      <input type="text" class="form-control" name="cuenta" placeholder="Calakarlitos23">
    </div>
  </div>
  <div style="text-align: center">
    <label for="inputPassword3" >Contraseña </label> 
    <div>
      <input type="password" class="form-control" id="inputPassword3" name="contraseña">
    </div>
  </div>
   

    <div style="text-align: center">
      <button  type="submit" class="btn btn-primary" style="background-color: grey;">Login</button>
    </div>
 
</form>
	<div style="text-align:center;color:yellow; background-color: #1C2833; margin:20px; padding:20px;">
		<h4>¿Aun no eres miebro de la familia de mexdevelopers?</h4>
		<h4> Obten una cuenta de inmediato al dar click al boton</h4>
		<a href="registro.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Registrarse</a>
	</div>
	</div>
	
	
	
</body>
</html>




<?php 

if(!empty($_POST["cuenta"]) && !empty( $_POST["contraseña"])){
	
$cuenta = $_POST["cuenta"];
$passwd = $_POST["contraseña"];
$mail;
$nombre;	
 
$file=fopen("usuarios.txt", "r");
$band=0; //para saber si la cuenta y contrasena estan en el archivo
while(!feof($file)){
    $linea=fgets($file);
    if ($linea != ""){
      $aux=explode(':',$linea);                          
      $count = $aux[0];
      $contra = $aux[1];
	  $mail= $aux[2];
	  $nombre= $aux[3];
     
      if ($cuenta===$count && $contra === $passwd){
            $band=1; 
		    break;
     }
    }
}   
fclose($file);

# Luego de haber obtenido los valores, ya podemos comprobar:
if ($band==1){
   
	
    session_start();
     
    $_SESSION["cuenta"] = $cuenta;
    $_SESSION["contraseña"] = $passwd;
	$_SESSION["email"] = $mail;
	$_SESSION["nombre"]=$nombre;
	$_SESSION["logueado"]=true; 
	header("Location: index.php");

    }else{
      header("location: error.php");
    }

}
			  
?>