<?php

namespace Database\Seeders;

use App\Models\Trend;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trend::create([
            'title'         => 'NFT',
            'slug'          => 'nft',
            'subtitle'      => 'AHORA PUEDES COMPRAR UN TWEET',
            'description'   => 'Un non-fungible token(1), o token no fungible(2), es un tipo de token criptográfico que representa una creación única: una fotografía, una canción, un obra de arte, un Tweet. Para ponerlo en palabras más sencillas, los NFT son como certificados de autenticidad (imagina el certificado de una obra de arte o de una joya), pero en este caso están respaldados por la tecnología blockchain(2).
                                <br>
                                Su diferencia con las criptomonedas (como las bitcoins) es que estas no se diferencian entre sí, mientras que los NFT representan un activo único: si lo compras, solo habrá uno como el tuyo. Los NFT son activos digitales únicos pero también pueden estar respaldados por objetos del mundo real: una pintura física, un inmueble, un artículo deportivo, un autógrafo. La mente es el límite.',
            'relevant'      => 'La tecnología blockchain es en sí misma una macro-tendencia disruptora en diversos sectores. Los NFT son una forma de acercar esta tecnología a las industrias creativas y por eso ha generado tanto impacto en el consumidor.
                                <br>
                                La proyección de los NFT es que serán la evolución de la colección de arte y del coleccionismo regular (sellos, estampas, autógrafos).
                                <br>
                                Si mezclas estos factores, podrás ver que los NFT son un puente entre las marcas y sus audiencias.',

        ]);
    }
}
