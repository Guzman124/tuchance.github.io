<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form method="post">
    <input type="text" name="usuario" placeholder="usuario" >
    <br>
    <input type="text" name="contraseña" placeholder="contraseña">
    <br>
    <input type="submit" name="registro">
    </form>
    </div>
    <?php
    include("registro.php");
    ?>
</body>                                                                                                                                                                                                                                                        
</html>