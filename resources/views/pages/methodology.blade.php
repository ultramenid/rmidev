@extends('layout.index')

@section('meta')
    @include('partials.metaIndex')
@endsection


@section('content')
    @include('partials.header')
    @include('partials.nav')

    <main class="bgrmi min-h-screen"
    x-data="{ modal1 : false,
        modal2: false,
        modal3: false,
        modal4 : false,
        modal5 : false,
        modal6 : false,
         modal7: false,
         modal8: false,
         modal11: false,
         modal12: false,
         modal13: false,
         modal14: false,
         modal15 : false,
         modal16 : false,
         modal17 : false,
         modal18 : false
        }"
    >
        <div class="max-w-6xl mx-auto px-6 sm:py-16 py-8">
            {{-- <div class="">{!! $data->content ?? '' !!}</div> --}}
            <div class="flex  items-center ">
                <div class="w-3/12 transform -rotate-90 lg:-mx-28 md:-mx-16 md:block hidden text-center ">
                    <a class=" text-gray-300 h-full ">Thematic Areas</a>
                </div>
                <div class="flex flex-col space-y-2  w-full ">
                    <div class="flex ">
                        <div class="w-1/12"></div>
                        <h1 class="w-11/12 text-center text-gray-300 ">Measurement Areas</h1>
                    </div>

                    {{-- #header --}}
                    <div class="flex ">

                        <div class="w-1/12 h-12 "></div>
                        <div class="flex bgdarkrmi border-gray-600  h-12 border-t border-l border-r sm:w-2/12 w-3/12 items-center justify-center">
                            <a class="text-gray-300 sm:text-base text-xs text-center px-1">Commitment (14%)</a>
                        </div>
                        <div class="flex bgdarkrmi border-gray-600  h-12 border-t sm:w-7/12 w-5/12 items-center justify-center">
                            <a class="text-gray-300 sm:text-base text-xs px-1">Action (58%)</a>
                        </div>
                        <div class="flex bgdarkrmi border-gray-600  h-12 border-t border-l border-r sm:w-2/12 w-3/12 items-center justify-center">
                            <a class="text-gray-300 sm:text-base text-xs text-center px-1">Effectiveness (28%)</a>
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
                                <a class="text-gray-300 sm:text-base text-xs px-1 text-center">Economic Development</a>
                                <p class="text-xs">(Not available for 2021)</p>
                            </div>
                            <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center  bg-edevelopment3">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                        </div>
                    </div>

                     {{-- #Business Conduct--}}
                     <div class="border-l border-gray-600">
                        <div class="flex " >
                            <div class="w-1/12 flex items-center justify-end sm:h-12 h-8 ">
                                <img src="{{ asset('assets/handshake.png') }}" alt=""  class="sm:h-12 h-8">
                            </div>
                            <div class="flex    sm:h-12 h-8  sm:w-2/12  w-3/12 items-center justify-center " style="background-color: #d1af98">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                            <div class="flex  border-gray-600  sm:h-12 h-8 sm:w-7/12  w-5/12 items-center justify-center" style="background-color: #8d5d43">
                                <a class="text-gray-300 sm:text-base text-xs px-1 text-center">Business Conduct</a>
                            </div>
                            <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #5d3c23">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                        </div>
                        <div class="flex" >
                            <div class="w-1/12 flex items-center justify-end sm:h-12 h-8"></div>
                            <div class=" w-11/12 bg-gray-300 px-6 py-3">
                                <p class="cursor-pointer underline" @click = "modal1 = true">1. Business Ethics and Anti-Bribery and Corruption</p>
                                <p class="cursor-pointer underline" @click = "modal2 = true">2. Board and Senior Management Accountability and Diversity</p>
                                <p class="cursor-pointer underline" @click = "modal3 = true">3. Contracts Disclosure </p>
                                <p class="cursor-pointer underline" @click = "modal4 = true">4. Tax Transparency</p>
                                <p class="cursor-pointer underline" @click = "modal5 = true">5. Beneficial Ownership</p>
                                <p class="cursor-pointer underline" @click = "modal6 = true">6. Payments to Producing Countries</p>
                                <p class="cursor-pointer underline" @click = "modal7 = true">7. Lobbying Practices</p>
                                <p class="cursor-pointer underline" @click = "modal8 = true">8. Responsible Contracting and Sourcing</p>
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
                                <a class="text-gray-300 sm:text-base text-xs px-1 text-center">Lifecycle Management</a>
                                <p class="text-xs">(Not available for 2021)</p>
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
                                <a class="text-gray-300 sm:text-base text-xs px-1 text-center">Community Wellbeing</a>
                                <p class="text-xs">(Not available for 2021)</p>
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
                                <a class="text-gray-300 sm:text-base text-xs px-1 text-center">Working Conditions</a>
                                <p class="text-xs">(Not available for 2021)</p>
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
                                <a class="text-gray-300 sm:text-base text-xs px-1 text-center">Environmental Responsibility</a>
                            </div>
                            <div class="flex   sm:h-12 h-8  sm:w-2/12 w-3/12 items-center justify-center " style="background-color: #0e6f24">
                                <a class="text-gray-300 sm:text-base text-xs text-center px-1"></a>
                            </div>
                        </div>
                        <div class="flex" >
                            <div class="w-1/12 flex items-center justify-end sm:h-12 h-8"></div>
                            <div class=" w-11/12 bg-gray-300 px-6 py-3">
                                <p class="cursor-pointer underline" @click = "modal11 = true">1. Environmental Stewardship</p>
                                <p class="cursor-pointer underline" @click = "modal12= true">2. Tailings Management</p>
                                <p class="cursor-pointer underline" @click = "modal13 = true">3. Water</p>
                                <p class="cursor-pointer underline" @click = "modal14 = true">4. Noise and Vibration</p>
                                <p class="cursor-pointer underline" @click = "modal15= true">5. Biodiversity and Ecosystem Services</p>
                                <p class="cursor-pointer underline" @click = "modal16 = true">6. Climate Change and Energy Efficiency</p>
                                <p class="cursor-pointer underline" @click = "modal17= true">7. Hazardous Materials Management</p>
                                <p class="cursor-pointer underline" @click = "modal18 = true">8. Emergency Preparedness</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- modal --}}
        @include('partials.modalMethodology')


    </main>




    @include('partials.footer')
@endsection
