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
    @if (isset($etiquetas))
        <div class="h-auto my-3 flex">
            <button id="arrow-left"
                class="me-3 h-8 aspect-square flex justify-center items-center bg-orange-500 hover:bg-orange-600 text-white rounded-lg">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <ul class="flex overflow-hidden grow" id="enlaces">
                @foreach ($etiquetas as $item)
                    <li class="me-3 mb-3">
                        @if (isset($etiqueta) && $etiqueta->id_etiqueta == $item->id_etiqueta)
                            <a href="{{ route('frontend.index') }}"
                                class="flex justify-center items-center border border-orange-500 text-white hover:drop-shadow-lg px-3 py-1 rounded-lg drop-shadow-sm bg-orange-500">
                                <i class="fa-regular fa-hashtag"></i> {{ $item->nombre_etiqueta }}
                            </a>
                            <script>
                                let id_etiqueta = {{ $item->id_etiqueta }};
                            </script>
                        @else
                            <a href="{{ route('frontend.libros_etiqueta', $item->id_etiqueta) }}"
                                class="flex justify-center items-center border border-gray-300 hover:drop-shadow-lg hover:border-orange-500 hover:bg-orange-500 hover:text-white px-3 py-1 rounded-lg drop-shadow-sm bg-white">
                                <i class="fa-regular fa-hashtag"></i> {{ $item->nombre_etiqueta }}
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
            <button id="arrow-right"
                class="ms-3 h-8 aspect-square flex justify-center items-center bg-orange-500 hover:bg-orange-600 text-white rounded-lg">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    @endif
</div>
@if (isset($etiquetas))
    <script>
        $(document).ready(function() {

            if (typeof id_etiqueta !== 'undefined') {
                id_etiqueta = id_etiqueta - 1;
                // guardar en localstorage
                localStorage.setItem('id_etiqueta', id_etiqueta);
            } else {
                id_etiqueta = 0;
            }
            $('#enlaces').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                variableWidth: true,
                initialSlide: parseInt(localStorage.getItem('id_etiqueta')),
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            variableWidth: true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            variableWidth: true,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            variableWidth: true,
                        }
                    }
                ]
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
@endif
