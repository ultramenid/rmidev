<div class="sm:h-screen h-full bg-gray-300">
    <div class="grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 py-6 px-6 gap-4">
        {{-- overview --}}
        <button wire:loading.remove wire:target='setButton("overview")' wire:click='setButton("overview")'  class="hover:bg-black hover:text-gray-200  border py-1 border-gray-700 col-span-1 uppercase text-sm">Overview</button>
        <button wire:loading wire:target='setButton("overview")' class="hover:bg-black hover:text-gray-300  border py-1 border-gray-700 col-span-1 uppercase text-sm">
            Overview. .
        </button>


        {{-- operationarea --}}
        <button wire:loading.remove wire:target='setButton("operationarea")' wire:click='setButton("operationarea")' class="hover:bg-black hover:text-gray-200 border py-1 border-gray-700 col-span-1 uppercase text-sm">Operation Area</button>
        <button wire:loading wire:target='setButton("operationarea")' class="hover:bg-black hover:text-gray-300  border py-1 border-gray-700 col-span-1 uppercase text-sm">
            Operation Are. .
        </button>


        {{-- financialandownership --}}
        <button wire:loading.remove wire:target='setButton("financialandownership")' wire:click='setButton("financialandownership")' class="hover:bg-black hover:text-gray-200 border py-1 border-gray-700 col-span-1 uppercase text-sm">Financial and Ownership </button>
        <button wire:loading wire:target='setButton("financialandownership")' class="hover:bg-black hover:text-gray-300  border py-1 border-gray-700 col-span-1 uppercase text-sm">
           Financial and. .
        </button>

        {{-- corporatenetwork --}}
        <button wire:loading.remove wire:target='setButton("corporatenetwork")' wire:click='setButton("corporatenetwork")'  class="hover:bg-black hover:text-gray-200 border py-1 border-gray-700 col-span-1 uppercase text-sm">Corporate Network</button>
        <button wire:loading wire:target='setButton("corporatenetwork")' class="hover:bg-black hover:text-gray-300  border py-1 border-gray-700 col-span-1 uppercase text-sm">
            Corporate Netw. .
         </button>

         {{-- spotlightcases --}}
        <button  wire:loading.remove wire:target='setButton("spotlightcases")' wire:click='setButton("spotlightcases")' class="hover:bg-black hover:text-gray-200 border py-1 border-gray-700 col-span-1 uppercase text-sm">SpotlightL Cases Etc</button>
        <button wire:loading wire:target='setButton("spotlightcases")' class="hover:bg-black hover:text-gray-300  border py-1 border-gray-700 col-span-1 uppercase text-sm">
            SpotlightL Cas. .
         </button>
    </div>

    <div class="py-6 px-6">{!! $data->content ?? '' !!}</div>
</div>
