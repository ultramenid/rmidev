@extends('layout.dashboard')

@section('content')
    @include('pages.cms.cmspartials.header')
    @include('pages.cms.cmspartials.navbar')

    <main class="bg-white dark:bg-newgray-900">
        <div class="max-w-6xl px-6 mx-auto">
            <div class="sm:pt-8 pt-4 ">
                <livewire:corporates.create-corporates-component />
            </div>
        </div>
    </main>
@endsection
