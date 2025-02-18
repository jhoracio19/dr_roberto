<?php
require 'includes/app.php';
incluirTemplate('header', $inicio = true);
?>

<main class="hero-enfermedades">
    <div class="hero-centrar">
        <h1 class="centrar">Cirugias</h1>
    </div>

    <div class="hero-content_enfermedades">
        <ul id="enfermedades-list">

        <h2>Cirugías Estéticas Faciales</h2>

        <li
        data-definition="Cirugía para modificar la forma de la nariz por razones estéticas o funcionales."
        data-type="video"
        data-src="src/cirugias/rinoplastia.mp4">Rinoplastia</li>

        <li
        data-definition="Cirugía para corregir la forma o posición de las orejas (por ejemplo, orejas prominentes).">Otoplastia</li>

        <li
        data-definition="Cirugía para aumentar o reducir el mentón, a veces combinada con rinoplastia para mejorar la armonía facial.">Mentoplastia</li>

        <li
        data-definition="Cirugía de los párpados para eliminar el exceso de piel y bolsas debajo de los ojos.">Blefaroplastia</li>

        <h2>Procedimientos No Quirúrgicos</h2>

        <li
        data-definition="Para reducir arrugas en la frente, entrecejo y patas de gallo."
        data-definition="Aplicación de Botox en parálisis facial"
        data-type="image"
        data-src="src/cirugias/botox.jpg , src/cirugias/botox2.jpg" >Botox</li>

        <li
        data-definition="Para mejorar el volumen de labios, pómulos, surcos nasogenianos o corregir asimetrías faciales.">Rellenos dérmicos (ácido hialurónico) </li>

        <li
        data-definition="Para mejorar la flacidez facial sin cirugía.">Lifting con hilos tensores</li>

        <li
        data-definition="Para mejorar la calidad de la piel y promover la regeneración celular.">Plasma rico en plaquetas (PRP) </li>

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