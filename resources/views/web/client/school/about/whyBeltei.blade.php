@extends('web.client.school.layout.app')


@section('content')
    <div class="text-start p-3" id="content">

        <h2 class="text-center title-translate-font my-3 underline">{{ __('school/about/whyBeltei.header') }}</h2>

        <div class="content-translate-font text-justify">
            {!! __('school/about/whyBeltei.description') !!}
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
