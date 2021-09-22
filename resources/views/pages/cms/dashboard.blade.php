@extends('layout.dashboard')

@section('content')
    @include('pages.cms.cmspartials.header')
    @include('pages.cms.cmspartials.navbar')

    <main class="bg-white dark:bg-newgray-900 h-screen ">
        <div class="max-w-6xl px-6 mx-auto py-6">
            <livewire:embed-map-component />
        </div>
    </main>
@endsection
