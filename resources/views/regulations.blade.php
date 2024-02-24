@extends('layouts.main')

@section('title', 'Regulations')

@section('content')
    {{-- slide --}}
    <div>
        <div style="background-image: url({{ asset('/img/fondoresearchfiltro.png')}}), url({{ asset('/img/normativas.jpg')}})" class="bg-cover bg-center bg-no-repeat object-contain xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    Sekoia Agente de Valores S.A. is committed to safeguarding the interests of investors and Sekoia Agente de Valores S.A. is committed to safeguarding the interests of investors and ensuring transparency and integrity in its operations in the financial market
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-primary">
            <div class="container">
                <div class="flex flex-col xxs:items-center xs:items-center sm:items-start md:items-start lg:items-start xl:items-start justify-center pt-5 pb-32">
                    <div class="text-white xs:pr-0 lg:pr-20 pt-32 pb-10">
                        <div class="text-xl font-bold max-w-3xl xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left">
                        Regulation
                    </div>
                </div>
                <div class="flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row">
                    <div class="text-white xs:pr-0 lg:pr-20 pb-16">
                        <div class="text-base xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left max-w-3xl">
                            In Uruguay, the regulation of Broker Dealer falls under the jurisdiction of the Superintendencia de Servicios Financieros (SSF), an entity belonging to the Banco Central del Uruguay (BCU). The regulation aims to ensure a strong, ethical, and transparent financial environment, thus protecting the interests of both investors and the market at large.<br><br>
                            To operate, Broker Dealers must obtain the corresponding authorization from the SSF, meeting rigorous requirements for capital, infrastructure, and operational capacity. This process ensures the financial strength of agents and their ability to handle potential contingencies. Under this legal framework, Sekoia Agente de Valores S.A. is registered as a Broker Dealer in the Registro del Mercado de Valores, Section Stock Exchanges and Intermediaries of the Banco Central del Uruguay.<br><br>
                            The regulations establish strict codes of conduct for Broker Dealers, ensuring fair and ethical business practices. Sekoia Agente de Valores S.A. is obligated to act in the best interest of its clients, providing complete and accurate information. Additionally, the SSF conducts ongoing supervision to verify compliance with these regulations, performing audits and periodic reviews of internal documentation and procedures.
                        </div>
                        <a class="mt-8 block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            Mercado de Valores regulations
                        </a>
                    </div>
                    <div class="xxs:pt-4 xs:pt-4 sm:pt-0">
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            PLAFT Procedure manual
                        </a>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            Code of ethics and conduct
                        </a>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            Code of ethics and conduct
                        </a>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            BCU’s Broker Dealers Authorization
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection
