@extends('web.client.charity.layout.app')

@section('content')
<div class="text-center">
    
    <h3 class="title-translate-font text-primary welcomeText line-1 anim-typewriter py-2" style="">សូមស្វាគមន៍​
        មកកាន់ ប៊ែលធី សំណង់</h3>
    {{-- <p class="line-1 anim-typewriter">Animation typewriter style using css steps()</p> --}}
    <div>
        <img src="{{ asset('asset/img/construction/facebook.jpg') }}" alt="">
        <img src="{{ asset('asset/img/construction/youtube.jpg') }}" alt="">
    </div>

</div>


    @include('web.client.charity.layout.share.news')
@endsection
