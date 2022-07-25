<?php



 $usuario=$_POST["usuario"];
 $contrasena=$_POST["contrasena"];

$conectar=mysqli_connect("localhost","root","","registros");

$usuario=mysqli_real_escape_string($conectar,$usuario);
$contrasena=mysqli_real_escape_string($conectar,$contrasena);

$resultado=mysqli_query($conectar,'INSERT INTO datos(usuario,contrasena) VALUES ("'.$usuario.'","'.$contrasena.'")');

echo("<center><h1>Registro exitoso</h1> </center>");
echo("<center><a href='login.php'>ingresar</a></center>");
?>