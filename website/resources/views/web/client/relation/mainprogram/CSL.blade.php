@extends('web.client.school.layout.app')


@section('content')

<div class="text-start p-3">

    <h2 class="title-translate-font text-center my-3 underline">{{ __('school/mainprogram/CSL.header') }}</h2>


    <div>
        
        <table class="table table-hover content-translate-font">
            <tr>
                <th>No</th>
                <th>Title</th>
            </tr>
            <tr>
                <td>1-</td>
                <td><a href="{{ route('school.mainprogram.CSL.detail') }}">{{ __('school/mainprogram/CSL.description1') }}</a></td>
            </tr>
            <tr>
                <td>2-</td>
                <td><a href="{{ route('school.mainprogram.CSL.preschool') }}">{{ __('school/mainprogram/CSL.description2') }}</a></td>
            </tr>
            <tr>
                <td>3-</td>
                <td><a href="{{ route('school.mainprogram.CSL.young-learners') }}">{{ __('school/mainprogram/CSL.description3') }}</a></td>
            </tr>
            <tr>
                <td>4-</td>
                <td><a href="{{ route('school.mainprogram.CSL.adult-learners') }}">{{ __('school/mainprogram/CSL.description4') }}</a></td>
            </tr>
            <tr>
                <td>5-</td>
                <td><a href="{{ route('school.mainprogram.CSL.schedule') }}">{{ __('school/mainprogram/CSL.description5') }}</a></td>
            </tr>
        </table>

        <div class="text-center">
            <img src="https://www.beltei.edu.kh/khm/images/study_price/logo.png" alt="">
        </div>

    </div>

</div>  

@endsection