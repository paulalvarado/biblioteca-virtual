{{-- Buscador --}}
<div class="w-full">
    {{-- input search --}}
    <div class="w-full flex justify-center items-center relative">
        <input type="text"
            class="w-full h-14 rounded-lg border-2 border-gray-300 focus:outline-none focus:border-orange-500 focus:ring-orange-500 px-4"
            placeholder="Buscar">

        <button
            class="w-10 h-10 rounded-lg bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:bg-orange-600 absolute right-2">
            <i class="fa-solid fa-search"></i>
        </button>
    </div>

    {{-- generos --}}
    <div class="h-auto my-3 flex">
        <button id="arrow-left" class="me-3 h-8 aspect-square flex justify-center items-center bg-orange-500 hover:bg-orange-600 text-white rounded-lg">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <ul class="flex overflow-hidden grow" id="enlaces">
            @foreach ($etiquetas as $item)
                <li class="me-3 mb-3">
                    <a href="#" class="flex justify-center items-center border border-gray-300 hover:drop-shadow-lg hover:border-orange-300 px-3 py-1 rounded-lg drop-shadow-sm bg-white">
                        <i class="fa-regular fa-hashtag"></i> {{ $item->nombre_etiqueta }}
                    </a>
                </li>
            @endforeach
        </ul>
        <button id="arrow-right" class="ms-3 h-8 aspect-square flex justify-center items-center bg-orange-500 hover:bg-orange-600 text-white rounded-lg">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#enlaces').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            variableWidth: true,
        });

        // boton de flecha izquierda
        $('#arrow-left').click(function() {
            $('#enlaces').slick('slickPrev');
        });

        // boton de flecha derecha
        $('#arrow-right').click(function() {
            $('#enlaces').slick('slickNext');
        });
    });
</script>
