@extends('web.client.school.layout.app')


@section('content')

<div class="text-start p-3">

    <h2 class="title-translate-font text-center my-3 underline">{{ __('school/mainprogram/internation.header') }}</h2>


    <div>
        
        {{-- {!! __('school/mainprogram/internation.description') !!} --}}

        <table class="table table-hover content-translate-font">
            <tr>
                <th>No</th>
                <th>Title</th>
            </tr>
            <tr>
                <td>1-</td>
                <td><a href="{{ route('school.mainprogram.internation-preparation.vision') }}">{{ __('school/mainprogram/internation.description1') }}</a></td>
            </tr>
            <tr>
                <td>2-</td>
                <td><a href="{{ route('school.mainprogram.internation-preparation.TOEFL') }}">{{ __('school/mainprogram/internation.description2') }}</a></td>
            </tr>
            <tr>
                <td>3-</td>
                <td><a href="">{{ __('school/mainprogram/internation.description3') }}</a></td>
            </tr>
            <tr>
                <td>4-</td>
                <td><a href="">{{ __('school/mainprogram/internation.description4') }}</a></td>
            </tr>
            <tr>
                <td>5-</td>
                <td><a href="">{{ __('school/mainprogram/internation.description5') }}</a></td>
            </tr>
        </table>


    </div>

</div>  

@endsection