<footer class="bottom-0 left-0 z-20 w-full p-4 bg-orange-500  shadow md:flex md:items-center md:justify-between md:p-6">

    <ul class="flex flex-wrap items-center mt-3 ms-auto text-sm font-medium text-white sm:mt-0">
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">About</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline" id="open-popup">Contact</a>
        </li>
    </ul>
</footer>

<!-- Modal -->
<div id="modal-login">
    <div class="modal">
        <span id="close-modal-login" class="h-8 z-50 aspect-square rounded-lg text-white flex justify-center items-center  absolute top-5 right-5 bg-orange-500 border-2 border-white cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </span>
        <div class="modal-content">
            <div class="forms">
                <div class="login">
                    <form id="login-form" class="w-full p-8">
                        {{-- csrf --}}
                        @csrf
                        <div class="group-input">
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fa-duotone fa-user w-4 h-4 text-gray-500"></i>
                                </span>
                                <input type="text" id="username" name="username"
                                    class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-orange-500 focus:border-orange-500 block flex-1 min-w-0 w-full text-sm p-2.5"
                                    placeholder="juanperez">
                            </div>
                        </div>
                        <div class="group-input">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900">Contraseña</label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fa-duotone fa-lock w-4 h-4 text-gray-500"></i>
                                </span>
                                <input type="password" id="password" name="password"
                                    class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-orange-500 focus:border-orange-500 block flex-1 min-w-0 w-full text-sm p-2.5"
                                    placeholder="Ingrese su contraseña">
                            </div>
                        </div>
                        {{-- <div class="group-input">
                            <label for="remember" class="inline-flex items-center text-sm font-medium text-gray-900">
                                <input type="checkbox" id="remember" class="text-orange-500 border-gray-300 rounded focus:ring-orange-500" name="remember">
                                <span for="remember" class="ml-2 cursor-pointer">Recuérdame</span>
                            </label>
                        </div> --}}
                        <div class="group-input">
                            <button type="submit" class="w-full px-4 py-2 text-sm font-medium text-white bg-orange-500 rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
                <div class="register">
                    <form action="" class="w-full p-8">
                        <div class="group-input">
                            <label for="register-name"
                                class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                            <input type="text" id="register-name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                placeholder="Juan Pérez">
                        </div>
                        <div class="group-input">
                            <label for="register-email"
                                class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" id="register-email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                placeholder="mail@mail.com">
                        </div>
                        <div class="group-input">
                            <label for="register-password"
                                class="block mb-2 text-sm font-medium text-gray-900">Contraseña</label>
                            <input type="password" id="register-password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                placeholder="Ingrese su contraseña">
                        </div>
                        <div class="group-input">
                            <label for="register-password-confirm"
                                class="block mb-2 text-sm font-medium text-gray-900">Confirmar contraseña</label>
                            <input type="password" id="register-password-confirm"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                placeholder="Ingrese su contraseña">
                        </div>
                        <div class="group-input">
                            <label for="register-terms"
                                class="inline-flex items-center text-sm font-medium text-gray-900">
                                <input type="checkbox" id="register-terms"
                                    class="text-orange-500 border-gray-300 rounded focus:ring-orange-500"
                                    name="register-terms">
                                <span for="register-terms" class="ml-2 cursor-pointer">Acepto los <a href="#"
                                        class="underline">términos y condiciones</a></span>
                            </label>
                        </div>

                    </form>
                </div>
            </div>
            <div class="forms-toggle">
                <div class="toggle-login-layout bg-orange-500">
                    <button
                        class="toggle-login h-8 px-4 rounded-lg text-orange-500 border-2 border-orange-500 bg-white ring-white hover:ring-offset-1 hover:ring-2">Iniciar sesión</button>
                </div>
                <div class="toggle-register-layout bg-orange-500">
                    <button
                        class="toggle-register h-8 px-4 rounded-lg text-orange-500 border-2 border-orange-500 bg-white ring-white hover:ring-offset-1 hover:ring-2">Registrarte</button>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #modal-login {
        position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        opacity: 0;
        /* display: none; */
        backdrop-filter: blur(4px);
        background-color: rgb(0 0 0 / 0.3);
    }

    #modal-login.show {
        opacity: 1;
        z-index: 9999;
        display: block;
    }

    #modal-login .modal {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 1024px;
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        transition: transform .5s ease-in-out;
    }

    #modal-login .modal .modal-content {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    #modal-login .modal .modal-content .forms,
    #modal-login .modal .modal-content .forms-toggle {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    #modal-login .modal .modal-content .forms .login,
    #modal-login .modal .modal-content .forms .register {
        width: 50%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    #modal-login .modal .modal-content .forms .group-input {
        width: 100%;
        margin-bottom: 1rem
    }

    #modal-login .modal .modal-content .forms-toggle {
        width: 100%;
        height: 100%;
        display: flex;
        position: absolute;
        top: 0;
        left: 0;
        transition: clip-path .5s ease-in-out;
        clip-path: polygon(50% 0, 100% 0, 100% 100%, 50% 100%);
    }

    #modal-login .modal .modal-content .forms-toggle .toggle-login-layout,
    #modal-login .modal .modal-content .forms-toggle .toggle-register-layout {
        width: 50%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
{{-- jquery.reveal.js --}}

<script>
    jQuery(document).ready(function($) {
        jQuery('#open-popup').on("click", (e) => {
            e.preventDefault()
            jQuery('#modal-login').toggleClass('show')
        })

        jQuery('#close-modal-login').on("click", (e) => {
            e.preventDefault()
            jQuery('#modal-login').toggleClass('show')
        })

        jQuery('.toggle-login').on("click", (e) => {
            e.preventDefault()
            toggle_login()
        })

        jQuery('.toggle-register').on("click", (e) => {
            e.preventDefault()
            toggle_register()
        })

        // login
        jQuery('#login-form').on("submit", (e) => {
            e.preventDefault()
            close_modal_login()
            let username = jQuery('#username').val()
            let password = jQuery('#password').val()
            jQuery.ajax({
                url: "{{ route('login') }}",
                type: "POST",
                data: {
                    username,
                    password,
                },
                success: function(res) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Bienvenido',
                        text: res.message,
                    })
                    setTimeout(() => {
                        location.reload()
                    }, 2000);
                },
                error: function(err) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: err.responseJSON.message,
                    })
                }
            })
        })
    });

    function show_modal_login() {
        jQuery('#modal-login').toggleClass('show')
    }

    function toggle_login() {
        jQuery('.forms-toggle').css({
            'clip-path': 'polygon(50% 0, 100% 0, 100% 100%, 50% 100%)'
        })
    }

    function toggle_register() {
        jQuery('.forms-toggle').css({
            'clip-path': 'polygon(0 0, 50% 0, 50% 100%, 0% 100%)'
        })
    }

    function close_modal_login() {
        jQuery('#modal-login').toggleClass('show')
    }
</script>
