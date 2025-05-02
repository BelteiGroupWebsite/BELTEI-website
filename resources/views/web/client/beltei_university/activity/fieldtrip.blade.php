@extends('web.client.beltei_university.layout.app')

@section('content')
    <div class="dailyNews mt-4">
        {{-- <hr>
        <div>
            <h6 class="Muol-Light p-3 my-2 bg-success text-white">{{ __('beltei_university/activity/fieldtrip.header') }}</h6>
        </div>
        <hr> --}}

        <livewire:share.news-component :category="8" />


    </div>
@endsection
