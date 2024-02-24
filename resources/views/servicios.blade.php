@extends('layouts.principal')

@section('title', 'Servicios')

@section('content')
    {{-- slide --}}
    <div>
        <div style="background-image: url({{ asset('/img/services.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xxs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    Cucchiara forma parte de la comunidad inversora local como socio de la Cámara de Agentes de Bolsa y tiene presencia internacional como asociado del EMTA, comunidad internacional de inversión enfocada en el desarrollo de mercados emergentes.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-secondary">
            <div class="container xxs:px-20 lg:px-32 xl:px-56">
                <div class="flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="text-white xs:pr-3 lg:pr-20">
                        <div class="text-xl font-bold text-right max-w-3xl">
                            Asesoramiento<br/>de carteras
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-right max-w-3xl pt-5" >
                            Contamos con un equipo de profesionales de calidad a disposición de nuestros clientes para ofrecerles una amplia gama de soluciones de inversión, una visión de largo plazo y una búsqueda constante de rentabilidad mediante el armado de estrategias y manejo de carteras de renta fija y variable.
                        </div>
                    </div>
                    <div class="ml-4">
                        <img src="{{ asset('/img/servicio_01.png') }}" class="w-40" alt="servicio_01"/>
                    </div>
                </div>
                <div class="border border-services-c"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="mr-4">
                        <img src="{{ asset('/img/servicio_02.png') }}" class="w-40" alt="servicio_02"/>
                    </div>
                    <div class="text-white xs:pl-3 lg:pl-20">
                        <div class="text-xl font-bold text-left max-w-3xl">
                            Research
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-left max-w-3xl pt-5">
                            Análisis macroeconómico local e internacional, seguimiento y monitoreo de los mercados y sectores de la economía con el objetivo de apoyar la toma de decisiones de nuestros clientes.
                        </div>
                    </div>
                    
                </div>
                <div class="border border-services-c"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="text-white xs:pr-3 lg:pr-20">
                        <div class="text-xl font-bold text-right max-w-3xl">
                            Brokerage
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-right max-w-3xl pt-5">
                            Entre los instrumentos negociados, listados en Mercados de diferentes partes del mundo u operados mediante negociación bilateral (over the counter), se destacan los Títulos Públicos, Acciones, Bonos Corporativos, Opciones, ETF, Futuros, Fondos de Inversión y Productos Estructurados.
                        </div>
                    </div>
                    <div class="ml-4">
                        <img src="{{ asset('/img/servicio_03.png') }}" class="w-40" alt="servicio_03"/>
                    </div>
                </div>
                <div class="border border-services-c"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="mr-4">
                        <img src="{{ asset('/img/servicio_02.png') }}" class="w-40" alt="servicio_02"/>
                    </div>
                    <div class="text-white xs:pl-3 lg:pl-20">
                        <div class="text-xl font-bold text-left max-w-3xl">
                            Fondos comúnes de inversión
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-left max-w-3xl pt-5">
                            Administramos nuestra propia gama de fondos de inversión, proporcionando soluciones de inversión a todos nuestros clientes. Los fondos pueden ser custodiados por entidades internacionales, lo que garantiza su accesibilidad y conveniencia. La instrumentación de cada fondo se realiza a traves de notas financieras estructuradas gestionadas por FlexFund. Por su parte The Bank of New York Mellon y Interactive Brokers actúan como custodios de los activos de renta fija y renta variable, respectivamente. Esta instrumentación minimiza los costos para el inversor al tiempo que maximiza la flexibilidad operacional.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection
