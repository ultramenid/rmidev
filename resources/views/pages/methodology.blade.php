@extends('layout.index')

@section('meta')
    @include('partials.metaIndex')
@endsection


@section('content')
    @include('partials.header')
    @include('partials.nav')

    <main class="bgrmi min-h-screen">
        <div class="max-w-6xl mx-auto px-6 md:px-8 sm:py-16 py-8">
            <div class="prose ">{!! $data->content ?? '' !!}</div>
        </div>
    </main>


    @include('partials.footer')
@endsection
