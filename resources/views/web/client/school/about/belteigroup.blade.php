@extends('web.client.school.layout.app')



@section('content')
    <div class="p-3" id="content">

        <h2 class="title-translate-font my-3 underline">{{ __('school/about/belteigroup.header') }}</h2>
        
        <div class="row g-3">
            <div class="col-12 col-md-6">
                <img class="w-100" src="{{ asset('assets/images/school/belteigroup.jpg') }}" alt="">
            </div>
            <div class="col-12 col-md-6">
                <img class="w-100" src="{{ asset('assets/images/school/belteigroup1.jpg') }}" alt="">
            </div>
            {{-- <div class="col-12">
                <img class="w-100" src="{{ asset('assets/images/school/belteigroup2.png') }}" alt="">
            </div> --}}

        </div>
        <div class="text-start content-translate-font text-justify">
            {!! __('school/about/belteigroup.description') !!}
        </div>


    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const myKeysValues = window.location.search;
            const urlParams = new URLSearchParams(myKeysValues);
            const goto = urlParams.get("goto");
    
            if (goto === "content") {
                const element = document.getElementById("content");
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    </script>
    
@endsection
