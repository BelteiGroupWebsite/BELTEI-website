@extends('web.client.beltei_university.layout.app')

@section('content')


    <div>
        @for ($i = 1; $i <= 6; $i++)
            <img class="w-80" src="{{ asset("asset/img/university/alumni/master/master_$i.jpg") }}" alt="">
        @endfor
    
    </div>

    
@endsection
