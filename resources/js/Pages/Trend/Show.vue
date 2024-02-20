<template>

    <section class="bg-banner bg-cover py-20 text-white shadow-lg">
        <div class="container">
            <div class="flex items-stretch">
                <div class="w-2/12 flex flex-col">
                    <a href="/" class="underline">Inicio /</a>
                    <a href="" class="underline">Tendencias /</a>
                </div>
                <div class="w-10/12">
                    <h1 class="text-4xl text-right">
                        <strong>{{ trend.title }}</strong>
                        <br>
                        {{ trend.subtitle }}
                    </h1>
                </div>
            </div>
            <img :src="`/storage/${trend.image}`"
                 class="w-10/12 mt-6 ml-auto"
                 :alt="trend.title"
            >
        </div>
    </section>

    <section class="py-16">
        <div class="container flex justify-between items-start gap-8">
            <div class="w-2/12">
                <a href=""
                   class="relative inline-block bg-lightBlue text-sharePointBlue text-sm font-medium rounded-3xl px-6 py-1"
                >
                    {{ trend.category.name }}
                </a>
                <div class="mt-8">
                    <h4>Compartir</h4>

                </div>
            </div>
            <div class="w-7/12">
                <div class="" v-html="trend.description"></div>
            </div>
            <div class="w-3/12">
                <h3 class="mb-2">Principales Caracteristicas</h3>
                <div class="">
                    <div v-for="(tag, index) in trend.tags" key="index"
                         class="bg-lightBlue rounded-lg py-2 px-4 text-sharePointBlue flex justify-start items-center gap-4"
                    >
                        <img :src="`/storage/${tag.image}`" class="w-12 bg-sharePointBlue p-2 rounded-full" :alt="tag.name.en">
                        <strong>{{ tag.name.en }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-lightBlue py-20">
        <div class="container">
            <h2 class="text-sharePointBlue text-3xl mb-8">
                Algunos datos sobre
                <br>
                esta tendencia
            </h2>
            <div class="space-y-4">
                <div v-for="(fact, index) in trend.facts" key="index"
                     class="py-6 border-t-2 border-sharePointBlue/50 flex justify-center items-start gap-4"
                >
                    <div class="text-blue text-3xl pr-2">/0{{ index+1 }}</div>
                    <div class="w-1/3">
                        <img :src="`/storage/${fact.image}`" class="w-full" :alt="fact.title">
                    </div>
                    <div class="w-1/3 text-blue text-lg font-bold">{{ fact.title }}</div>
                    <div class="w-1/3 text-gray" v-html="fact.description"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container flex justify-center items-start gap-16">
            <div class="w-8/12">
                <h2 class="text-blue font-bold text-xl mb-6">¿Por qué es relevante?</h2>
                <div class="" v-html="trend.relevant"></div>
            </div>
            <div class="w-4/12">
                <h2 class="text-blue font-bold text-xl mb-6">¿Cuál es el reto?</h2>
                <div class="space-y-4">
                    <div v-for="(challenge, index) in trend.challenges" key="index"
                         class="bg-lightBlue rounded-lg py-4 px-8 text-sharePointBlue"
                    >
                        {{ challenge.challenge }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-lightBlue py-20">
        <div class="container">
            <div class="w-10/12 ml-auto">
                <h2 class="text-blue text-2xl font-bold">Otras marcas respecto a esta tendencia</h2>
                <div class="">
                    <div v-for="(reference, index) in trend.references" key="index"
                         class="bg-lightBlue rounded-lg py-4 px-8 text-sharePointBlue"
                    >
                        <img :src="`/storage/${reference.image}`" class="w-full" :alt="reference.title">
                        <div class="bg-white">
                            <h4>{{ reference.title }}</h4>
                            <div v-html="reference.description"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container flex justify-center items-start">
            <div class="w-8/12">
                <h2 class="text-blue font-bold text-2xl mb-2">Consideraciones</h2>
                <p class="mb-8">
                    ¿Qué aspectos debo tomar en cuenta para implementar esta tecnología con mi marca?
                </p>
                <div class="space-y-4">
                    <div v-for="(consideration, index) in trend.considerations" key="index"
                         class="bg-lightBlue rounded-lg py-4 px-8"
                         v-html="consideration.consideration">
                    </div>
                </div>
            </div>
            <div class="w-4/12">

            </div>
        </div>
    </section>

</template>

<script>

export default {
    name: "Home",
    props: {
        trend: Object,
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
