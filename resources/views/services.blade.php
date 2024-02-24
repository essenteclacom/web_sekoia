@extends('layouts.main')

@section('title', 'Services')

@section('content')
    {{-- slide --}}
    <div>
        <div style="background-image: url({{ asset('/img/services.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xxs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    Sekoia simplifies your access to international markets. We maintain strong Sekoia simplifies your access to international markets. We maintain strong
relationships with prominent financial entities such as Bank of New York relationships with prominent financial entities such as Bank of New York
Mellon, Morgan Stanley, Santander, Interactive Brokers, among others. We Mellon, Morgan Stanley, Santander, Interactive Brokers, among others. We
work continuously to expand our global partnerships.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-secondary">
            <div class="container xxs:px-20 lg:px-32 xl:px-56">
                <div class="flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="text-white xs:pr-3 lg:pr-20">
                        <div class="text-xl font-bold text-right max-w-3xl">
                            Portfolio<br/>Assessment
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-right max-w-3xl pt-5" >
                            Our team of professionals provides investment solutions tailored to each
client's profile and financial needs. We offer a long-term perspective and seek
to achieve the best risk/return ratio according to each market context.
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
                            We conduct local and international macroeconomic analysis, monitoring
markets, sectors, and companies to support our investment decisions. We
regularly publish freely accessible reports to share our perspectives based on
fundamentals.
</div>
</div>

</div>
<div class="border border-services-c"></div>
<div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
<div class="text-white xs:pr-3 lg:pr-20">
    <div class="text-xl font-bold text-right max-w-3xl">
                            Financial Operations
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-right max-w-3xl pt-5">
                            We operate through major markets and conduct bilateral negotiations (over
the counter). We provide access to a variety of financial instruments, including
sovereign and corporate bonds from developed and emerging countries,
stocks of companies worldwide, ETFs, and self-managed and third-party
investment funds, derivatives (options and futures), commodities, currencies,
cryptocurrencies, custom structured notes, among others.
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
                            Mutual Funds
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-left max-w-3xl pt-5">
                            We conduct local and international macroeconomic analysis, monitoring
markets, sectors, and companies to support our investment decisions. We
regularly publish freely accessible reports to share our perspectives based on
fundamentals.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection
