<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libros>
 */
class LibrosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generar una URL de imagen aleatoria de picsum.photos
        $imagenes = [
            "https://fastly.picsum.photos/id/189/650/960.jpg?hmac=LdJlSfl4q-0NEw2h8Ljml4O0WGIFuq-wGZCVcpa2yiI",
            "https://fastly.picsum.photos/id/436/650/960.jpg?hmac=8O_QluJlgXVElV8Zl80eMTBeK99F7GqkgrHY_SZYyZU",
            "https://fastly.picsum.photos/id/649/650/960.jpg?hmac=Og5W-z-xQOp5fm7Et0Fi4QlBxTOf4lIPLO4TOYKiLOg",
            "https://fastly.picsum.photos/id/452/650/960.jpg?hmac=VYHhbsQsfSh3t3TZZskOYzWbUEXjceCni6tv656E-uY",
            "https://fastly.picsum.photos/id/908/650/960.jpg?hmac=XhUiK6R22uHpUGKNcheR9RvD3aCSOkvDH22PLtkXW3w",
            "https://fastly.picsum.photos/id/767/650/960.jpg?hmac=DwzpQtCnSeY21oLREQ-Aq0AO4e8gtfg9plNc-Xa-9FE",
            "https://fastly.picsum.photos/id/625/650/960.jpg?hmac=h6m37Gj3p_F_LtnvpTA5pAyJypGDYc89X9eSbUFePwQ",
            "https://fastly.picsum.photos/id/962/650/960.jpg?hmac=dQSYqzLEM3OZ3YOTFKENDXKpNZymWMnUhuuJjklqE4I",
            "https://fastly.picsum.photos/id/523/650/960.jpg?hmac=AwrK9D0KkJE6OM_gmr1f0yIJsc5UUVpW0FsJBDv5zMw",
            "https://fastly.picsum.photos/id/1027/650/960.jpg?hmac=BQbCN6YdK2C9WDQbWbYy8cZGH2bT5eLe7RoWVYdkaiE",
            "https://fastly.picsum.photos/id/687/650/960.jpg?hmac=rusneWuIIG-ybIwr3AeW8bT4vRmTsRr014o9kYsCHKw",
            "https://fastly.picsum.photos/id/9/650/960.jpg?hmac=rXeHt6iOQrWqEgRbhy_KU67e074Ix2pOvXOwixcxCKA",
            "https://fastly.picsum.photos/id/435/650/960.jpg?hmac=9Z52TD4uEADxjuYWc4SRyjuXQpT5PEbl7R1FV4EWEVk",
            "https://fastly.picsum.photos/id/432/650/960.jpg?hmac=aRyz_5KUhXABHKS6inyvSkI59qgVYrwy5ZUfyi9oR3M",
            "https://fastly.picsum.photos/id/998/650/960.jpg?hmac=5puu9evxOmVkWATFynbvPLqPa89PKbr8WBdZ3NAba5E",
            "https://fastly.picsum.photos/id/37/650/960.jpg?hmac=ZViAee1PWJ5hi3gHspObqrrW5U4W2BeF2GG8-IXi-Vg",
            "https://fastly.picsum.photos/id/187/650/960.jpg?hmac=DVMX7XPIoO4M3BiPsWgWy-Pd2yLmwk9CZDVa7HRElGg",
            "https://fastly.picsum.photos/id/39/650/960.jpg?hmac=PW_FhyWkNpv7S8hlUUs7JUeAgV7s9khkg_Bu9D1t0yo",
            "https://fastly.picsum.photos/id/69/650/960.jpg?hmac=8oqSSgI75jRJ5KWXd5oV1oLzbTctNH5T5VxW_nz18RQ",
            "https://fastly.picsum.photos/id/272/650/960.jpg?hmac=QbVT0kProinMd7Sa2gS6I1utmm5ncZqi6To2mPW9WWI",
            "https://fastly.picsum.photos/id/465/650/960.jpg?hmac=Iiebm_DTdsPWc2_IVGmMPi1d1tccs3IUwpqvJFRWlTI",
            "https://fastly.picsum.photos/id/351/650/960.jpg?hmac=rPOyfDwhsXGKLoMhF_c47MzO2m3lzRezYwVFXNmcd3s",
            "https://fastly.picsum.photos/id/982/650/960.jpg?hmac=pZdcDIBk58ziF8vv3HVGkInzwQBaHP0fNxzQmSGxFq0",
            "https://fastly.picsum.photos/id/416/650/960.jpg?hmac=2MJhwF_d8XtCccxWRYjzmU5TQIMoHRZrWmFA-nPozlU",
            "https://fastly.picsum.photos/id/1026/650/960.jpg?hmac=tkzznyB3IfWj3LldS72t82wLtLS8e5LLZD7ht_YTS5w",
            "https://fastly.picsum.photos/id/736/650/960.jpg?hmac=3pA5944_JViZYKA0snkWdCyIeLoGmLrksG13A-T4uQ4",
            "https://fastly.picsum.photos/id/373/650/960.jpg?hmac=IROOxGIei3KnEmsphTxak_OwPGfa1eFoePfROoafgsM",
            "https://fastly.picsum.photos/id/477/650/960.jpg?hmac=4aIkzb3rBk6Ir9vrJEx5_qMwczK79jtBG_0Qf8TAjjA",
            "https://fastly.picsum.photos/id/173/650/960.jpg?hmac=ar-WBeqWyYTOZWgImJhd-Vle9f8qO4nBaHnJtUv1ZeE",
            "https://fastly.picsum.photos/id/1084/650/960.jpg?hmac=7ED75fUmCB859cFN42EoyUoALk-XzTqjm_x0c-BauTc",
            "https://fastly.picsum.photos/id/532/650/960.jpg?hmac=UAih3qFWuViBG-PkZ_4CSkwc7ZTCFTfnvepuOutl5Jg",
            "https://fastly.picsum.photos/id/1059/650/960.jpg?hmac=pPnYahclI16YcrpBuNBBDjXarPQ0ksx-dB8J7iS4V1Y",
            "https://fastly.picsum.photos/id/1014/650/960.jpg?hmac=v6WReCPyePt7rQTwwgNTqfpAZwiU2PTpa4eWJdvCPlk",
            "https://fastly.picsum.photos/id/47/650/960.jpg?hmac=uNksoUlGwTupukrsV2oP7D9yv4As9THc6vrqH2hopJ4",
            "https://fastly.picsum.photos/id/458/650/960.jpg?hmac=NyHc902JhAueYoAgQaCH5Ujs3tKOnyhQssqpJrlic6U",
            "https://fastly.picsum.photos/id/967/650/960.jpg?hmac=88ehQHj5bAUu3ihZkiXLrvyuexZu0NUEMsvnE7PtsWo",
            "https://fastly.picsum.photos/id/950/650/960.jpg?hmac=Z-4Bf6j5MiOr-U39s1SipR9uZqBDYML_bpdXzX5S9eo",
            "https://fastly.picsum.photos/id/334/650/960.jpg?hmac=fI8mmqEoGaQQKKDLM8jgwrkp17gLlP54JN4Owra7XqU",
            "https://fastly.picsum.photos/id/588/650/960.jpg?hmac=AHopBsepP5Svph4bc5qWmg6-XP0b_QXo_vA3u0u_pUw",
            "https://fastly.picsum.photos/id/522/650/960.jpg?hmac=4RKBelm2I5x5IDWuDCzbY-sb4JLK2mLvJLYXUrY3mk0"
        ];

        return [
            'nombre_libro' => $this->faker->sentence(3),
            'descripcion' => $this->faker->text(200),
            'id_autor' => $this->faker->numberBetween(1, 14),
            'id_editorial' => $this->faker->numberBetween(1, 8),
            'fecha_publicacion' => $this->faker->date(),
            'precio' => $this->faker->randomFloat(2, 25, 100),
            'precio_renta' => $this->faker->randomFloat(2, 1, 20),
            'stock' => $this->faker->numberBetween(1, 100),
            'stock_renta' => $this->faker->numberBetween(1, 100),
            // imagen de portada de libros de la biblioteca de pixabay
            // https://pixabay.com/es/images/search/libros/
            'imagen_portada' => $this->faker->randomElement($imagenes),
            'estado' => 1,
        ];
    }
}
