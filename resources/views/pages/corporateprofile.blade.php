@extends('layout.index')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.header')
    @include('partials.nav')

    <main class="bgrmi">
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8 min-h-screen">
            {{-- <livewire:corporate-profile-component /> --}}
            <div class="text-center">
                <h1 class="text-2xl text-gray-200 mb-10">{{__('List of all companies')}}</h1>
            </div>
            <div class="flex flex-col justify-center">
                @foreach ($corporates as $item)
                    <a href="{{ route('corporatedetail', [app()->getLocale(), $item->id]) }}" class="underline text-gray-200 text-center mb-1">{{$item->name}}</a>
                @endforeach
            </div>

        </div>
    </main>


    @include('partials.footer')
@endsection
