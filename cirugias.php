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

        <li
        data-definition="Es la operación para quitar las amígdalas, generalmente para tratar infecciones frecuentes o problemas para respirar."
        data-type="video"
        data-src="https://www.youtube.com/embed/NQY7IFr-xyc"
        >Cirugía de amígdalas</li>

        <li
        data-definition="Es la extracción de las adenoides, unas pequeñas glándulas en la parte superior de la garganta que pueden causar problemas respiratorios o infecciones."
        data-type="video"
        data-src="https://www.youtube.com/embed/Mv6KZcgjUGw">Cirugía de adenoides</li>

        <li
        data-definition=" Es la eliminación total o parcial de la úvula (la campanita en la garganta) para tratar ronquidos o apnea del sueño."
        data-type="video"
        data-src="https://www.youtube.com/embed/1P13gyb_3j0">Cirugía de uvulectomía</li>

        <li
        data-definition="Procedimiento para reducir el tamaño de los cornetes nasales (estructuras dentro de la nariz) y mejorar la respiración."
        data-type="video"
        data-src="https://www.youtube.com/embed/tVg0CPYZAwY">Turbinoplastia</li>

        <li
        data-definition="Cirugía para corregir el tabique nasal desviado y facilitar la respiración."
        data-type="video"
        data-src="https://www.youtube.com/embed/sGCizkyRjDQ">Septumplastia</li>

        <li
        data-definition="Es la combinación de rinoplastia (cambio en la forma de la nariz) y septumplastia (corrección del tabique nasal)."
        data-type="video"
        data-src="https://www.youtube.com/embed/9OgVQeXrifU">Rinoseptumplastia</li>

        <li
        data-definition="Procedimiento estético donde se retiran las bolsas de Bichat (acumulaciones de grasa en las mejillas) para afinar el rostro."
        data-type="video"
        data-src="https://www.youtube.com/embed/DlY-WBCBFvc">Bichectomía</li>

        <li
        data-definition="Cirugía para corregir la forma, tamaño o posición de las orejas, generalmente para reducir orejas prominentes."
        data-type="video"
        data-src="https://www.youtube.com/embed/Ju_sjriIrJI">Otoplastia</li>

        <li
        data-definition="Procedimiento estético para eliminar grasa del cuello y definir la mandíbula."
        data-type="video"
        data-src="https://www.youtube.com/embed/AkGZdtO6EP0">Liposucción de cuello</li>

        <li
        data-definition="Inserción de pequeños tubos en los oídos para drenar líquido y evitar infecciones en niños con otitis frecuentes."
        data-type="video"
        data-src="https://www.youtube.com/embed/Ttt1jpSycAA">Colocación de tubos de ventilación</li>

        <li
        data-definition="Cirugía para crear una abertura en la tráquea y permitir la respiración cuando hay obstrucciones en la garganta o problemas graves para respirar."
        data-type="video"
        data-src="https://www.youtube.com/embed/_pdPOWhTMI4">Traqueostomía</li>

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