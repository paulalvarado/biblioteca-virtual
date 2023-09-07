@extends('plantillas.plantilla')
@section('titulo')
    Etiqueta #{{ $etiqueta->nombre_etiqueta }} | Biblioteca Virtual
@endsection
@section('contenido')
    <h1 class="text-2xl font-bold">Libros con etiqueta #{{ $etiqueta->nombre_etiqueta }}</h1>
    <div class="my-6 pagination-container"></div>
    <div class="data-container grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">
        <div role="status"
            class="w-full space-y-8 animate-pulse md:space-y-0 md:space-x-8 md:flex md:items-center rounded-lg shadow">
            <div class="flex items-center justify-center w-full h-96 md:h-80 bg-gray-300 rounded md:w-96">
                <svg class="w-10 h-10 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 18">
                    <path
                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                </svg>
            </div>
            <div class="w-full p-6">
                <div class="h-2.5 bg-gray-200 rounded-full w-48 mb-4"></div>
                <div class="h-2 bg-gray-200 rounded-full max-w-[480px] mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full max-w-[440px] mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full max-w-[460px] mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full max-w-[360px]"></div>
            </div>
            <span class="sr-only">Loading...</span>
        </div>
        <div role="status"
            class="w-full space-y-8 animate-pulse md:space-y-0 md:space-x-8 md:flex md:items-center rounded-lg shadow">
            <div class="flex items-center justify-center w-full h-96 md:h-80 bg-gray-300 rounded md:w-96">
                <svg class="w-10 h-10 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 18">
                    <path
                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                </svg>
            </div>
            <div class="w-full p-6">
                <div class="h-2.5 bg-gray-200 rounded-full w-48 mb-4"></div>
                <div class="h-2 bg-gray-200 rounded-full max-w-[480px] mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full max-w-[440px] mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full max-w-[460px] mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full max-w-[360px]"></div>
            </div>
            <span class="sr-only">Loading...</span>
        </div>
        <div role="status"
            class="w-full space-y-8 animate-pulse md:space-y-0 md:space-x-8 md:flex md:items-center rounded-lg shadow">
            <div class="flex items-center justify-center w-full h-96 md:h-80 bg-gray-300 rounded md:w-96">
                <svg class="w-10 h-10 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 18">
                    <path
                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                </svg>
            </div>
            <div class="w-full p-6">
                <div class="h-2.5 bg-gray-200 rounded-full w-48 mb-4"></div>
                <div class="h-2 bg-gray-200 rounded-full max-w-[480px] mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full max-w-[440px] mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full max-w-[460px] mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full max-w-[360px]"></div>
            </div>
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <script>
        jQuery('.pagination-container').pagination({
            dataSource: '{{ route('libros.list_x_etiqueta', ['tag' => $etiqueta->id_etiqueta]) }}',
            callback: function(data, pagination) {
                $('.btn-pagination').click(function() {
                    console.log('click');
                    // verifica si tiene la clase current
                    if ($(this).hasClass('current')) {
                        return false;
                    }
                    jQuery('.data-container').html(
                        `<div role="status"
                            class="w-full space-y-8 animate-pulse md:space-y-0 md:space-x-8 md:flex md:items-center rounded-lg shadow">
                            <div class="flex items-center justify-center w-full h-96 md:h-80 bg-gray-300 rounded md:w-96">
                                <svg class="w-10 h-10 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 18">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                </svg>
                            </div>
                            <div class="w-full p-6">
                                <div class="h-2.5 bg-gray-200 rounded-full w-48 mb-4"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[480px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[440px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[460px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[360px]"></div>
                            </div>
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div role="status"
                            class="w-full space-y-8 animate-pulse md:space-y-0 md:space-x-8 md:flex md:items-center rounded-lg shadow">
                            <div class="flex items-center justify-center w-full h-96 md:h-80 bg-gray-300 rounded md:w-96">
                                <svg class="w-10 h-10 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 18">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                </svg>
                            </div>
                            <div class="w-full p-6">
                                <div class="h-2.5 bg-gray-200 rounded-full w-48 mb-4"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[480px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[440px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[460px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[360px]"></div>
                            </div>
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div role="status"
                            class="w-full space-y-8 animate-pulse md:space-y-0 md:space-x-8 md:flex md:items-center rounded-lg shadow">
                            <div class="flex items-center justify-center w-full h-96 md:h-80 bg-gray-300 rounded md:w-96">
                                <svg class="w-10 h-10 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 18">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                </svg>
                            </div>
                            <div class="w-full p-6">
                                <div class="h-2.5 bg-gray-200 rounded-full w-48 mb-4"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[480px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[440px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[460px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[360px]"></div>
                            </div>
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div role="status"
                            class="w-full space-y-8 animate-pulse md:space-y-0 md:space-x-8 md:flex md:items-center rounded-lg shadow">
                            <div class="flex items-center justify-center w-full h-96 md:h-80 bg-gray-300 rounded md:w-96">
                                <svg class="w-10 h-10 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 18">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                </svg>
                            </div>
                            <div class="w-full p-6">
                                <div class="h-2.5 bg-gray-200 rounded-full w-48 mb-4"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[480px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[440px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[460px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[360px]"></div>
                            </div>
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div role="status"
                            class="w-full space-y-8 animate-pulse md:space-y-0 md:space-x-8 md:flex md:items-center rounded-lg shadow">
                            <div class="flex items-center justify-center w-full h-96 md:h-80 bg-gray-300 rounded md:w-96">
                                <svg class="w-10 h-10 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 18">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                </svg>
                            </div>
                            <div class="w-full p-6">
                                <div class="h-2.5 bg-gray-200 rounded-full w-48 mb-4"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[480px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[440px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[460px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[360px]"></div>
                            </div>
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div role="status"
                            class="w-full space-y-8 animate-pulse md:space-y-0 md:space-x-8 md:flex md:items-center rounded-lg shadow">
                            <div class="flex items-center justify-center w-full h-96 md:h-80 bg-gray-300 rounded md:w-96">
                                <svg class="w-10 h-10 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 18">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                </svg>
                            </div>
                            <div class="w-full p-6">
                                <div class="h-2.5 bg-gray-200 rounded-full w-48 mb-4"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[480px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[440px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[460px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full max-w-[360px]"></div>
                            </div>
                            <span class="sr-only">Loading...</span>
                        </div>`
                        );
                });
                // template method of yourself
                var html = template(data);
                jQuery('.data-container').html(html);
            },
            afterPageOnClick: function() {

            },
            locator: 'data',
            totalNumberLocator: function(response) {
                // you can return totalNumber by analyzing response content
                return response.paginacion.total;
            },
            pageSize: 9,
            alias: {
                pageNumber: 'page',
                pageSize: 'limit'
            },
            ulClassName: 'flex items-center -space-x-px h-8 text-sm',
            pageClassName: 'btn-pagination flex items-center justify-center px-3 h-8 leading-tight text-gray-500 border border-gray-300 hover:bg-orange-500 hover:text-white hover:border-orange-500 cursor-pointer',
            activeClassName: 'z-10 current text-white border border-orange-500 bg-orange-500 hover:bg-orange-500 hover:text-white',
            prevClassName: 'flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg cursor-pointer',
            nextClassName: 'flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg cursor-pointer',
            // clase para los botontes ...
            classPrefix: 'flex items-center justify-center px-3 h-8 leading-tight border border-gray-500',
        })


        function template(data) {
            var html = '';
            jQuery.each(data, function(index, libro) {
                html += `
                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row w-full hover:bg-gray-100">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-full md:w-48 md:rounded-none md:rounded-l-lg" src="${libro.imagen_portada}" alt="Image">
                    <div class="flex flex-col justify-between p-4 leading-normal w-full">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            ${libro.nombre_libro}
                        </h5>
                        <p class="mb-3 font-normal text-xs text-gray-700">
                            <i class="fa-duotone fa-user"></i> ${libro.autor.nombre_autor}
                        </p>
                        <p class="mb-3 font-bold py-1 px-2 text-xs text-gray-700 bg-gray-200 rounded-lg w-fit">
                            ${libro.generos[0].nombre_genero}
                        </p>
                        <p class="mb-3 font-normal text-sm text-gray-700">
                            ${libro.descripcion}
                        </p>
                        <div class="flex flex-wrap">
                            <button class="flex items-center justify-center w-min text-orange-500 hover:text-white focus:text-white border border-orange-500 h-8 aspect-square bg-white hover:bg-orange-500 focus:bg-orange-500 rounded-full "><i class="fa-light fa-heart"></i></button>
                            <button class="ms-3 flex items-center justify-center w-auto px-4 text-orange-500 hover:text-white focus:text-white border border-orange-500 h-8  bg-white hover:bg-orange-500 focus:bg-orange-500 rounded-full ">Ver más</button>
                        </div>
                    </div>
                </a>
            `;
            });
            return html;
        }
    </script>
@endsection
