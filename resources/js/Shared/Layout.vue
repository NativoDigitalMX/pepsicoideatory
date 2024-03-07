<template>
    <!-- Meta Tags -->
    <Head>
        <title>Reporte de Tendencias Ideatory</title>
        <meta
            name="description"
            content="Tu dosis bimestral de alimento para la creatividad."
        />

        <!-- og tags Facebook -->
        <meta property="og:title" content="Reporte de Tendencias Ideatory">
        <meta property="og:description" content="Tu dosis bimestral de alimento para la creatividad.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://pepsicoideatory.com/">
        <meta property="og:image" content="../../images/share.png">
        <meta property="og:site_name" content="pepsicoideatory.com">
        <meta name="author" content="Pepsico Ideatory">
        <link rel="icon" type="image/x-icon" href="../../images/logo_ideatory.ico">  

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LM7NP97NE2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LM7NP97NE2');
        </script>
        
    </Head>

    <!-- Start Header Section -->
    <header class="bg-blue h-16 flex justify-between items-stretch text-white">
        <a href="" class="px-8 flex justify-center items-center shrink-0">
            <img src="../../images/logo_ideatory.png"
                 class="w-24"
                 alt="Logo Pepsico Ideatory"
            >
        </a>
        <nav class="w-full flex text-sm justify-start items-stretch gap-10">
            <a href="https://pepsico.sharepoint.com/teams/BCC-PDC-Sharepoint/Shared%20Documents/Forms/All%20DocumentsTiles.aspx?id=%2Fteams%2FBCC%2DPDC%2DSharepoint%2FShared%20Documents%2F2024%2FPILARES%2F10%20IDEATORY%2F01%5FIdeatory%5FGeneral&viewid=e42cf26c%2D2731%2D485b%2Da099%2D18223a60f731" class="flex justify-center items-center">Ideatory</a>
            <a href="/" class="flex justify-center items-center">Hacia el futuro</a>
            <a href="https://pepsico.sharepoint.com/teams/BCC-PDC-Sharepoint/Shared%20Documents/Forms/All%20DocumentsTiles.aspx?id=%2Fteams%2FBCC%2DPDC%2DSharepoint%2FShared%20Documents%2F2024%2FPILARES%2F10%20IDEATORY%2F02%5FIdeatory%5FCat%C3%A1logo%20agencias&viewid=e42cf26c%2D2731%2D485b%2Da099%2D18223a60f731" class="flex justify-center items-center">Agencias</a>
            <a href="https://pepsico.sharepoint.com/teams/BCC-PDC-Sharepoint/Shared%20Documents/Forms/All%20DocumentsTiles.aspx?id=%2Fteams%2FBCC%2DPDC%2DSharepoint%2FShared%20Documents%2F2024%2FPILARES%2F10%20IDEATORY%2F03%5FIdeatory%5FCampa%C3%B1as%202024&viewid=e42cf26c%2D2731%2D485b%2Da099%2D18223a60f731" class="flex justify-center items-center">Campañas</a>
            <a href="https://pepsico.sharepoint.com/teams/BCC-PDC-Sharepoint/Shared%20Documents/Forms/All%20DocumentsTiles.aspx?id=%2Fteams%2FBCC%2DPDC%2DSharepoint%2FShared%20Documents%2F2024%2FPILARES%2F10%20IDEATORY%2F04%5FIdeatory%5FPremios%202024&viewid=e42cf26c%2D2731%2D485b%2Da099%2D18223a60f731" class="flex justify-center items-center">Premios</a>
        </nav>
        <a href="" class="border-l border-white flex justify-center items-center px-8 text-sm">INTERNAL</a>
    </header>
    <!-- End Header Section -->

    <main :key="$page.url" class="">
        <slot />
    </main>

</template>

<script>
    export default {
        name: "Layout",
        components: {},
        data() {
            return {
                menuShow: false,
            };
        },
        methods: {

        }
    };
</script>

<style>
</style>
