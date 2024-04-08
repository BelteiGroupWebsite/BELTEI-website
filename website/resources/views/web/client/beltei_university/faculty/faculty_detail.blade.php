@extends('web.client.beltei_university.layout.app')

@section('content')


    <div class="header">

    </div>

    <div>
        
        <div class="container my-4 translate-font">
        
            <div class="bg-header-color p-3 text-white text-center">
                <h5 id="header-title" class="translate-font">{{ __('beltei_university/faculty/faculty.f' . $_GET['id']) }}</h5>
            </div>
    
            <div class="card">
                <div class="card-body shadow d-flex justify-content-evenly align-items-center">
    
                    {{-- <button id="left" class="btn btn-outline-dark rounded-pill p-3 fa fa-chevron-left"></button> --}}
                    
                    <div class="pb-3" id="booklets">
                        {{-- <img id="booklets" src="{{ asset('asset/img/biu/booklets/undergraduate/BA/it/(1).jpg') }}" alt=""> --}}
                        {{-- <img class="w-80" id="booklets" src="" alt=""> --}}
                    </div>
                    
                    {{-- <button id="right" name="" class="btn btn-outline-dark rounded-pill p-3 fa fa-chevron-right"></button> --}}
    
                    <div class="file-count position-absolute" style="left: .5rem; bottom:.5rem">
    
                        {{-- <p class="translate-font">{{ __('beltei_university/faculty/faculty.Page') }} <span id="currentPage"></span> {{ __('beltei_university/faculty/faculty.of') }} <span id="allPages"></span></p> --}}
                        @php
                            try {
                                $id = $_GET['id']; //Retrieve the 'id' parameter from the URL
                                $folderPath = public_path("asset/img/biu/booklets/undergraduate/$id");
                                $fileCount = count(glob("$folderPath/*"));
                                //echo "<p>Page <script>x</script> of  $fileCount</p>";
                                echo "
                                <script>
                                    var id = $id;
                                    var fileCount = $fileCount;
                                    document.getElementById('allPages').innerText = fileCount;
                                </script>
                                ";
                            } catch (\Throwable $th) {
                                //Handle any exceptions here
                            }
                        @endphp
                        
                    </div>
    
                </div>
            </div>
    
    
    
        </div>
        
        
    </div>



    <script>
        var x = 1;
        var header = document.getElementById('header-title');
        
        var currentPage = document.getElementById("currentPage");
        var allPages = document.getElementById("allPages");
        var booklets = document.getElementById('booklets');
    
        booklets.src = `{{ asset('asset/img/biu/booklets/undergraduate/${id}/(${x}).jpg') }}`;


        var images = '';
        for (let i = 1; i <= fileCount; i++) {
            images += `
                <img class="w-75" src="{{ asset('asset/img/biu/booklets/undergraduate/${id}/(${i}).jpg') }}" alt=""> 
            `;
        }
        booklets.innerHTML = images;
        
        
        
        // function updatePage(x){
        //     currentPage.innerText = x;
        // }
        
        // updatePage(x);
        
        // document.getElementById('right').addEventListener('click', function () {
        //     x++;
        //     if (x > fileCount) {
        //         x = 1;
        //     }
        //     for(let i = 1 ; i < fileCount ; i++){
        //         images += `
        //             <img class="w-80" id="booklets" src="{{ asset('asset/img/biu/booklets/undergraduate/${id}/(${1}).jpg') }}" alt=""> 
        //         `;
        //     }
        //     // booklets.src = `{{ asset('asset/img/biu/booklets/undergraduate/${id}/(${x}).jpg') }}`;
        //     updatePage(x);
        // });
        
        // document.getElementById('left').addEventListener('click', function () {
        //     x--;
        //     if (x < 1) {
        //         x = fileCount;
        //     }
        //     booklets.src = `{{ asset('asset/img/biu/booklets/undergraduate/${id}/(${x}).jpg') }}`;
        //     updatePage(x);
        // });
    
    </script>

@endsection
