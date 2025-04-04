<?php
$pageTitle = 'Enfermedades Otorrinolaringológicas | Dr. Roberto Herrera';
$metaDescription = 'Descubre las enfermedades más comunes del oído, nariz, garganta, laringe y cuello. Información clara y confiable del Dr. Roberto Herrera, otorrino en Tlaxcala.';
$canonical = 'https://otorrinotlaxcala.com/enfermedades.php';

require 'includes/app.php';
incluirTemplate('header', $inicio = true);
?>



<main class="hero-enfermedades">
    <div class="hero-centrar">
        <h1 class="centrar">Enfermedades</h1>
    </div>

    <div class="hero-content_enfermedades">
        <ul id="enfermedades-list">


        <?php
            incluirTemplate('oido');
        ?>

        <?php 
            incluirTemplate('nariz');
        ?> 

        <?php
            incluirTemplate('garganta');
        ?>

        <?php
            incluirTemplate('laringe');
        ?>

        <?php
            incluirTemplate('cuello');
        ?>


        </ul>
        
        <div id="details">
            <p id="definition"></p>
            <div id="media-container">
                <!-- Se colocarán la imagen o el video aquí con JavaScript -->
            </div>
        </div>
        
</main>



<script src="src/js/script.js"></script>




<?php 
    incluirTemplate('footer');
?> 
