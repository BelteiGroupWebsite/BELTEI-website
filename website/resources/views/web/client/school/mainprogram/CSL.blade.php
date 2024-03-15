@extends('web.client.school.layout.app')


@section('content')

<div class="text-start p-3">

    <h2 class="title-translate-font text-center my-3 underline">CSL Program</h2>


    <div>
        
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>Title</th>
            </tr>
            <tr>
                <td>1-</td>
                <td><a href="{{ route('school.mainprogram.CSL.detail') }}">CSL Program Overview</a></td>
            </tr>
            <tr>
                <td>2-</td>
                <td><a href="{{ route('school.mainprogram.CSL.preschool') }}">Preschool</a></td>
            </tr>
            <tr>
                <td>3-</td>
                <td><a href="{{ route('school.mainprogram.CSL.young-learners') }}">Younger Learners</a></td>
            </tr>
            <tr>
                <td>4-</td>
                <td><a href="{{ route('school.mainprogram.CSL.adult-learners') }}">Teenager or Adult Learners</a></td>
            </tr>
            <tr>
                <td>5-</td>
                <td><a href="{{ route('school.mainprogram.CSL.schedule') }}">Date and Time</a></td>
            </tr>
        </table>

        <div class="text-center">
            <img src="https://www.beltei.edu.kh/khm/images/study_price/logo.png" alt="">
        </div>

    </div>

</div>  

@endsection