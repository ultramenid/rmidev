@extends('layout.index')


@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.header')
    @include('partials.nav')

    <main class="bgrmi h-min-screen">

        {{-- flex select
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

        </div> --}}



        {{-- Overall text --}}
        <div class="max-w-6xl mx-auto sm:py-16 py-8">


            <h1 class="uppercase text-center text-gray-300 text-3xl font-bold mb-6">{{__('Overall Company Result')}}</h1>
            <div class=" w-full h-full mb-6">
                <span class="inline-flex items-center space-x-3 px-4 ">
                    <img src="{{ asset('assets/handshake.png') }}" alt="" class="h-10">
                    <a href="#" class="text-gray-300 sm:text-2xl inline-flex underline  text-xl">{{__('Bussines Conduct')}}</a>
                </span>
                <livewire:chart-bconduct />
            </div>
            <div class=" w-full h-full">
                <span class="inline-flex items-center space-x-3 px-4  ">
                    <img src="{{ asset('assets/leaf.png') }}" alt="" class="w-9">
                    <a href="#" class="text-gray-300 sm:text-2xl inline-flex underline text-xl">Environmental Responsibility</a>
                </span>
                <livewire:chart-eresponsibility />
            </div>
        </div>

        {{-- rmi framework --}}
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8">
            <h1 class="uppercase text-center text-gray-300 text-3xl font-bold mb-6">{{__('RMI analytical framework')}}</h1>
            <div class="flex  items-center ">
                <div class="w-3/12 transform -rotate-90 lg:-mx-28 md:-mx-16 md:block hidden text-center ">
                    <a class=" text-gray-300 h-full ">{{__('Thematic Areas')}}</a>
                </div>
                <div class="flex flex-col space-y-2  w-full ">
                    <div class="flex ">
                        <div class="w-1/12"></div>
                        <h1 class="w-11/12 text-center text-gray-300 ">{{__('Measurement Areas')}}</h1>
                    </div>
                    {{-- #header --}}
                    <div class="flex ">

                        <div class="w-1/12 h-12 "></div>
                        <div class="flex bgdarkrmi border-gray-600  h-12 border-t border-l border-r sm:w-2/12 w-3/12 items-center justify-center">
                            <a class="text-gray-300 sm:text-base text-xs text-center px-1">{{__('Commitment')}} (14%)</a>
                        </div>
                        <div class="flex bgdarkrmi border-gray-600  h-12 border-t sm:w-7/12 w-5/12 items-center justify-center">
                            <a class="text-gray-300 sm:text-base text-xs px-1">{{__('Action')}} (58%)</a>
                        </div>
                        <div class="flex bgdarkrmi border-gray-600  h-12 border-t border-l border-r sm:w-2/12 w-3/12 items-center justify-center">
                            <a class="text-gray-300 sm:text-base text-xs text-center px-1">{{__('Effectiveness')}} (28%)</a>
                        </div>
                    </div>

                     {{-- #Economic Development --}}
                     <div >
                        <div class="flex " >
                            <div class="w-1/12 flex items-center justify-end sm:h-12 h-8 border-t border-l border-gray-600">
                                <img src="{{ asset('assets/Economicdevelopicon.png') }}" alt=""  class="sm:h-12 h-8">
                            </div>
                            <div class="flex    sm:h-12 h-8  sm:w-2/12   w-3/12 items-center justify-center  bg-edevelopment1" >
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                            <div class="flex flex-col  border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center bg-edevelopment2">
                                <a class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Economic Development')}}</a>
                                <p class="text-xs">({{__('Not available for')}} {{ date('Y') }})</p>
                            </div>
                            <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center  bg-edevelopment3">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                        </div>
                    </div>

                     {{-- #Business Conduct--}}

                     <div  class="border-l border-gray-600">
                        <div class="flex "  >
                            <div class="w-1/12 flex items-center justify-end sm:h-12 h-8 ">
                                <img src="{{ asset('assets/handshake.png') }}" alt=""  class="sm:h-12 h-8">
                            </div>
                            <div class="flex    sm:h-12 h-8  sm:w-2/12  w-3/12 items-center justify-center " style="background-color: #d1af98">
                                <a  class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                            <div class="flex  border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center" style="background-color: #8d5d43">
                                <a  href="{{ route('methodology', app()->getlocale() )}}" class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Business Conduct')}}</a>
                            </div>
                            <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #5d3c23">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                        </div>

                     </div>


                     {{-- #Lifecycle Management--}}
                     <div class=" border-l border-gray-600">
                        <div class="flex ">
                            <div class="w-1/12 flex items-center justify-end sm:h-12 h-8">
                                <img src="{{ asset('assets/lifecycle.png') }}" alt=""  class="sm:h-12 h-8">
                            </div>
                            <div class="flex    sm:h-12 h-8  sm:w-2/12  w-3/12 items-center justify-center " style="background-color: #cf95c2">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                            <div class="flex flex-col  border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center" style="background-color: #a71681">
                                <a class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Lifecycle Management')}}</a>
                                <p class="text-xs">({{__('Not available for')}} {{ date('Y') }})</p>
                            </div>
                            <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #6f0954">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                        </div>

                     </div>


                     {{-- #Community Wellbeing--}}
                     <div class=" border-l border-gray-600">
                        <div class="flex ">
                            <div class="w-1/12 flex items-center justify-end sm:h-12 h-8">
                                <img src="{{ asset('assets/Communitywel.png') }}" alt=""  class="sm:h-12 h-8">
                            </div>
                            <div class="flex    sm:h-12 h-8  sm:w-2/12  w-3/12 items-center justify-center " style="background-color: #f9b567">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                            <div class="flex flex-col border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center" style="background-color: #ef7d00">
                                <a class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Community Wellbeing')}}</a>
                                <p class="text-xs">({{__('Not available for')}} {{ date('Y') }})</p>
                            </div>
                            <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #c54409">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                        </div>
                     </div>



                    {{-- #Working Conditions--}}
                    <div class=" border-l border-gray-600">
                        <div class="flex ">
                            <div class="w-1/12 flex items-center justify-end sm:h-12 h-8">
                                <img src="{{ asset('assets/WorkingConditions.png') }}" alt=""  class="sm:h-12 h-8">
                            </div>
                            <div class="flex    sm:h-12 h-8  sm:w-2/12  w-3/12 items-center justify-center " style="background-color: #f18d6e">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                            <div class="flex flex-col  border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center" style="background-color: #e5231b">
                                <a class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Working Conditions')}}</a>
                                <p class="text-xs">({{__('Not available for')}} {{ date('Y') }})</p>
                            </div>
                            <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #931004">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                        </div>

                    </div>



                    {{-- #Environmental Responsibility--}}
                    <div  class="border-gray-600  border-l border-b">
                        <div class="flex " >
                            <div class="w-1/12 flex items-center justify-end sm:h-12 h-8 ">
                                <img src="{{ asset('assets/leaf.png') }}" alt=""  class="sm:h-12 h-8">
                            </div>
                            <div class="flex    sm:h-12 h-8  sm:w-2/12  w-3/12 items-center justify-center " style="background-color: #b9d478">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                            <div class="flex  border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center" style="background-color: #76b82a">
                                <a href="{{ route('methodology', app()->getlocale() )}}" class="text-gray-300 sm:text-base text-xs px-1 text-center">{{__('Environmental Responsibility')}}</a>
                            </div>
                            <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #0e6f24">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





         {{-- map --}}
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-8 py-8">
            {{-- <img loading="lazy" src="{{ asset('assets/indonesiamap.png') }}" alt=""> --}}
            <iframe src='https://flo.uri.sh/visualisation/7315041/embed' title='Interactive or visual content' class='flourish-embed-iframe' frameborder='0' scrolling='no' style='width:100%;height:450px;' sandbox='allow-same-origin allow-forms allow-scripts allow-downloads allow-popups allow-popups-to-escape-sandbox allow-top-navigation-by-user-activation'></iframe>
        </div>




         {{-- companies text --}}
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8">
           <h1 class="uppercase text-center text-gray-300 text-3xl font-bold mb-6">{{__('Companies')}}</h1>
           <p class="text-gray-300 sm:text-center text-left font-semibold leading-8">
            {{__('The RMI Reports 2020 covers 38 companies from 19 home countries, including publicly-listed, stated-owned and private companies. These companies operate in more than 780 mine sites in 49 producing countries and control over 200 closed or suspended mine sites. The assesment covers most mined commodities, excluding oil and gas. it is possible to filter by company, using the list of all companies on the left hand side, and also to filter by producing country or commodity, using the fields below.')}}</p>
        </div>

    </main>



    @include('partials.footer')
@endsection
