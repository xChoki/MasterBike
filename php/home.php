<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Bienvenido!</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h4>Bienvenido <?php echo "Hola " . $_SESSION['correo']; ?></h4>
        </div>
    </div>
</body>
</html>