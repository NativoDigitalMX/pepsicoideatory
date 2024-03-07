<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- og tags Facebook -->
    <meta property="og:title" content="Reporte de Tendencias Ideatory">
    <meta property="og:description" content="Tu dosis bimestral de alimento para la creatividad.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://pepsicoideatory.com/">
    <meta property="og:image" content="{{ asset('images/share.png') }}">
    <meta property="og:site_name" content="pepsicoideatory.com">
    <meta name="author" content="Pepsico Ideatory">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo_ideatory.ico') }}"> 

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LM7NP97NE2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-LM7NP97NE2');
    </script>


    @vite('resources/js/app.js')

    @inertiaHead
</head>
<body class="overflow-x-scroll">
    @inertia
</body>
</html>
