<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="Orangef.png" type="image/x-icon">
    <title>Recupera tu contraseña</title>
</head>
<body>
    <header>
        <img class="icon" src="Orange.png" alt="">
        <h1>Orange </h1><a class="volver" href="index.html">Volver</a>
    </header>
    
    <div>
        <form action="recuperarvalidacion.php" method="post">
            <h2>Recupera tu contraseña</h2>
            <input type="text" name="usuario" id="user" class="inputs" placeholder="Usuario" autocomplete="off" required>
            <input type="number" name="telefono" id="telefono" class="inputs" placeholder="Telefono" autocomplete="off" required>
            <input type="submit" id="send"  value="Recuperar">
        </form>
        
    </div>

    <script src="registrarse.js"></script>
</body>
</html>