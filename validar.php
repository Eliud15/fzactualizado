<?php

session_start();

$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];

if (!empty($usuario) && !empty($contrasena) ) {
    $conectar=mysqli_connect("localhost","root","","registros");
    $resultado=mysqli_query($conectar,"SELECT * FROM  datos WHERE usuario='$usuario' AND contrasena='$contrasena' ");
    if ($resultado->num_rows >0) {
        echo("<center><h1>usuario correcto</h1> </center>");
        $_SESSION["usuario"] = $usuario;
            header("Location: frienzone.php");
    }
    else{
        echo("<center><h1>usuario incorrecto </h1> </center>"); 
        echo("<center><a href='login.php'>volver al ingreso</a></center>");
    }
};







?>