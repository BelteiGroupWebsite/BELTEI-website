@extends('web.client.beltei_university.layout.app')

@section('content')

<style>
    .fee-table tr td:first-child{
        text-align: left;
        text-indent: .5rem;
    }
</style>

<h3 class="text-center title-translate-font mb-4">{!! __('beltei_university/admission/price.header') !!}</h3>


<div class="content-translate-font">

    {!! __('beltei_university/admission/price.description') !!}
    
</div>


@endsection
