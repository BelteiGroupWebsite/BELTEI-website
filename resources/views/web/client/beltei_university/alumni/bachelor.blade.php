@extends('web.client.beltei_university.layout.app')

@section('content')


    <div>
        @for ($i = 1; $i <= 32; $i++)
            <img class="w-80" src="{{ asset("asset/img/university/alumni/bachelor/bachelor_$i.jpg") }}" alt="">
        @endfor
    
    </div>

    
@endsection
