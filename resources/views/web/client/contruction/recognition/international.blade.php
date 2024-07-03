@extends('web.client.contruction.layout.app')

@section('content')
    <div class="p-lg-3">

        <h2 class="title-translate-font my-3 underline">{{ __('beltei_tours_travel/regconition/international.header') }}</h2>


        <div class="content" id="content">

        </div>


        <div class="text-start content-translate-font text-justify ">
            {!! __('beltei_tours_travel/regconition/international.description', [
                'url' => route('beltei_tours_travel.recognition.international'),
            ]) !!}
        </div>

    </div>


    @php
        try {
            $id = $_GET['id']; //Retrieve the 'id' parameter from the URL
            $folderPath = public_path("asset/img/tours/recognition/international/$id");

            $files = glob("{$folderPath}/*");
            $fileCount = count(glob("$folderPath/*"));
            $fileNames = array_map('basename', $files);
            

            //echo "<p>Page <script>x</script> of  $fileCount</p>";
            echo "
            <script>
                var id = $id;
                var fileCount = $fileCount;
                var fileNames = " . json_encode($fileNames) . ";
            </script>
            ";
        } catch (\Throwable $th) {
            //Handle any exceptions here
        }
    @endphp


    <script>
        
        
        // const myKeysValues = window.location.search;
        // const urlParams = new URLSearchParams(myKeysValues);
        // const id = urlParams.get("id");
        // var lang = document.documentElement.getAttribute("lang");


        var content = document.getElementById('content');
        try {
            
            var images = '';
            for (let i = 1; i <= fileCount; i++) {
                images += `
                    <img class="w-75" src="{{ asset('asset/img/tours/recognition/international/${id}/${fileNames[i-1]}') }}" alt=""> 
                `;
            }
            content.innerHTML = images;
            
        } catch (error) {
            
        }
        
        
    </script>
@endsection
