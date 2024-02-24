<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <title>SEKOIA - @yield('title')</title>
        <meta property="og:title" content="Homepage | Sekoia"/>
        <meta property="og:locale" content="en_US"/>
        <link rel="canonical" href="//"/>
        <meta property="og:url" content="//"/>
        <meta name="description" content="Agente de Negociación Liquidación y Compensación."/>
        <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}"/>
        <meta name="theme-color" content="#5540af"/>
        <meta property="og:site_name" content="Sekoia"/>
        <meta property="og:image" content="{{ asset('/img/Fondocompletolinea.jpg') }}"/>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@tailwindmade"/>
        <link crossorigin="crossorigin" href="https://fonts.gstatic.com" rel="preconnect"/>
        <!-- <link as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" rel="preload"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet"/> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans:ital,wght@0,100,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
        <link crossorigin="anonymous" href="{{ asset('/css/custom.css') }}" media="screen" rel="stylesheet"/>
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://kit.fontawesome.com/68e2eb1b2d.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    </head>
    <body :class="{ 'overflow-hidden max-h-screen': mobileMenu }" class="relative" x-data="{ mobileMenu: false }">
        <div id="main" class="relative">
            <div x-data="{triggerNavItem(id) {$scroll(id)}, triggerMobileNavItem(id) {mobileMenu = false; this.triggerNavItem(id)}}">
                <div class="w-full z-50 top-0 py-3 sm:py-5 relative bg-white justify-center">
                    <div class="container flex items-center justify-between">
                        <div>
                            <a href="/">
                                <img src="{{ asset('/img/logo_main.png') }}" class=" xxs:w-28 xs:w-48 sm:w-40 md:w-40 lg:w-44 xl:w-40" alt="logo image"/>
                            </a>
                        </div>
                        <div class="flex justify-right flex-end flex-row items-center">
                            <a href="/seleccionartipocuenta" class="font-body text-color-cucchiara flex items-center justify-center rounded bg-white button-border-color xxs:text-xs xxs:px-1 xs:px-5 md:px-8 lg:px-8 xxs:py-1 xs:py-2 sm:py-2 md:py-2 lg:py-1 xs:text-base lg:text-base font-bold hover:bg-cyan-20">
                                Open Account
                            </a>
                            <a href="/login" class="font-body ml-1 text-color-cucchiara flex items-center justify-center rounded bg-cyan-20 button-border-color xxs:text-xs xxs:px-1 xs:px-5 md:px-8 lg:px-8 xxs:py-1 xs:py-2 sm:py-2 md:py-2 lg:py-1 xs:text-base lg:text-base font-bold hover:bg-white">
                                Log in
                            </a>
                            <div class="hidden lg:block">
                                <ul class="nav-lang flex items-center">
                                    <li class="text-color-cucchiara group pl-6">
                                        <a class="flex items-center justify-center rounded bg-white p-custom-esp-buttom text-base font-bold uppercase hover:bg-cyan-20">
                                            ENG
                                            <i class="bx bx-chevron-down relative -right-2 text-3xl"></i>
                                        </a>
                                        <ul>
                                            <li class="text-color-cucchiara text-base font-bold uppercase w-20">
                                                <a class="hover:bg-cyan-20 flex items-center justify-center rounded pr-41-custom py-1 pl-4" href="/esp">
                                                    ESP
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="block lg:hidden">
                                <button @click="mobileMenu = true">
                                    <i class="bx bx-menu text-4xl text-color-cucchiara"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="container flex items-center justify-between border-menu-line-top mt-8 hidden lg:flex">
                        <div>
                        </div>
                        <div class="hidden lg:block">
                            <ul class="flex items-center pt-5 nav-fondos">
                                <li class="group pl-20">
                                    <a href="/aboutus">
                                        <span @if(request()->is('nosotros')) class="selected-menu-underline hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @else class="hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @endif>About Us</span>
                                    </a>
                                </li>
                                <li class="group pl-20">
                                    <a href="/services">
                                        <span @if(request()->is('servicios')) class="selected-menu-underline hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @else class="hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @endif>Services</span>
                                    </a>
                                </li>
                                <li class="group pl-20 text-color-cucchiara">
                                    <a class="flex items-center justify-center rounded bg-white text-base font-bold hover:bg-cyan-20 px-5 my-1">
                                        Mutual Funds
                                        <i class="bx bx-chevron-down relative -right-2 text-3xl"></i>
                                    </a>
                                    <ul>
                                        <li class="text-color-cucchiara text-base font-bold w-56 my-1">
                                            <a class="bg-white hover:bg-cyan-20 flex items-center justify-start rounded pr-41-custom py-2 pl-5" href="/globalrent">
                                                Global Rent
                                            </a>
                                        </li>
                                        <li class="text-color-cucchiara text-base font-bold w-56 my-1">
                                            <a class="bg-white hover:bg-cyan-20 flex items-center justify-start rounded pr-41-custom py-2 pl-5" href="/globalaction">
                                                Global Action
                                            </a>
                                        </li>
                                        <li class="text-color-cucchiara text-base font-bold w-56 my-1">
                                            <a class="bg-white hover:bg-cyan-20 flex items-center justify-start rounded pr-41-custom py-2 pl-5" href="/fixedrentargentina">
                                                Fixed Rent Argentina
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="group pl-20">
                                    <a href="/research">
                                        <span @if(request()->is('investigacion')) class="selected-menu-underline hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @else class="hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara" @endif>Research</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden">
                            <button @click="mobileMenu = true">
                                <i class="bx bx-menu text-4xl text-black"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden" :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
                    <div class="absolute right-0 min-h-screen w-1/2 bg-quarter py-4 px-8 shadow md:w-1/2">
                        <button class="absolute top-0 right-0 mt-4 mr-4" @click="mobileMenu = false">
                            <img src="{{ asset('/img/icon-close.svg') }}"class="h-10 w-auto" alt="" />
                        </button>
                        <ul class="mt-8 flex flex-col">
                            <li class="py-4">
                                <a href="/aboutus"><span class="cursor-pointer font-body font-semibold text-white">About Us</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/services"><span class="cursor-pointer font-body font-semibold text-white">Services</span></a>
                            </li>
                            <li class="py-4">
                                <a href=""><span class="font-body font-semibold text-white">Mutual Funds</span></a>
                                <ul>
                                    <li class="mt-2 pl-6"><a href="/globalrent" class="cursor-pointer text-white">Renta Global</a></li>
                                    <li class="mt-2 pl-6"><a href="/globalaction" class="cursor-pointer text-white">Global Actions</a></li>
                                    <li class="mt-2 pl-6"><a href="/fixedrentargentina" class="cursor-pointer text-white">Fixed Rent Argentina</a></li>
                                </ul>
                            </li>
                            <li class="py-4">
                                <a href="/research"><span class="cursor-pointer font-body font-semibold text-white">Research</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                @yield('content')
                {{-- contact --}}
                <div class="bg-contact">
                    @if (session('status'))
                        <div class="text-center text-white font-body text-base pt-10">
                            {{ session('status') }}
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="text-center text-white font-body text-base pt-10">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="container bg-contact sm:pl-32 sm:pr-32 xxs:pl-8 xxs:pr-8" id="contact">
                        <div class="relative xs:top-minus-1-2 top-minus-11">
                            <h2 class="text-color-cucchiara text-left font-bolder font-body xxs:text-3xl xs:text-3xl lg:text-5xl text-primary">
                                Contact
                            </h2>
                        </div>
                        <form class="mx-auto w-full pt-10" action="/contact" method="POST" role="form">
                            {{ csrf_field() }}
                            <div class="flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row items-start justify-center">
                                <div class="flex flex-col md:flex-col xxs:w-full mr-4">
                                    <input class="w-full rounded border-white py-5 font-body text-grey-custom" placeholder="Name and Last*" type="text" name="name" id="name"/>
                                    <input class="w-full rounded border-white py-5 font-body text-grey-custom mt-8" placeholder="Email*" type="text" name="email" id="email"/>
                                    <input class="w-full rounded border-white py-5 font-body text-grey-custom mt-8" placeholder="Phone*" type="text" name="phone" id="phone"/>
                                </div>
                                <div class="xs:ml-0 sm:ml-4 xxs:mt-8 xs:mt-8 sm:mt-0 sm:w-full md:w-full">
                                    <textarea class="w-full rounded border-white px-4 py-3 font-body text-grey-custom" placeholder="Message" type="text" name="message" id="message" cols="160" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="flex items-end justify-end pb-20">
                                <button class="mt-6 flex items-center justify-center rounded py-3 font-body text-lg font-bold text-grey-custom underline underline-offset-4">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- end contact --}}
                {{-- map --}}
                <a href="https://maps.app.goo.gl/ZTq82vNgqsSVtb9i6" target="blank">
                    <div class="bg-cover bg-center bg-no-repeat xxs:h-40 xs:h-64 sm:h-64 md:h-72 lg:h-96 xl:w-full border-color-cucchiara border-y-4" style="background-image: url({{ asset('/img/mapa_footer.png')}})"></div>
                </a>
                {{-- end map --}}
                {{-- footer --}}
                <div class="bg-footer">
                    <div class="container py-10 sm:pl-32 sm:pr-32 xxs:pl-8 xxs:pr-8">
                        <div class="flex flex-row">
                            <div class="flex justify-between xxs:items-start xs:items-center sm:items-center md:items-center lg:items-start xxs:flex-col xs:flex-col sm:flex-col md:flex-col lg:flex-row xl:flex-row xxs:w-3/5 xs:w-3/5 sm:w-3/5 md:w-3/5 lg:w-3/4 lg:pr-12 xl:pr-12">
                                <div class="pt-1 xxs:pb-8 xs:pb-8">
                                    <img src="{{ asset('/img/logo_main.png') }}" class="w-48" alt="logo image"/>
                                </div>
                                <div class="mt-2 border-t-footer xxs:pb-8 xs:pb-8">
                                    <a href="/regulaciones">
                                        <div class="pt-1 font-bold">Regulations<br/>Fees and commissions</div>
                                    </a>
                                </div>
                                <div class="pt-1 mt-2 border-t-footer xxs:pb-8 xs:pb-8 xs:ml-4 sm:ml-8 md:ml-8 lg:ml-0">
                                    info@cucchiara.com.ar<br/>Ruta 8 - KM 17500 -<br/>Zonamerica - Edificio EXPLORA -<br/>Of 018, Montevideo, Uruguay<br/>Tel: +598 2518 2340
                                </div>
                            </div>
                            <div class="flex xxs:items-end xs:items-center sm:items-center md:items-center lg:items-start xxs:justify-end xs:justify-end sm:justify-end md:justify-end lg:justify-between xxs:flex-col-reverse xs:flex-col-reverse xs:flex-col-reverse sm:flex-col-reverse md:flex-col-reverse lg:flex-row xl:flex-row xxs:w-2/5 xs:w-2/5 sm:w-2/5 md:w-2/5 lg:w-1/4 lg:pl-4 xl:pl-12">
                                <div class="flex flex-row pt-1 border-t-footer xxs:mt-10 xs:mt-10 sm:mt-10 md:mt-10 lg:mt-2 xs:pb-8">
                                    <i class="fa-brands fa-linkedin text-2xl text-color-cucchiara hover:text-white pr-6"></i>
                                    <i class="fa-brands fa-x-twitter text-2xl text-color-cucchiara hover:text-white"></i>
                                </div>
                                <div class="xs:pb-8">
                                    <img src="{{ asset('/img/logos_Data Fiscal.png') }}" class="w-20" alt="footer_data_fiscal"/>
                                </div>
                            </div>
                        </div>
                        <div class="border-menu-line-footer"></div>
                        <div class="grid justify-items-center items-center  xxs:grid-cols-2 xs:grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 py-2">
                            <div>
                                <a href="https://www.byma.com.ar/" target="_blank">
                                    <div><img src="{{ asset('/img/footer_01.png') }}" class="w-36" alt="footer_01"/></div>
                                </a>
                            </div>
                            <div>
                                <a href="https://cajadevalores.com.ar/" target="_blank">
                                    <div><img src="{{ asset('/img/footer_02.png') }}" class="w-36" alt="footer_02"/></div>
                                </a>
                            </div>
                            <div>
                                <a href="https://www.matbarofex.com.ar/" target="_blank">
                                    <div><img src="{{ asset('/img/footer_03.png') }}" class="w-36" alt="footer_03"/></div>
                                </a>
                            </div>
                            <div>
                                <a href="https://www.mav-sa.com.ar/" target="_blank">
                                    <div><img src="{{ asset('/img/footer_04.png') }}" class="w-36" alt="footer_04"/></div>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-6 border-menu-line-footer">
                            <div>Agente de Valores registro Nro. 2949 Banco Central del Uruguay</div>
                            <div>© 2024 Sekoia Todos los derechos reservados. Diseño y desarollo por Folklore</div>
                        </div>
                    </div>
                </div>
                {{-- end footer --}}
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>
