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
<!--                <a href="" class="w-52 h-10 bg-blue flex justify-center items-center text-white rounded-md text-sm">
                    Ver archivo completo
                </a>-->
            </div>
            <div class="whitespace-nowrap relative h-12 mt-6 overflow-hidden">
                <div class="w-full h-16 top-0 absolute overflow-x-scroll overflow-y-hidden space-x-4 pt-2">
                    <button @click="categorySelected()"
                        :class="!this.category ? 'bg-sharePointBlue text-white' : 'bg-lightBlue text-sharePointBlue'"
                        class="relative inline-block text-md font-medium rounded-3xl px-6 py-1"
                    >
                        Ver todas
                    </button>
                    <button v-for="(category, index) in categories" :key="index" v-if="categories.length"
                        @click="categorySelected(category.id)"
                        :class="this.category == category.id ? 'bg-sharePointBlue text-white' : 'bg-lightBlue text-sharePointBlue'"
                        class="relative inline-block text-md font-medium rounded-3xl px-6 py-1 hover:bg-sharePointBlue hover:text-white"
                    >
                        {{ category.name }}
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-6">
                <a v-for="(trend, index) in trends" :key="index" v-if="trends.length"
                   :href="`tendencias/${trend.slug}`"
                   class="group block w-full h-80 rounded-2xl relative overflow-hidden"
                >
                    <img :src="`/storage/${trend.image}`" class="w-full h-full object-cover group-hover:scale-110 transition ease-in-out duration-700" :alt="trend.title">
                    <div class="absolute top-0 left-0 w-full h-full bg-black/30 p-6 flex justify-start items-end">
                        <span class="text-white font-bold text-4xl">
                            <small class="text-base">{{ trend.category.name }}</small>
                            <br>
                            <span class="group-hover:underline">{{ trend.title }}</span>
                        </span>
                    </div>
                </a>
            </div>

        </div>
    </section>

</template>

<script>
import { gsap } from "gsap"
export default {
    name: "Home",
    props: {
        categories: Object,
        trends: Object,
        filters: Object
    },
    data() {
        return {
            search: this.filters.search || "",
            category: this.filters.category || "",
        };
    },
    mounted() {
        const timeline = gsap.timeline({});
        const trends = document.querySelectorAll(".group");

        trends.forEach((item) => {
            timeline.fromTo(
                item,
                {
                    opacity: 0,
                    translateY: 100,
                },
                {
                    opacity: 1,
                    translateY: 0,
                    duration: 0.1,
                }
            );
        });
    },
    methods: {
        searchTrend() {
            this.$inertia.get(
                "/",
                { category: this.category },
                {
                    preserveState: true,
                    preserveScroll: false,
                    replace: false,
                }
            );
        },
        categorySelected(category) {
            this.search = null;
            this.category = category;
            this.searchTrend();
        },
    },
};
</script>
<style>
</style>
