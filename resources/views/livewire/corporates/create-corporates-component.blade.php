<div class="grid grid-cols-12" x-data="{ Overview: @entangle('overview').defer, Operation: @entangle('operationalrea').defer, Financial: @entangle('financial').defer, CorporateNetwork: @entangle('corporatenetwork').defer, Spotlight: @entangle('spotlight').defer }">
    <div class= "sm:col-span-3 col-span-12" >
        <ul class="overflow-x-auto scrollbar-hide whitespace-nowrap  sm:col-span-3 sm:space-y-3  space-y-0 sm:space-x-0 mb-6 space-x-3  col-span-12 subpixel-antialiased sm:flex sm:flex-col flex flex-row ">
            <li class="text-gray-500">
                <template x-if="Overview">
                    <a
                    @click="
                    Overview = true,
                    Operation = false,
                    Financial = false,
                    CorporateNetwork= false,
                    Spotlight = false
                     "   class="  cursor-pointer text-sm  font-bold px-2 border-l-2  border-black dark:border-white dark:text-white text text-newgray-900   dark:hover:text-white hover:text-black  " >
                    Overview
                    </a>
                </template>
                <template x-if="!Overview">
                    <a @click="
                    Overview = true,
                    Operation = false,
                    Financial = false,
                    CorporateNetwork= false,
                    Spotlight = false
                    "   class="cursor-pointer text-sm  dark:hover:text-white hover:text-black  " >
                        Overview
                    </a>
                </template>
            </li>

            <li class="text-gray-500">
                <template x-if="Operation">
                    <a @click="
                    Operation = true,
                    Overview = false,
                    Financial = false,
                    CorporateNetwork = false,
                    Spotlight = false
                    " class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                        Operation Area
                    </a>
                </template>
                <template x-if="!Operation">
                    <a @click="
                    Operation = true,
                    Overview = false,
                    Financial = false,
                    CorporateNetwork = false,
                    Spotlight = false
                    " class="cursor-pointer text-sm  dark:hover:text-white hover:text-black" >
                        Operation Area
                    </a>
                </template>
            </li>

            <li class="text-gray-500">
                <template x-if="Financial">
                    <a @click="
                    Operation = false,
                    Overview = false,
                    Financial = true,
                    CorporateNetwork = false,
                    Spotlight = false
                    " class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                        Financial And Ownership
                    </a>
                </template>
                <template x-if="!Financial">
                    <a @click="
                    Operation = false,
                    Overview = false,
                    Financial = true,
                    CorporateNetwork = false,
                    Spotlight = false
                    " class="cursor-pointer text-sm  dark:hover:text-white hover:text-black" >
                        Financial And Ownership
                    </a>
                </template>
            </li>

            <li class="text-gray-500">
                <template x-if="CorporateNetwork">
                    <a @click="
                    Operation = false,
                    Overview = false,
                    Financial = false,
                    CorporateNetwork = true,
                    Spotlight = false
                    " class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                        Corporate Network
                    </a>
                </template>
                <template x-if="!CorporateNetwork">
                    <a @click="
                    Operation = false,
                    Overview = false,
                    Financial = false,
                    CorporateNetwork = true,
                    Spotlight = false
                    " class="cursor-pointer text-sm  dark:hover:text-white hover:text-black" >
                        Corporate Network
                    </a>
                </template>
            </li>

            <li class="text-gray-500">
                <template x-if="Spotlight">
                    <a @click="
                    Operation = false,
                    Overview = false,
                    Financial = false,
                    CorporateNetwork = false,
                    Spotlight = true
                    " class="cursor-pointer text-sm font-bold px-2 border-l-2 border-black dark:border-white dark:text-white text-newgray-900  dark:hover:text-white hover:text-black" >
                        Spotlight Cases ETC
                    </a>
                </template>
                <template x-if="!Spotlight">
                    <a @click="
                    Operation = false,
                    Overview = false,
                    Financial = false,
                    CorporateNetwork = false,
                    Spotlight = true
                    " class="cursor-pointer text-sm  dark:hover:text-white hover:text-black" >
                        Spotlight Cases ETC
                    </a>
                </template>
            </li>

        </ul>
    </div>
    <livewire:toastr />

    <div class="sm:col-span-9 col-span-12 " >
        <div class="text-right">
            <button wire:loading.remove wire:target='storeCorporate'  wire:click='storeCorporate' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                Save
            </button>
            <button wire:loading wire:target='storeCorporate' id="btnStore" class="inline-flex sm:px-16 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </button>
        </div>

        {{-- overview --}}
        <div x-show="Overview" x-cloak style="display: none !important"  class="pb-6">
            <div class="flex  justify-between items-center mb-2">
                <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold ">Overview</h1>

            </div>
            <div class="mb-6">
                <label class="text-newgray-900 dark:text-gray-300">Corporate Name:</label>
                <input type="text" class="w-full border border-gray-300 py-1 px-4 focus:outline-none" id="corporatename" wire:model.defer='corporatename' placeholder="Name. . . ">
            </div>
            <p class="text-newgray-900 dark:text-gray-300 ">Content English :</p>
            <div wire:ignore>
                <textarea cols="80" id="overviewenglish"  rows="10"  wire:model.defer='overviewenglish' required></textarea>
            </div>

            <p class="text-newgray-900 dark:text-gray-300 mt-6">Content Indonesia :</p>
            <div wire:ignore>
                <textarea  cols="80" id="overviewindonesia"  rows="10"wire:model.defer='overviewindonesia' required ></textarea>
            </div>
        </div>


        {{-- operationarea --}}
        <div x-show="Operation" x-cloak style="display: none !important" class="pb-6">
            <div class="flex  justify-between items-center mb-2" >
                <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold">Operation Area</h1>
            </div>
            <p class="text-newgray-900 dark:text-gray-300 ">Content English :</p>
            <div wire:ignore>
                <textarea cols="80" id="operationenglish"  rows="10"  wire:model.defer='operationenglish' required></textarea>
            </div>

            <p class="text-newgray-900 dark:text-gray-300 mt-6">Content Indonesia :</p>
            <div wire:ignore>
                <textarea  cols="80" id="operationindonesia"  rows="10"wire:model.defer='operationindonesia' required ></textarea>
            </div>
        </div>


        {{-- financial and ownership --}}
        <div x-show="Financial" x-cloak style="display: none !important"  class="pb-6">
            <div class="flex justify-between items-center mb-2">
                <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold">Financial And Ownership</h1>
            </div>
            <p class="text-newgray-900 dark:text-gray-300 ">Content English :</p>
            <div wire:ignore>
                <textarea cols="80" id="financialenglish"  rows="10"  wire:model.defer='financialenglish' required></textarea>
            </div>

            <p class="text-newgray-900 dark:text-gray-300 mt-6">Content Indonesia :</p>
            <div wire:ignore>
                <textarea  cols="80" id="financialindonesia"  rows="10"wire:model.defer='financialindonesia' required ></textarea>
            </div>
        </div>


        {{-- corporate network --}}
        <div x-show="CorporateNetwork" x-cloak style="display: none !important"  class="pb-6">
            <div class="flex justify-between items-center mb-2">
                <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold">Financial And Ownership</h1>

            </div>
            <p class="text-newgray-900 dark:text-gray-300 ">Content English :</p>
            <div wire:ignore>
                <textarea cols="80" id="corporatenetworkenglish"  rows="10"  wire:model.defer='corporatenetworkenglish' required></textarea>
            </div>

            <p class="text-newgray-900 dark:text-gray-300 mt-6">Content Indonesia :</p>
            <div wire:ignore>
                <textarea  cols="80" id="corporatenetworkindonesia"  rows="10"wire:model.defer='corporatenetworkindonesia' required ></textarea>
            </div>
        </div>

        {{-- spotlight --}}
        <div x-show="Spotlight" x-cloak style="display: none !important"  class="pb-6">
            <div class="flex justify-between items-center mb-2">
                <h1 class="text-2xl text-newgray-900 dark:text-newgray-300 font-semibold">Spotlight Cases ETC</h1>

            </div>
            <p class="text-newgray-900 dark:text-gray-300 ">Content English :</p>
            <div wire:ignore>
                <textarea cols="80" id="spotlightenglish"  rows="10"  wire:model.defer='spotlightenglish' required></textarea>
            </div>

            <p class="text-newgray-900 dark:text-gray-300 mt-6">Content Indonesia :</p>
            <div wire:ignore>
                <textarea  cols="80" id="spotlightindonesia"  rows="10"wire:model.defer='spotlightindonesia' required ></textarea>
            </div>
        </div>

    </div>
    <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
    <script>
            const overviewenglish= CKEDITOR.replace('overviewenglish',{
                            height: 400,
                            baseFloatZIndex: 10005
                            });
            const overviewindonesia= CKEDITOR.replace('overviewindonesia',{
                            height: 400,
                            baseFloatZIndex: 10005
                            });

            const operationenglish= CKEDITOR.replace('operationenglish',{
                            height: 400,
                            baseFloatZIndex: 10005
                            });
            const operationindonesia= CKEDITOR.replace('operationindonesia',{
                            height: 400,
                            baseFloatZIndex: 10005
                            });
            const financialenglish= CKEDITOR.replace('financialenglish',{
                            height: 400,
                            baseFloatZIndex: 10005
                            });
            const financialindonesia= CKEDITOR.replace('financialindonesia',{
                            height: 400,
                            baseFloatZIndex: 10005
                            });
            const corporatenetworkenglish= CKEDITOR.replace('corporatenetworkenglish',{
                            height: 400,
                            baseFloatZIndex: 10005
                            });
            const corporatenetworkindonesia= CKEDITOR.replace('corporatenetworkindonesia',{
                            height: 400,
                            baseFloatZIndex: 10005
                            });
            const spotlightenglish= CKEDITOR.replace('spotlightenglish',{
                            height: 400,
                            baseFloatZIndex: 10005
                            });
            const spotlightindonesia= CKEDITOR.replace('spotlightindonesia',{
                            height: 400,
                            baseFloatZIndex: 10005
                            });



            document.querySelector("#btnStore").addEventListener("click", () => {
                @this.set('overviewenglish', overviewenglish.getData());
                @this.set('overviewindonesia', overviewindonesia.getData());
                @this.set('operationenglish', operationenglish.getData());
                @this.set('operationindonesia', operationindonesia.getData());
                @this.set('financialenglish', financialenglish.getData());
                @this.set('financialindonesia', financialindonesia.getData());
                @this.set('corporatenetworkenglish', corporatenetworkenglish.getData());
                @this.set('corporatenetworkindonesia', corporatenetworkindonesia.getData());
                @this.set('spotlightenglish', spotlightenglish.getData());
                @this.set('spotlightindonesia', spotlightindonesia.getData());
            });


    </script>
</div>
