@extends('layout.index')


@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.header')
    @include('partials.nav')

    <main class="bgrmi">
        {{-- flex select --}}
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8">
            <div class="sm:flex flex-row lg:space-x-16 md:space-x-12 space-x-0 sm:space-y-0 space-y-2">
                <div x-data="{ open: false }" class="relative py-1 sm:w-96 w-full">
                    <button @click="open = ! open"
                    class="bg-gray-300 uppercase py-2 px-3 w-full text-left ">
                    SELECT PRINCIPLE
                    </button>

                    <div x-show="open"  x-transition @click.outside="open = false" class="z-10 absolute bg-gray-300  w-full py-1 px-3 flex-row space-y-2" x-cloak style="display: none !important;">
                        <p @click="open=false" class="hover:bg-gray-200 cursor-pointer">Select 1</p>
                        <p @click="open=false" class="hover:bg-gray-200 cursor-pointer">Select 1</p>
                        <p @click="open=false" class="hover:bg-gray-200 cursor-pointer">Select 1</p>
                        <p @click="open=false" class="hover:bg-gray-200 cursor-pointer">Select 1</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="relative py-1 sm:w-96 w-full">
                    <button @click="open = ! open"
                    class="bg-gray-300 uppercase py-2 px-3 w-full text-left ">
                    SELECT CORPORATE
                    </button>

                    <div x-show="open" x-transition @click.outside="open = false" class="z-10 absolute bg-gray-300  w-full py-1 px-3 flex-row space-y-2" x-cloak style="display: none !important;">
                        <p @click="open=false" class="hover:bg-gray-200 cursor-pointer">Select 1</p>
                        <p @click="open=false" class="hover:bg-gray-200 cursor-pointer">Select 1</p>
                        <p @click="open=false" class="hover:bg-gray-200 cursor-pointer">Select 1</p>
                        <p @click="open=false" class="hover:bg-gray-200 cursor-pointer">Select 1</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="relative py-1 sm:w-96 w-full">
                    <button @click="open = ! open"
                    class="bg-gray-300 uppercase py-2 px-3 w-full text-left ">
                    LIST OF A REGION
                    </button>

                    <div x-show="open" x-transition @click.outside="open = false" class="z-10 absolute bg-gray-300  w-full py-1 px-3 flex-row space-y-2" x-cloak style="display: none !important;">
                        <p @click="open=false" class="hover:bg-gray-200 cursor-pointer">Select 1</p>
                        <p @click="open=false" class="hover:bg-gray-200 cursor-pointer">Select 1</p>
                        <p @click="open=false" class="hover:bg-gray-200 cursor-pointer">Select 1</p>
                        <p @click="open=false" class="hover:bg-gray-200 cursor-pointer">Select 1</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- map --}}
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-8 py-8">
            <img loading="lazy" src="{{ asset('assets/indonesiamap.png') }}" alt="">
        </div>

        {{-- companies text --}}
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8">
           <h1 class="uppercase text-center text-gray-300 text-3xl font-bold mb-6">Companies</h1>
           <p class="text-gray-300 sm:text-center text-left font-semibold leading-8">
            The RMI Report 2020 covers 38 companies from 19 home countries, including publicly-
            listed, state-owned and private companies. These companies operate in more than
            780 mine sites in 49 producing countries and control over 200 closed or suspended
            mine sites. The assessment covers most mined commodities, excluding oil and gas. It is
            possible to filter by company, using the list of all companies on the left-hand side, and
            also to filter by producing country or commodity, using the fields below.</p>
        </div>

        {{-- Overall text --}}
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8">
            <h1 class="uppercase text-center text-gray-300 text-3xl font-bold mb-6">Overall Company Result</h1>
            <div class="lg:flex flex-row mt-12">
                <img loading="lazy" src="{{ asset('assets/businessConduct.png') }}" alt="" class="w-full">
                <img loading="lazy" src="{{ asset('assets/environmentalResponsibility.png') }}" alt="" class="w-full">
            </div>
         </div>
    </main>

    @include('partials.footer')
@endsection
