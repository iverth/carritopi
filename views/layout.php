<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Document</title>
</head>
<body>
    <?php
        include_once __DIR__ .'/templates/header.php';
    ?>
    <?php echo $contenido ?>
</body>
<!--composer
_instalacion de paquetes configurar autoload
<namespace>:<Ruta>
    {
    "name": "usuario/carrito_pi",
    "description": "Carrito de compras de PI",
    "type": "project",
    "require": {},
    "autoload": {
        "psr-4": {
            
            "App\\":"./",
            "Controllers\\": "./controllers",
            "Models\\": "./models"
        }
    }
}

-->
</html>