<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactanos</title>
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
        <h2 class="titulo">INFORMACION DE CONTACTO</h2>
        <div class="contenedor-informacion">
            <img src="img/undraw_location_review_dmxd.svg" alt="" class="imagen-informacion">
            <div class="contenido-textos">
                <h3><span>1</span>Correo electronico</h3>
                <p>expresslaundry@hotmail.com</p>
                <h3><span>2</span>Celular</h3>
                <p>(55) 8734-9056</p>
                <h3><span>1</span>Horarios</h3>
                <p>Todos los días de 7:00 a.m - 9:00 p.m</p>
             </div>
        </div>
        <h2 class="titulo">Contacto</h2>
    
        <main class="contenedor seccion contenido-centrado">
            <h2 class="fw-300 centrar-texto">Llena el Formulario de contacto</h2>
    
        <form action="" class="contacto" method="post">
        <fieldset>
            <legend>Información Personal</legend>
    
            <label for="nombre">Nombre:</label>
            <input type="text" name="nomb"placeholder="Tu Nombre" id="nombre" required>
    
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Tu correo electrónico" id="email" required>
    
            <label for="telefono">Teléfono:</label>
            <input type="tel"  name="telef" id="telefono" placeholder="0454224521"required>
    
            <label for="mensaje">Mensaje:</label> 
            <textarea id="mensaje" name="mensaj"></textarea>
    
            
    
        </fieldset>
    
        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>
        <div class="forma-contacto">
            <label for="telefono">Télefono:</label>
            <input type="radio" name="contacto" value="telefono" id="telefono">
    
            <label for="correo">Email:</label>
            <input type="radio" name="contac" value="correo" id="correo">
        </div>
            <p>Si eligió teléfono, elija fecha y hora</p>
    
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha">
    
            <label for="hora">Hora:</label>
            <input type="time" id="hora">
        </fieldset>
    
        <input type="submit" name= "enviar" value="Enviar" class="boton boton-verde">

        <?php
        include("conexion.php");
        ?>
        </form>    
        </main>
        
</body>
</html>