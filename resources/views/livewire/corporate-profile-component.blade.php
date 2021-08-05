<div class="h-screen bg-gray-300" x-data="{ Overview: @entangle('overview').defer, Operation: @entangle('operationalrea').defer, Financial: @entangle('financial').defer, CorporateNetwork: @entangle('corporatenetwork').defer, Spotlight: @entangle('spotlight').defer }">
    <div class="grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 py-6 px-6 gap-4" >
        {{-- overview --}}
        <template x-if="Overview">
                <button @click="
                Overview = true,
                Operation = false,
                Financial = false,
                CorporateNetwork= false,
                Spotlight = false"
                class="border py-1 border-gray-700 col-span-1 uppercase text-sm bg-black text-gray-200">
                Overview
            </button>
        </template>
        <template x-if="!Overview">
            <button @click="
            Overview = true,
            Operation = false,
            Financial = false,
            CorporateNetwork= false,
            Spotlight = false"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm  text-gray-800 hover:bg-black hover:text-gray-200">
            Overview
            </button>
        </template>




        {{-- operationarea --}}
        <template x-if="Operation">
            <button @click="
            Overview = false,
            Operation = true,
            Financial = false,
            CorporateNetwork= false,
            Spotlight = false"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm bg-black text-gray-200">
            Operation Area
        </button>
        </template>
        <template x-if="!Operation">
            <button @click="
            Overview = false,
            Operation = true,
            Financial = false,
            CorporateNetwork= false,
            Spotlight = false"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm  text-gray-800 hover:bg-black hover:text-gray-200">
            Operation Area
            </button>
        </template>

        {{-- financialandownership --}}
        <template x-if="Financial">
            <button @click="
            Overview = false,
            Operation = false,
            Financial = true,
            CorporateNetwork= false,
            Spotlight = false"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm bg-black text-gray-200">
            Financial and Ownership
        </button>
        </template>
        <template x-if="!Financial">
            <button @click="
            Overview = false,
            Operation = false,
            Financial = true,
            CorporateNetwork= false,
            Spotlight = false"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm  text-gray-800 hover:bg-black hover:text-gray-200">
            Financial and Ownership
            </button>
        </template>


        {{-- corporatenetwork --}}
        <template x-if="CorporateNetwork">
            <button @click="
            Overview = false,
            Operation = false,
            Financial = false,
            CorporateNetwork= true,
            Spotlight = false"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm bg-black text-gray-200">
            Corporate Network
        </button>
        </template>
        <template x-if="!CorporateNetwork">
            <button @click="
            Overview = false,
            Operation = false,
            Financial = false,
            CorporateNetwork= true,
            Spotlight = false"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm  text-gray-800 hover:bg-black hover:text-gray-200">
            Corporate Network
            </button>
        </template>



         {{-- spotlightcases --}}
         <template x-if="Spotlight">
            <button @click="
            Overview = false,
            Operation = false,
            Financial = false,
            CorporateNetwork= false,
            Spotlight = true"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm bg-black text-gray-200">
            SpotlightL Cases Etc
        </button>
        </template>
        <template x-if="!Spotlight">
            <button @click="
            Overview = false,
            Operation = false,
            Financial = false,
            CorporateNetwork= false,
            Spotlight = true"
            class="border py-1 border-gray-700 col-span-1 uppercase text-sm  text-gray-800 hover:bg-black hover:text-gray-200">
            SpotlightL Cases Etc
            </button>
        </template>
    </div>


    <div class="py-6 px-6" >
        <h1 class="sm:text-3xl text-2xl mb-6 font-semibold">{{ $data->name }}</h1>

        {{-- Overview --}}
        <div x-show="Overview" x-cloak style="display: none !important">
            {!! $data->overview !!}
        </div>

         {{-- Operation Area --}}
         <div x-show="Operation" x-cloak style="display: none !important">
            {!! $data->operationarea !!}
        </div>

        {{-- Financial and ownership --}}
        <div x-show="Financial" x-cloak style="display: none !important">
            {!! $data->financialownership !!}
        </div>

        {{-- Corporate Network --}}
        <div x-show="CorporateNetwork" x-cloak style="display: none !important">
            {!! $data->corporatenetwork !!}
        </div>

        {{-- Spotlight Cases --}}
        <div x-show="Spotlight" x-cloak style="display: none !important">
            {!! $data->spotlightcases !!}
        </div>
    </div>



    {{-- <div class="py-6 px-6">{!! $data->name ?? '' !!}</div> --}}
</div>
