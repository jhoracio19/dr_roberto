<?php
require 'includes/app.php';
incluirTemplate('header', true);
?>

    <!-- Hero Section -->
    <main class="hero">
        <div class="hero-content">
            <h1>Cuidando tu salud auditiva, nasal y de garganta</h1>
            <p>Especialista en otorrinolaringología con experiencia y compromiso</p>
            <a target="_blank" href="https://wa.me/2461567821" class="btn btn-primary">Agendar Cita</a>
        </div>

        <div class="hero-image">
            <img loading="lazy" src="src/img/dr_roberto.jpg" alt="Doctor Roberto Herrera, especialista en otorrinolaringología">
        </div>
    </main>

    <!-- Servicios -->

    <section id="servicios" class="servicios">
        <h2>Servicios Médico</h2>
        <div class="services-container">
            <div class="service-card">
                <img class="service-icon" src="src/img/oido.png" alt="Diagnóstico Auditivo">
                <h3 class="service-title">Enfermedades del oído, garaganta y nariz</h3>
                <p class="service-description">Evaluaciones detalladas de audición y tratamiento.</p>
                <a class="btn" href="enfermedades.php">Ver Enfermedades</a>
            </div>
            
            <div class="service-card">
                <img class="service-icon" src="src/img/cirugia.png" alt="Cirugías">
                <h3 class="service-title">Cirugías</h3>
                <p class="service-description">Procedimientos avanzados y seguros</p>
                <a class="btn" href="cirugias.php">Ver Cirugías</a>
                <a class="btn espacio" href="estetico.php">Ver Procesos Estéticos</a>
            </div>

            
        </div>
    </section>
    

    <!-- Acerca del Doctor -->
    <section id="sobreMi" class="about-doctor">
        <h2>Acerca del Doctor</h2>
        <div class="about-content">
            <div class="about-image">
                <img loading="lazy" src="src/img/dr_roberto.jpg" alt="Doctor">
            </div>
            <div class="about-text">
                <h3>Dr. Roberto Herrera</h3>
                <p>Soy el Dr. Roberto Herrera, médico especialista en otorrinolaringología, apasionado por cuidar tu salud auditiva, nasal y de la garganta. Mi prioridad es brindarte un diagnóstico preciso y un tratamiento personalizado, siempre con empatía y profesionalismo.</p>

                <p>Con años de experiencia y formación continua, me esfuerzo por mantenerme actualizado en las técnicas más avanzadas para ofrecerte soluciones efectivas que mejoren tu calidad de vida. Desde problemas comunes como alergias y ronquidos, hasta procedimientos más complejos, estoy aquí para acompañarte en cada paso de tu recuperación.</p>
                    
                <p>Confía en que recibirás una atención integral, en un ambiente cálido y respetuoso, donde tus inquietudes siempre serán escuchadas. Mi misión es que encuentres en mí no solo a un especialista, sino a un aliado para tu bienestar.</p>
            </div>
        </div>
        <div class="about-cv">
            <a class="btn" href="src/img/cv.pdf" target="_blank">Ver mi Currículum</a>
        </div>
    </section>

    <!-- Testimonios -->
    
        <!-- Testimonios -->
        <section id="testimonios" class="testimonios">
        <h2>Testimonios de Nuestros Pacientes</h2>
        <div class="testimonio-video">
            <video controls width="100%" poster="src/img/poster-video.jpg">
                <source src="src/cirugias/testimonio.mp4" type="video/mp4">
                Tu navegador no soporta la reproducción de videos.
            </video>
        </div>
        <div class="testimonio-texto">
            <p>Escucha directamente de nuestros pacientes cómo hemos impactado positivamente en su salud y bienestar. Aquí, Paola comparte su experiencia con nuestros servicios.</p>
        </div>
    </section>

    <!-- Ubicacion y contacto -->
    <section class="contact">
        <h2>Ubicación y Contacto</h2>
        <div class="contact-content">
            <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.995653607893!2d-98.2271652!3d19.325994899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd92e61804277%3A0x58dbcc22dd8caa0f!2sCLINICA%20DE%20OTORRINOLARINGOLOGIA!5e0!3m2!1ses-419!2smx!4v1739245872811!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-info">
                <p><strong>Dirección:</strong> G. Valle 18, Centro, 9000 Tlaxcala de Xicohténcatl, Tlax</p>
                <p><strong>Teléfono:</strong> <a href="tel:+522461567821">+52 (246) 156 7821</a></p>
                <p><strong>Correo:</strong> <a href="mailto:dr.herreraorl@hotmail.com?subject=Consulta&body=Hola, quiero más información sobre sus servicios.">dr.herreraorl@hotmail.com</a></p>
            </div>
        </div>
    </section>


<?php 
    incluirTemplate('footer');
?> 
