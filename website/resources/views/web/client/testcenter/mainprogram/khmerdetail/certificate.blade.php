
@extends('web.client.school.layout.app')


@section('content')


<div class="p-3">

    <h3 class="title-translate-font mb-3">សញ្ញាបត្រចំណេះទូទៅ</h3>

    <div class="text-start content-translate-font p-3">
        <h6 class="mt-3 mb-2">ក- សញ្ញាបត្រមធ្យមសិក្សា បឋមភូមិ (ឌីប្លូម) ចេញដោយក្រសួងអប់រំ យុវជន និងកីឡា</h6>
        <div class="text-center">
            <img src="https://www.beltei.edu.kh/khm/images/ge_certificate/F10_1.png" alt="">
        </div>

        <h6 class="mt-3 mb-2">ខ- សញ្ញាបត្រមធ្យ​សិក្សា ទុតិយភូមិ (បាក់ឌុប) ចេញដោយក្រសួងអប់រំ យុវជន និងកីឡា</h6>
        <div class="text-center">
            <img src="https://www.beltei.edu.kh/khm/images/ge_certificate/M12_1.png" alt="">
        </div>

        <h6 class="mt-3 mb-2">គ- សញ្ញាបត្រមធ្យ​សិក្សាទុតិយភូមិប៊ែលធី (បាក់ឌុប) ចេញដោយវិទ្យាស្ថាន ប៊ែលធី អន្តរជាតិ</h6>
        <div class="text-center">
            <img src="https://www.beltei.edu.kh/khm/images/ge_certificate/belteihighschool.png" alt="">
        </div>
    </div>
    

            <div class="mt-5">
            @include('web.client.school.layout.share.mainprogram.khmer')
        </div>
    
</div>



@endsection