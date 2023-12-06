@extends('layouts.principal')

@section('title', 'Fondos')

@section('content')
    {{-- slide --}}
    <div style="background-image: url({{ asset('/img/fondoresearch.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
        <div class="container flex items-center justify h-full">
            <div class="flex justify-center items-center w-full">
                <h1 class="font-body text-white text-shadow font-bold text-3xl">Fondos</h1>
            </div>
            <p class="font-body text-white text-center text-shadow xxs:text-xxs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">

            </p>
            <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
        </div>
    </div>
    {{-- end slide --}}
    {{-- sub menu --}}
    <div class="container py-12 flex items-center justify-center">
        <ul class="flex items-center pt-5">
            <li class="mx-8">
                <a href="/rentaglobal">
                    <span class="hover-underline-animation cursor-pointer font-body font-bold text-color-cucchiara">Renta global</span>
                </a>
            </li>
            <li class="mx-8">
                <a href="/rentafijaargentina">
                    <span class="hover-underline-animation cursor-pointer font-body font-bold text-color-cucchiara">Renta fija Argentina</span>
                </a>
            </li>
            <li class="mx-8">
                <a href="/accionesglobales">
                    <span class="hover-underline-animation cursor-pointer font-body font-bold text-color-cucchiara">Acciones globales</span>
                </a>
            </li>
        </ul>
    </div>
    {{-- end sub menu --}}
    {{-- body --}}
    <div class="container">
        <div class="flex flex-col justify-center items-center w-full py-10">
            <h1 class="font-body text-color-cucchiara font-bold text-3xl py-10">Renta Global</h1>
            <p class="font-body text-color-cucchiara text-center xxs:text-xxs xs:text-base sm:text-1xl md:text-1xl lg:text-1xl xl:text-1xl">
                CyC Renta Global es una Nota Estructurada, un instrumento similar a un fondo de inversión cuya administración de cartera está a cargo de Sekoia Agente de Valores S.A. El fondo se compone mayormente de títulos de renta fija corporativa y soberana. En ciertos contextos, podrá tener en cartera acciones preferidas, bonos perpetuos y productos estructurados para buscar mayores retornos, siempre respetando los parámetros de diversificación y riesgos establecidos. Prioriza la búsqueda de valor en emisores con buena calidad crediticia. Diversifica su cartera geográficamente y por sectores. No puede incluir emisores Argentinos ni títulos con Ley Argentina. No tiene un objetivo de rendimiento y duration específicos, sino que mantiene flexibilidad para adecuarse a diferentes contextos globales
            </p>
        </div>
    </div>
    {{-- end body --}}
    {{-- start icons --}}
    <div class="bg-white">
        <div class="container py-16 md:py-20">
            <div class="mx-auto bg-white xxs:py-12 xs:py-20 sm:py-16 md:py-12 lg:py-20 xl:py-20">
                <div class="grid grid-cols-5 gap-0 content-start">
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_01.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_01"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_02.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_02"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_03.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_03"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_04.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_04"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_05.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_05"/>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-5 gap-0 justify-content items-center mt-4">
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Tipo de fondo
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Renta fija
                        </h4>
                    </div>
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Moneda
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Dólar
                        </h4>
                    </div>
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Plazo de rescate
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">

                        </h4>
                    </div>
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Horizonte
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Mediano plazo.
                        </h4>
                    </div>
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Perfil de inversor
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Moderado
                        </h4>
                    </div>
                </div>
            </div>
            <h3 class="text-center font-body text-2xl font-bold sm:text-2xl lg:text-2xl text-color-cucchiara">
                Información del Fondo
            </h3>
        </div>
    </div>
    {{-- end icons --}}
    {{-- renta fija argentina --}}
    <div class="bg-primary">
        <div class="container flex flex-col items-center justify-center py-20">
            <div>
                <h2 class="font-body font-bold text-white xxs:pb-8 xs:text-base sm:text-2xl md:text-4xl lg:text-5xl ">
                    Renta Fija Argentina
                </h2>
            </div>
            <div>
                <p class="font-body text-white text-center xxs:text-xxs xs:text-base sm:text-1xl md:text-1xl lg:text-1xl xl:text-1xl">
                    CyC Renta Fija Argentina es una Nota Estructurada, un instrumento similar a un fondo de inversión cuya administración de cartera está a cargo de Sekoia Agente de Valores SA. CYC Renta Fija Argentina buscará una atractiva relación de riesgo, rendimiento y plazo principalmente a través de instrumentos de renta fija en dólares de emisores de la Argentina. Tendrá mayormente títulos de renta fija corporativa pero también podrá poseer (siempre respetando los parámetros de diversificación y riesgos establecidos) renta fija soberana o subsoberana. El fondo no tiene un objetivo de rendimiento y duration específico, sino que será flexible para adecuarse a los diferentes contextos.
                </p>
            </div>
        </div>
    </div>
    {{-- end renta fija argentina --}}
    {{-- start icons --}}
    <div class="bg-white">
        <div class="container py-16 md:py-20">
            <div class="mx-auto bg-white xxs:py-12 xs:py-20 sm:py-16 md:py-12 lg:py-20 xl:py-20">
                <div class="grid grid-cols-5 gap-0 content-start">
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_01.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_01"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_02.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_02"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_03.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_03"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_04.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_04"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_05.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_05"/>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-5 gap-0 justify-content items-center mt-4">
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Tipo de fondo
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Renta fija
                        </h4>
                    </div>
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Moneda
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Dólar
                        </h4>
                    </div>
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Plazo de rescate
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">

                        </h4>
                    </div>
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Horizonte
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Mediano plazo.
                        </h4>
                    </div>
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Perfil de inversor
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Moderado
                        </h4>
                    </div>
                </div>
            </div>
            <h3 class="text-center font-body text-2xl font-bold sm:text-2xl lg:text-2xl text-color-cucchiara">
                Información del Fondo
            </h3>
        </div>
    </div>
    {{-- end icons --}}
    {{-- acciones globales --}}
    <div class="bg-primary">
        <div class="container flex flex-col items-center justify-center py-20">
            <div>
                <h2 class="font-body font-bold text-white xxs:pb-8 xs:text-base sm:text-2xl md:text-4xl lg:text-5xl ">
                    Acciones Globales
                </h2>
            </div>
            <div>
                <p class="font-body text-white text-center xxs:text-xxs xs:text-base sm:text-1xl md:text-1xl lg:text-1xl xl:text-1xl">
                    CyC Acciones Globales es una Nota Estructurada, un instrumento similar a un fondo de inversión cuya administración de cartera está a cargo de Sekoia Agente de Valores SA. El fondo se compone de acciones de compañías que cotizan en la bolsa de NY y de ETFs o Mutual Funds de renta variable que replican el avance de una determinada economía y/o sector, tanto de países emergentes como desarrollados. A su vez, CyC Acciones Global podrá contener instrumentos de cobertura contra el riesgo de mercado como el oro, bitcoin u opciones sobre activos subyacentes en cartera para una mejor administración del riesgo. Asimismo, en determinados contextos de mercado, el fondo podrá disponer de liquidez en cartera. Se diversifica la cartera geográficamente y por sectores combinando renta variable de compañías de crecimiento y de valor.
                </p>
            </div>
        </div>
    </div>
    {{-- end acciones globales --}}
    {{-- start icons --}}
    <div class="bg-white">
        <div class="container py-16 md:py-20">
            <div class="mx-auto bg-white xxs:py-12 xs:py-20 sm:py-16 md:py-12 lg:py-20 xl:py-20">
                <div class="grid grid-cols-5 gap-0 content-start">
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_01.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_01"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_02.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_02"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_03.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_03"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_04.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_04"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/fondo_05.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="fondo_05"/>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-5 gap-0 justify-content items-center mt-4">
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Tipo de fondo
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Renta fija
                        </h4>
                    </div>
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Moneda
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Dólar
                        </h4>
                    </div>
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Plazo de rescate
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">

                        </h4>
                    </div>
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Horizonte
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Mediano plazo.
                        </h4>
                    </div>
                    <div class="">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Perfil de inversor
                        </h4>
                        <h4 class="text-color-cucchiara font-body text-center xxs:text-xxs xs:text-base lg:text-xl">
                            Moderado
                        </h4>
                    </div>
                </div>
            </div>
            <h3 class="text-center font-body text-2xl font-bold sm:text-2xl lg:text-2xl text-color-cucchiara">
                Información del Fondo
            </h3>
        </div>
    </div>
    {{-- end icons --}}
    {{-- start search --}}
    <div class="bg-primary">
        <div class="container">
            <div class="pt-8">
                <h2 class="text-white text-left font-header text-2xl font-bolder">
                    Buscar Informes
                </h2>
            </div>
            <div class="pt-16 xxs:text-center xs:text-left">
                <a class="cursor-pointer rounded-md bg-white text-color-cucchiara text-xl p-4 xs:pl-6 lg:pl-14" id="all-informs">
                    Todos los reportes
                    <i class="bx bx-chevron-down relative -right-2 text-3xl align-middle xs:pl-14 lg:pl-28"></i>
                </a>
            </div>
            <div class="h-28 block" id="space"></div>
            <div class="hidden grid pb-20 pt-6 xxs:grid-cols-1 xs:grid-cols-2 xs:gap-1 xxs:place-items-center xs:place-items-start" id="menu">
                <div>
                    <nav class="menu xxs:w-56 xs:w-56 sm:w-56 md:w-56 lg:w-96 xl:w-96">
                        <ul class="text-color-cucchiara">
                            <li>
                                <a class="submenu rounded-t-md cursor-pointer py-3 xxs:pl-4 xs:pl-6 lg:pl-14 text-xl" id="01">Coyuntura Argentina</a>
                                <ul class="ul-menu right-scroll hide-sub-menu text-center" id="sub-menu-01">
                                    <li class="finalmenu" id="001"><a class="py-3.5 cursor-pointer">Charlas y Presentaciones</a></li>
                                    <li class="finalmenu" id="002"><a class="py-3.5 cursor-pointer">Macro Local</a></li>
                                    <li class="finalmenu" id="003"><a class="py-3.5 cursor-pointer">Bonos Soberanos</a></li>
                                    <li class="finalmenu" id="004"><a class="py-3.5 cursor-pointer">Instrumentos en Pesos</a></li>
                                    <li class="finalmenu" id="005"><a class="py-3.5 cursor-pointer">Bonos Provinciales</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu cursor-pointer py-3 xxs:pl-4 xs:pl-6 lg:pl-14 text-xl" id="02">Coyuntura Global</a>
                                <ul class="ul-menu right-scroll hide-sub-menu text-center" id="sub-menu-02">
                                    <li class="finalmenu" id="006"><a class="py-3.5 cursor-pointer">Charlas y Presentaciones</a></li>
                                    <li class="finalmenu" id="007"><a class="py-3.5 cursor-pointer">Macro Global</a></li>
                                    <li class="finalmenu" id="008"><a class="py-3.5 cursor-pointer">Renta Variable Global</a></li>
                                    <li class="finalmenu" id="009"><a class="py-3.5 cursor-pointer">Renta Fija Global</a></li>
                                    <li class="finalmenu" id="010"><a class="py-3.5 cursor-pointer">Commodities</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu cursor-pointer py-3 xxs:pl-4 xs:pl-6 lg:pl-14 text-xl" id="03">Bonos Corporativos</a>
                                <ul class="ul-menu right-scroll hide-sub-menu text-center" id="sub-menu-03">
                                    <li class="finalmenu" id="011"><a class="py-3.5 cursor-pointer">Raghsa</a></li>
                                    <li class="finalmenu" id="012"><a class="py-3.5 cursor-pointer">Pampa Energía</a></li>
                                    <li class="finalmenu" id="013"><a class="py-3.5 cursor-pointer">Aeropuertos Argentina 2000</a></li>
                                    <li class="finalmenu" id="014"><a class="py-3.5 cursor-pointer">Capex</a></li>
                                    <li class="finalmenu" id="015"><a class="py-3.5 cursor-pointer">Transportadora de Gas del Sur</a></li>
                                    <li class="finalmenu" id="016"><a class="py-3.5 cursor-pointer">Arcor</a></li>
                                    <li class="finalmenu" id="017"><a class="py-3.5 cursor-pointer">Compañía General de Combustibles</a></li>
                                    <li class="finalmenu" id="018"><a class="py-3.5 cursor-pointer">Telecom Argentina</a></li>
                                    <li class="finalmenu" id="019"><a class="py-3.5 cursor-pointer">Genneia</a></li>
                                    <li class="finalmenu" id="020"><a class="py-3.5 cursor-pointer">Aluar</a></li>
                                    <li class="finalmenu" id="021"><a class="py-3.5 cursor-pointer">Pan American Energy</a></li>
                                    <li class="finalmenu" id="022"><a class="py-3.5 cursor-pointer">Tecpetrol</a></li>
                                    <li class="finalmenu" id="023"><a class="py-3.5 cursor-pointer">MSU Energy</a></li>
                                    <li class="finalmenu" id="024"><a class="py-3.5 cursor-pointer">YPF</a></li>
                                    <li class="finalmenu" id="025"><a class="py-3.5 cursor-pointer">Corporativos Argentinos</a></li>
                                    <li class="finalmenu" id="026"><a class="py-3.5 cursor-pointer">Corporativos Extranjeros</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu cursor-pointer py-3 xxs:pl-4 xs:pl-6 lg:pl-14 text-xl" id="04">Renta Variable</a>
                                <ul class="ul-menu right-scroll hide-sub-menu text-center" id="sub-menu-04">
                                    <li class="finalmenu" id="027"><a class="py-3.5 cursor-pointer">Ternium Argentina</a></li>
                                    <li class="finalmenu" id="028"><a class="py-3.5 cursor-pointer">Tenaris</a></li>
                                    <li class="finalmenu" id="029"><a class="py-3.5 cursor-pointer">Pampa Energía</a></li>
                                    <li class="finalmenu" id="030"><a class="py-3.5 cursor-pointer">Loma Negra</a></li>
                                    <li class="finalmenu" id="031"><a class="py-3.5 cursor-pointer">Transportadora de Gas del Sur</a></li>
                                    <li class="finalmenu" id="032"><a class="py-3.5 cursor-pointer">Aluar</a></li>
                                    <li class="finalmenu" id="033"><a class="py-3.5 cursor-pointer">Bioceres</a></li>
                                    <li class="finalmenu" id="034"><a class="py-3.5 cursor-pointer">Richmond</a></li>
                                    <li class="finalmenu" id="035"><a class="py-3.5 cursor-pointer">YPF</a></li>
                                    <li class="finalmenu" id="036"><a class="py-3.5 cursor-pointer">Bancos Locales</a></li>
                                    <li class="finalmenu" id="037"><a class="py-3.5 cursor-pointer">Acciones Argentinas</a></li>
                                    <li class="finalmenu" id="038"><a class="py-3.5 cursor-pointer">Acciones Extranjeras</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu rounded-b-md cursor-pointer py-3 xxs:pl-4 xs:pl-6 lg:pl-14 text-xl" id="05">Fondos</a>
                                <ul class="ul-menu right-scroll hide-sub-menu text-center rounded-b-md" id="sub-menu-05">
                                    <li class="finalmenu" id="039"><a class="py-3.5 cursor-pointer">Dolares Renta Fija</a></li>
                                    <li class="finalmenu" id="040"><a class="py-3.5 cursor-pointer">Pesos Renta Fija</a></li>
                                    <li class="finalmenu" id="041"><a class="py-3.5 cursor-pointer">Renta Mixta</a></li>
                                    <li class="finalmenu" id="042"><a class="py-3.5 cursor-pointer">Liquidez</a></li>
                                    <li class="finalmenu" id="043"><a class="py-3.5 cursor-pointer">Renta Fija USD</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="flex text-color-cucchiara xxs:mt-10">
                    <!-- Coyuntura Argentina -->
                    <div class="flex flex-col hidden list" id="lista-001">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en charlas</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en charlas</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en charlas</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-002">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en macro</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en macro</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en macro</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-003">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en bonos</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en bonos</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en bonos</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-004">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en instrumentos</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en instrumentos</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en instrumentos</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-005">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en provinciales</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en provinciales</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en provinciales</a>
                    </div>
                    <!-- Coyuntura Global -->
                    <div class="flex flex-col hidden list" id="lista-006">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en presentaciones</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en presentaciones</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en presentaciones</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-007">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en global</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en global</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en global</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-008">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en variable</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en variable</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en variable</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-009">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en fija</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en fija</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en fija</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-010">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en commodities</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en commodities</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en commodities</a>
                    </div>
                    <!-- Bonos Corporativos -->
                    <div class="flex flex-col hidden list" id="lista-011">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Raghsa</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Raghsa</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Raghsa</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-012">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pampa Energía</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pampa Energía</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pampa Energía</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-013">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aeropuertos Argentina 2000</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aeropuertos Argentina 2000</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aeropuertos Argentina 2000</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-014">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Capex</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Capex</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Capex</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-015">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Transportadora de Gas del Sur</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Transportadora de Gas del Sur</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Transportadora de Gas del Sur</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-016">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Arcor</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Arcor</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Arcor</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-017">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Compañía General de Combustibles</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Compañía General de Combustibles</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Compañía General de Combustibles</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-018">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Telecom Argentina</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Telecom Argentina</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Telecom Argentina</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-019">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Genneia</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Genneia</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Genneia</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-020">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aluar</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aluar</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aluar</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-021">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pan American Energy</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pan American Energy</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pan American Energy</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-022">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Tecpetrol</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Tecpetrol</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Tecpetrol</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-023">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en MSU Energy</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en MSU Energy</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en MSU Energy</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-024">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en YPF</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en YPF</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en YPF</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-025">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Corporativos Argentinos</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Corporativos Argentinos</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Corporativos Argentinos</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-026">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Corporativos Extranjeros</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Corporativos Extranjeros</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Corporativos Extranjeros</a>
                    </div>
                    <!-- Renta Variable -->
                    <div class="flex flex-col hidden list" id="lista-027">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Ternium Argentina</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Ternium Argentina</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Ternium Argentina</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-028">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Tenaris</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Tenaris</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Tenaris</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-029">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pampa Energía</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pampa Energía</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pampa Energía</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-030">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Loma Negra</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Loma Negra</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Loma Negra</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-031">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Transportadora de Gas del Sur</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Transportadora de Gas del Sur</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Transportadora de Gas del Sur</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-032">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aluar</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aluar</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aluar</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-033">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Bioceres</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Bioceres</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Bioceres</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-034">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Richmond</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Richmond</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Richmond</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-035">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en YPF</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en YPF</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en YPF</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-036">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Bancos Locales</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Bancos Locales</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Bancos Locales</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-037">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Acciones Argentinas</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Acciones Argentinas</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Acciones Argentinas</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-038">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Acciones Extranjeras</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Acciones Extranjeras</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Acciones Extranjeras</a>
                    </div>
                    <!-- Fondos -->
                    <div class="flex flex-col hidden list" id="lista-039">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Dolares Renta Fija</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Dolares Renta Fija</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Dolares Renta Fija</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-040">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pesos Renta Fija</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pesos Renta Fija</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pesos Renta Fija</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-041">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Renta Mixta</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Renta Mixta</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Renta Mixta</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-042">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Liquidez</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Liquidez</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Liquidez</a>
                    </div>
                    <div class="flex flex-col hidden list" id="lista-043">
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Renta Fija USD</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Renta Fija USD</a>
                        <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 text-secundary h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Renta Fija USD</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end search --}}
    <div class="h-[10rem]"></div>
    <script src="{{ asset('/js/main.js')}}"></script>
@endsection
