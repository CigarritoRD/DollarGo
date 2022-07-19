<?php
include 'includes/app.php';
inclurTemplate('header');
?>
<!-- FINAL DEL HEADER -->
    <main class="contenido-contacto">
        
        <form action="" class="contacto">
        <h1>Contacto</h1>
            <label for="nombre">NOMBRE</label>
            <input type="text" name="nombre" placeholder="nombre">

            <label for="email">EMAIL</label>
            <input type="email" name="email" placeholder="email">

            <label for="email">MENSAJE</label>
            <textarea class="texto" placeholder="escriba su mensaje aqui"></textarea>
            
            <input class="btn-submit" type="submit" value="Enviar">
        </form>

    </main>


    <?php
inclurTemplate('footer');
?>