@extends('web.client.beltei_university.layout.app')

@section('content')

    <style>
        .dd h6{
            margin-top: 2rem;

        }
        .dd h6 span{
            /* width: 50%; */
            padding: 1rem;
            color: white;
        }

        .dd hr{
            border: 1px solid #dee2e6 ;
            border-width: 3px ;
        }
    </style>

    <div class="text-start content-translate-font dd">

        <h3 class="text-center title-translate-font mb-4">{!! __('beltei_university/admission/register.header') !!}</h3>

        <div>
            {!! __('beltei_university/admission/register.description') !!}
        </div>


    </div>
@endsection






