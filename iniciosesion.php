<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unete</title>
    <link rel="stylesheet" href="css/est.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="index.html">INICIO</a>
            <a href="Lista.html">LISTA DE PRECIOS</a>
            <a href="miembro.php" >REGISTRATE </a>
            <a href="iniciosesion.php">MIEMBROS</a>
            <a href="contacto.php" >CONTACTANOS</a>
            <a href="Testimoniales.html">TESTIMONIALES</a>
        </nav>
        <section class="textos-header">
            <h1><i>LAUNDRY EXPRESS</i></h1>
            <h2>Bienvenido a la buena vida</h2>
        </section>
        <div class="ola" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(250, 251, 252);"></path></svg></div>
    </header>
    <div class="contenedor-form">
        <div class="toggle">
            <span>LAUNDRY EXPRESS</span>
        </div>
        <div class="formulario"> 
            <h2>Iniciar Sesion</h2>
            <form action="" method="POST" action="">
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <input type="submit" name="isesion" value="Iniciar Sesion"> 
                <?php
        include("sesionn.php");
        ?>
    </div>
</form>
</body>
</html>