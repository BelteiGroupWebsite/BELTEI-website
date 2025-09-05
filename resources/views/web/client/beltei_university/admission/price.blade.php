@extends('web.client.beltei_university.layout.app')

@section('content')

<style>
    .fee-table tr td:first-child{
        text-align: left;
        text-indent: .5rem;
    }
</style>


<div>
    <h3 class="title-translate-font p-3 bg-success text-white">{{ __('beltei_university/admission/price.header')  }}</h3>
</div>

<div class="">

    {!! __('beltei_university/admission/price.description') !!}
    
</div>


@endsection
