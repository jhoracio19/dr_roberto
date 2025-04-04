<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Otorrinolaringólogo en Tlaxcala | Dr. Roberto Herrera' ?></title>


    
    <!-- SEO -->
    <meta name="description" content="<?php echo $metaDescription ?? 'Otorrinolaringólogo en Tlaxcala. El Dr. Roberto Oscar Herrera es especialista en oído, nariz y garganta. Atención profesional y citas disponibles.' ?>">


    <meta name="author" content="Dr. Roberto Oscar Herrera Mendoza">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $pageTitle ?? 'Otorrino en Tlaxcala | Dr. Roberto Oscar Herrera Mendoza'; ?>">
    <meta property="og:description" content="<?php echo $metaDescription ?? 'Especialista en oído, nariz y garganta en Tlaxcala. Agenda tu cita.'; ?>">

    <meta property="og:image" content="https://otorrinotlaxcala.com/src/img/dr_roberto.jpg">
    <meta property="og:url" content="https://otorrinotlaxcala.com/">
    <meta property="og:type" content="website">

    <!-- Twitter Cards -->
    <meta name="twitter:title" content="<?php echo $pageTitle ?? 'Otorrino en Tlaxcala | Dr. Roberto Oscar Herrera Mendoza'; ?>">
    <meta name="twitter:description" content="<?php echo $metaDescription ?? 'Especialista en oído, nariz y garganta en Tlaxcala. Agenda tu cita hoy.'; ?>">


    <meta name="twitter:image" content="https://otorrinotlaxcala.com/src/img/dr_roberto.jpg">



    <meta name="referrer" content="no-referrer-when-downgrade">
    <link rel="canonical" href="<?php echo $canonical ?? 'https://otorrinotlaxcala.com/'; ?>">


    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../src/img/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../src/img/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../src/img/logo.png">

    <!-- Preloads -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="preload" href="../../css/style.css" as="style">

    <!-- Estilos -->
    <link rel="stylesheet" href="../../css/style.css">    

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

        <!-- Datos Estructurados (Schema.org) -->
        <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Physician",
    "name": "Dr. Roberto Oscar Herrera Mendoza",
    "medicalSpecialty": "Otolaryngology",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "G. Valle 18, Centro",
        "addressLocality": "Tlaxcala",
        "addressRegion": "Tlaxcala",
        "postalCode": "90000",
        "addressCountry": "MX"
    },
    "image": "https://otorrinotlaxcala.com/src/img/dr_roberto.jpg",
    "telephone": "+522461567821",
    "url": "https://otorrinotlaxcala.com/",
    "priceRange": "$$",
    "openingHours": "Mo-Fr 09:00-17:00"
}
</script>

</head>

<body>

    <header class="header">
        <div class="header-logo">
            <a href="index.php"><img src="src/img/logo.png" alt="Otorrino en Tlaxcala - Dr. Roberto Oscar Herrera Mendoza"></a>
        </div> <!-- .header-logo -->

        <nav class="header-menu">
            <ul class="header-menu_link">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="pacientes.php">Pacientes</a></li>
            </ul>
        </nav> <!-- .header-menu -->

        <div class="header-acciones">
            <a class="btn" href="https://maps.app.goo.gl/RBfovwq6PKK7HtHy5?g_st=ic" target="_blank">Como Llegar</a>

            <a class="btn btn-primary" href="https://wa.me/2461567821"  target="_blank">Agendar Cita</a>
        </div> <!-- .header-acciones -->
    </header> <!--.header -->
