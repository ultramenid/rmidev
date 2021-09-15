<div class=" bg-gray-300" x-data="corporateProfiles">
    <div class="grid lg:grid-cols-6 md:grid-cols-2 grid-cols-1 py-6 sm:px-6 px-4 gap-4" >
        {{-- overview --}}
        <template x-if="Overview">
                <button @click="toogleOverview"
                class="border py-1 border-gray-700 col-span-1 uppercase text-sm bg-black text-gray-200">
                Overview
            </button>
        </template>
        <template x-if="!Overview">
            <button @click="toogleOverview"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm  text-gray-800 hover:bg-black hover:text-gray-200">
            Overview
            </button>
        </template>

        {{-- operationarea --}}
        <template x-if="Operation">
            <button @click="toogleOperation"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm bg-black text-gray-200">
            Area
        </button>
        </template>
        <template x-if="!Operation">
            <button @click="toogleOperation"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm  text-gray-800 hover:bg-black hover:text-gray-200">
            Area
            </button>
        </template>

        {{-- corporatenetwork --}}
        <template x-if="CorporateNetwork">
            <button @click="toogleCorporateNetwork"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm bg-black text-gray-200">
            Corporation
        </button>
        </template>
        <template x-if="!CorporateNetwork">
            <button @click="toogleCorporateNetwork"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm  text-gray-800 hover:bg-black hover:text-gray-200">
            Corporation
            </button>
        </template>

        {{-- financial--}}
        <template x-if="Financial">
            <button @click="toogleFinancial"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm bg-black text-gray-200">
            Financial
        </button>
        </template>
        <template x-if="!Financial">
            <button @click="toogleFinancial"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm  text-gray-800 hover:bg-black hover:text-gray-200">
            Financial
            </button>
        </template>

        {{-- ownership  --}}
        <template x-if="Ownership">
            <button @click="toogleOwnership"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm bg-black text-gray-200">
            Ownership
        </button>
        </template>
        <template x-if="!Ownership">
            <button @click="toogleOwnership"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm  text-gray-800 hover:bg-black hover:text-gray-200">
            Ownership
            </button>
        </template>


         {{-- spotlightcases --}}
         <template x-if="Spotlight">
            <button @click="toogleSpotlight"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm bg-black text-gray-200">
            Spotlight
        </button>
        </template>
        <template x-if="!Spotlight">
            <button @click="toogleSpotlight"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm  text-gray-800 hover:bg-black hover:text-gray-200">
            Spotlight
            </button>
        </template>
    </div>


    <div class="py-6 sm:px-6 px-4 " >
        <h1 class="sm:text-3xl text-2xl mb-6 font-semibold">{{ $data->name }}</h1>

        {{-- Overview --}}
        <div x-show="Overview" x-cloak style="display: none !important" class="min-h-screen  ">
            {!! $data->overview !!}
        </div>

         {{-- Operation Area --}}
         <div x-show="Operation" x-cloak style="display: none !important" class="min-h-screen  ">
            {!! $data->operationarea !!}
        </div>

        {{-- Financial --}}
        <div x-show="Financial" x-cloak style="display: none !important" class="min-h-screen  ">
            {!! $data->financialownership !!}
        </div>

        {{-- ownership --}}
        <div x-show="Ownership" x-cloak style="display: none !important" class="min-h-screen  ">
            {!! $data->ownership !!}
        </div>

        {{-- Corporate Network --}}
        <div x-show="CorporateNetwork" x-cloak style="display: none !important" class="min-h-screen   ">
            {!! $data->corporatenetwork !!}
        </div>

        {{-- Spotlight Cases --}}
        <div x-show="Spotlight" x-cloak style="display: none !important" class="min-h-screen  ">
            {!! $data->spotlightcases !!}
        </div>
    </div>

</div>
