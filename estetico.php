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
        data-src="src/cirugias/rinoplastia.mp4,src/pacientes/rino1.jpg,src/pacientes/rino2.jpg, src/pacientes/rino3.jpg,src/pacientes/rino4.jpg,src/pacientes/rino5.jpg,src/pacientes/rino6.jpg,src/pacientes/rino7.jpg,src/pacientes/rino8.jpg,src/pacientes/rino9.jpg,src/pacientes/rino10.jpg, src/pacientes/rino11.jpg,src/pacientes/rino12.jpg,src/pacientes/rino13.jpg">Rinoplastia</li>

        <li
        data-definition="Cirugía para corregir la forma o posición de las orejas (por ejemplo, orejas prominentes)."
        data-type="image"
        data-src="src/cirugias/otoplastia.jpg">Otoplastia</li>

        <li
        data-definition="Cirugía para aumentar o reducir el mentón, a veces combinada con rinoplastia para mejorar la armonía facial."
        data-type="image"
        data-src="src/cirugias/Mentoplastia.jpg">Mentoplastia</li>

        <li
        data-definition="Cirugía de los párpados para eliminar el exceso de piel y bolsas debajo de los ojos."
        data-type="image"
        data-src="src/cirugias/Blefaroplastia.jpeg">Blefaroplastia</li>

        <h2>Procedimientos No Quirúrgicos</h2>

        <li
        data-definition="Para reducir arrugas en la frente, entrecejo y patas de gallo."
        data-definition="Aplicación de Botox en parálisis facial"
        data-type="image"
        data-src="src/cirugias/botox.jpg , src/cirugias/botox2.jpg" >Botox</li>

        <li
        data-definition="Para mejorar el volumen de labios, pómulos, surcos nasogenianos o corregir asimetrías faciales."
        data-type="image"
        data-src="src/cirugias/rellenos.jpg">Rellenos dérmicos (ácido hialurónico) </li>

        <li
        data-definition="Para mejorar la flacidez facial sin cirugía."
        data-type="image"
        data-src="src/cirugias/tensores.jpg">Lifting con hilos tensores</li>

        <li
        data-definition="Para mejorar la calidad de la piel y promover la regeneración celular."
        data-type="image"
        data-src="src/cirugias/prp.jpeg">Plasma rico en plaquetas (PRP) </li>

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