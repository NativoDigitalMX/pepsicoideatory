<template>
    <!-- Meta Tags -->
    <Head>
        <title>Pepsico Ideatory</title>
        <meta
            name="description"
            content=""
        />
    </Head>

    <!-- Start Header Section -->
    <header class="bg-blue h-16 flex justify-between items-stretch text-white">
        <a href="" class="px-8 flex justify-center items-center shrink-0">
            <img src="../../images/logo_ideatory.png"
                 class="w-24"
                 alt="Logo Pepsico Ideatory"
            >
        </a>
        <nav class="w-full flex justify-around items-stretch">
            <a href="" class="flex justify-center items-center">Hacia el futuro</a>
            <a href="" class="flex justify-center items-center">Colaboradores</a>
            <a href="" class="flex justify-center items-center">Campaña</a>
            <a href="" class="flex justify-center items-center">Premiaciones</a>
            <a href="" class="flex justify-center items-center">Lo que viene</a>
        </nav>
        <a href="" class="border-l border-white flex justify-center items-center px-8">INTERNAL</a>
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
