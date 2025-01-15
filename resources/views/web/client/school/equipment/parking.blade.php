@extends('web.client.school.layout.app')

@section('content')
    <div>
        <h3 class="title-translate-font pb-3">{{ __('school/app.D15') }}</h3>
    </div>
    <div class="row">
        @php
            $No = 15; 
            try {
                $folderPath = public_path("asset/img/school/equipment/$No");
                $fileCount = count(glob("$folderPath/*"));

                for ($i = 1; $i <= $fileCount; $i++) {
                    echo "<div class='col-6 p-2'>
                        <img src='" . asset("asset/img/school/equipment/$No/$i.jpg") . "' alt='' class='w-100'>
                    </div>";
                }
                
            } catch (\Throwable $th) {
                //Handle any exceptions here
            }
        @endphp
    </div>
    @include('web.client.school.layout.share.news')
@endsection
