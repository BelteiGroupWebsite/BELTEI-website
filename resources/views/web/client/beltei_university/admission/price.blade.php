@extends('web.client.beltei_university.layout.app')

@section('content')

<style>
    .fee-table tr td:first-child{
        text-align: left;
        text-indent: .5rem;
    }
</style>


<div class="content-translate-font">

    {!! __('beltei_university/admission/price.description') !!}
    
</div>


@endsection
