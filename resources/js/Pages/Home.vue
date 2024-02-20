<template>

    <section class="bg-banner bg-cover py-20 text-white shadow-lg">
        <div class="container flex items-stretch">
            <div class="w-2/12">
                <a href="" class="underline">Inicio</a>
            </div>
            <div class="w-10/12">
                <h1 class="text-7xl font-extrabold">
                    Reporte de <br>
                    Tendencias Ideatory
                </h1>
                <p class="text-4xl font-medium mt-4">
                    Tu dosis bimestral de alimento para la creatividad.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container overflow-hidden relative">
            <div class="flex justify-between items-end">
                <h2 class="text-5xl">
                    Tendencias
                    <br>
                    Principales
                </h2>
                <a href="" class="w-52 h-10 bg-blue flex justify-center items-center text-white rounded-md text-sm">
                    Ver archivo completo
                </a>
            </div>
            <div class="whitespace-nowrap relative h-12 mt-6 overflow-hidden">
                <div class="w-full h-16 top-0 absolute overflow-x-scroll overflow-y-hidden space-x-6 pt-2">
                    <a v-for="(category, index) in categories" :key="index" v-if="categories.length"
                        href=""
                        class="relative inline-block bg-lightBlue text-sharePointBlue text-sm font-medium rounded-3xl px-6 py-1"
                    >
                        {{ category.name }}
                    </a>
                </div>
            </div>

            <div class="">
                <a v-for="(trend, index) in trends" :key="index" v-if="trends.length"
                   :href="`tendencias/${trend.slug}`"
                     class=""
                >
                    {{ trend.title }}
                </a>
            </div>

        </div>
    </section>

</template>

<script>

export default {
    name: "Home",
    props: {
        categories: Object,
        trends: Object
    },
    data() {
        return {

        };
    },
    mounted() {
    },
};
</script>
<style>
</style>
