@extends('web.client.school.layout.app')

@section('content')
    <div>
        <h3>Classroom</h3>
    </div>

    <div class="row">
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/preschool/bisclassroom.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/preschool/bisclassroom01.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/preschool/bisclassroom02.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/primaryclass/bisclassroom03.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/primaryclass/bisclassroom04.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/primaryclass/bisclassroom05.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/secoundaryclass/bisclassroom06.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/secoundaryclass/bisclassroom07.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/secoundaryclass/bisclassroom08.png')}}" alt="" class="w-100">
        </div>
    </div>


    @include('web.client.beltei_tours_travel.layout.share.news')
@endsection
