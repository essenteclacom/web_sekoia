@extends('layouts.principal')

@section('title', 'Regulaciones')

@section('content')
    {{-- slide --}}
    <div>
        <div style="background-image: url({{ asset('/img/fondoresearchfiltro.png')}}), url({{ asset('/img/normativas.jpg')}})" class="bg-cover bg-center bg-no-repeat object-contain xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    Sekoia Agente de Valores S.A. se compromete a salvaguardar los intereses de los inversores y garantizar la transparencia y la integridad de sus operaciones en el mercado financiero.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-primary">
            <div class="container">
                <div class="flex flex-col xxs:items-center xs:items-center sm:items-start md:items-start lg:items-start xl:items-start justify-center pt-5 pb-32">
                    <div class="text-white xs:pr-0 lg:pr-20 pt-32 pb-10">
                        <div class="text-xl font-bold max-w-3xl xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left">
                        Normativa
                    </div>
                </div>
                <div class="flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row">
                    <div class="text-white xs:pr-0 lg:pr-20 pb-16">
                        <div class="text-base xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left max-w-3xl">
                            En Uruguay, la regulación de los Agentes de Valores se encuentra bajo la jurisdicción de la Superintendencia de Servicios Financieros (SSF), una entidad perteneciente al Banco Central del Uruguay (BCU). La regulación busca garantizar un entorno financiero sólido, ético y transparente, protegiendo así los intereses tanto de los inversionistas como del mercado en general.<br><br>
Para operar, los Agentes de Valores deben obtener la autorización correspondiente de la SSF, cumpliendo con rigurosos requisitos de capital, infraestructura y capacidad operativa. Este proceso garantiza la solidez financiera de los agentes y su capacidad para hacer frente a posibles contingencias. Bajo este marco legal, <b>Sekoia Agente de Valores S.A. se encuentra inscripto como Agente de Valores en el Registro del Mercado de Valores, Sección Bolsas de Valores e Intermediarios del Banco Central del Uruguay.</b><br><br>
La normativa establece estrictas reglas de conducta para los Agentes de Valores, asegurando prácticas comerciales justas y éticas. Sekoia Agente de Valores S.A. esta obligado a actuar en el mejor interés de sus clientes, proporcionando información completa y precisa. Además, la SSF lleva a cabo una supervisión continua para verificar el cumplimiento de estas normativas, realizando auditorías y revisiones periódicas de la documentación y procedimientos internos.

                        </div>
                        <a class="mt-8 block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            Autorización Agente de Valores BCU
                        </a>
                    </div>
                    <div class="xxs:pt-4 xs:pt-4 sm:pt-0">
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            Normas de Mercado de Valores
                        </a>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            Manual de procedimiento PLAFT
                        </a>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            Código de ética y <br>conducta
                        </a>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            Procedimiento de atención de reclamos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection
