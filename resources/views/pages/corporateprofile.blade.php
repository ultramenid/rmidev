@extends('layout.index')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.header')
    @include('partials.nav')

    <main   style="background-color: #152136 !important">
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8">
            <div class="sm:h-screen h-full bg-gray-300">
                <div class="grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 py-6 px-6 gap-4">
                    <button class=" border py-1 border-gray-700 col-span-1 uppercase text-sm">Overview</button>
                    <button class=" border py-1 border-gray-700 col-span-1 uppercase text-sm">Operation Area</button>
                    <button class=" border py-1 border-gray-700 col-span-1 uppercase text-sm">Financial and Ownership </button>
                    <button class=" border py-1 border-gray-700 col-span-1 uppercase text-sm">Corporate Network</button>
                    <button class=" border py-1 border-gray-700 col-span-1 uppercase text-sm">SpotlightL Cases Etc</button>
                </div>

                <h1 class="uppercase text-gray-800 text-3xl sm:text-left text-center font-bold py-6 px-6">Corporate Profile</h1>
                <p class="text-gray-800 text-xl sm:text-left text-justify py-6 px-6">
                    The RMI Reports 2020 covers 38 companies from 19 home countries, including publicly-listed, stated-owned and private companies. These companies operate in more than 780 mine sites in 49 producing countries and control over 200 closed or suspended mine sites. The assesment covers most mined commodities, excluding oil and gas. it is possible to filter by company, using the list of all companies on the left hand side, and also to filter by producing country or commodity, using the fields below.
                </p>
            </div>
        </div>
    </main>


    @include('partials.footer')
@endsection
