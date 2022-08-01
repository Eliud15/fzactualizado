<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recuperar.css">
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="Orangef.png" type="image/x-icon">
    <title>
       Recupera tu contraseña
    </title>
</head>
<body>

<header>
    <img class="icon" src="Orange.png" alt="">
        <h1>Orange </h1> <a class="volver" href="login.php">Ingresar</a>
</header>
        
    
    
    <div>
    <?php
    $usuario=$_POST["usuario"];
$telefono=$_POST["telefono"];

if (!empty($usuario) && !empty($telefono) ) {
    $conectar=mysqli_connect("localhost","root","","registros");
    $resultado=mysqli_query($conectar,"SELECT * FROM  datos WHERE usuario='$usuario' AND telefono='$telefono' ");
    if ($resultado->num_rows >0) {
        $res=mysqli_query($conectar,'SELECT contrasena FROM datos');
        ?>
        <?php
        while ($mensajes=mysqli_fetch_object($resultado)) {
            ?> 
            <h2 >
            <?php echo("Tu contraseña es:"); ?>
            <?php echo($mensajes->contrasena); ?> 
             
            </h2>
              <br>
              <br>
        <?php
            }
        ?>
        <?php
    }
    else{
        echo("<center><h3>Usuario incorrecto  <br> o no registrado</h3> </center>"); 
       
    }
};

?>
    </div>
    <script src="login.js"></script>
</body>
</html>