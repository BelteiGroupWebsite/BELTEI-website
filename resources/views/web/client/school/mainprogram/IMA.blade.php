@extends('web.client.school.layout.app')


@section('content')
    <div class="text-start p-3">

        <h2 class="title-translate-font text-center my-3 underline">{{ __('school/mainprogram/IMA.header') }}</h2>


        <div class="content-translate-font">

            {{-- <ol class="ul-none-style p-0">
                <li class="p-2 border rounded border-2 my-2 border-danger"><a target="blank"
                        href="https://www.beltei.edu.kh/dl/IMA-booklet-01.jpg">ការទទួលស្គាល់ / IMA EXCLUSIVE FROM
                        MALAYSISA</a></li>
                <li class="p-2 border rounded border-2 my-2 border-danger"><a target="blank"
                        href="https://www.beltei.edu.kh/dl/IMA-booklet-03.jpg">អំពីកម្មវិធី​ អភិវឌ្ឍបញ្ញា IMA / ABOUT IMA</a>
                </li>
                <li class="p-2 border rounded border-2 my-2 border-danger"><a target="blank"
                        href="https://www.beltei.edu.kh/dl/IMA-booklet-04.jpg">អត្ថប្រយោជន៍នៃការសិក្សា IMA / ADVANTAGES OF
                        IMA STUDY</a></li>
                <li class="p-2 border rounded border-2 my-2 border-danger"><a target="blank"
                        href="https://www.beltei.edu.kh/dl/IMA-booklet-05.jpg">កម្មវិធីសិក្សាថ្នាក់បថមសិក្សា IMA /
                        តម្លៃសិក្សា</a></li>
                <li class="p-2 border rounded border-2 my-2 border-danger"><a target="blank"
                        href="https://www.beltei.edu.kh/dl/IMA-booklet-06.jpg">កម្មវិធីសិក្សាថ្នាក់មធ្យមសិក្សា IMA /
                        តម្លៃសិក្សា</a></li>
                <li class="p-2 border rounded border-2 my-2 border-danger"><a target="blank"
                        href="https://www.beltei.edu.kh/dl/IMA-booklet-07.jpg">កម្មវិធីសិក្សាតាមប្រព័ន្ឌអេឡិចត្រូនិក IMA /
                        តម្លៃសិក្សា</a></li>
            </ol> --}}

            <div>
                <a target="blank"  class="btn btn-outline-danger font-bold w-100 text-start mb-2 p-2 border-2" href="https://www.beltei.edu.kh/dl/IMA-booklet-01.jpg">ការទទួលស្គាល់ / IMA EXCLUSIVE FROM
                    MALAYSISA</a>
                <a target="blank"  class="btn btn-outline-danger font-bold w-100 text-start mb-2 p-2 border-2" href="https://www.beltei.edu.kh/dl/IMA-booklet-03.jpg">អំពីកម្មវិធី​ អភិវឌ្ឍបញ្ញា IMA /
                    ABOUT IMA</a>
                <a target="blank"  class="btn btn-outline-danger font-bold w-100 text-start mb-2 p-2 border-2" href="https://www.beltei.edu.kh/dl/IMA-booklet-04.jpg">អត្ថប្រយោជន៍នៃការសិក្សា IMA /
                    ADVANTAGES OF
                    IMA STUDY</a>
                <a target="blank"  class="btn btn-outline-danger font-bold w-100 text-start mb-2 p-2 border-2" href="https://www.beltei.edu.kh/dl/IMA-booklet-05.jpg">កម្មវិធីសិក្សាថ្នាក់បថមសិក្សា IMA /
                    តម្លៃសិក្សា</a>
                <a target="blank"  class="btn btn-outline-danger font-bold w-100 text-start mb-2 p-2 border-2" href="https://www.beltei.edu.kh/dl/IMA-booklet-06.jpg">កម្មវិធីសិក្សាថ្នាក់មធ្យមសិក្សា IMA
                    /
                    តម្លៃសិក្សា</a>
                <a target="blank"  class="btn btn-outline-danger font-bold w-100 text-start mb-2 p-2 border-2" href="https://www.beltei.edu.kh/dl/IMA-booklet-07.jpg">កម្មវិធីសិក្សាតាមប្រព័ន្ឌអេឡិចត្រូនិក IMA /
                    តម្លៃសិក្សា</a>
            </div>

            <div class="d-flex justify-content-center">
                <a href="https://www.beltei.edu.kh/dl/Booklet_IMA_2022.pdf" target="blank">
                    <h4 class="p-2 px-4 btn btn-success shadow-sm border rounded border-2 my-2">{{ __('school/mainprogram/IMA.booklet') }}</h4>
                </a>
            </div>

            <div class="text-center ">
                <img class="w-75"
                    src="https://www.beltei.edu.kh/khm/images/study_price/beltei-international-school-in-cambodia-mou-with-ima.jpg"
                    alt="">
            </div>

            <div class="text-center">
                <h4 class=" title-translate-font my-3">{{ __('school/mainprogram/IMA.video') }}</h4>
                <iframe class="w-75" width="560" height="315"
                    src="https://www.youtube.com/embed/isVoI5z3l_E?si=wIepM0nHK_9UnfFd" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe class="w-75" width="560" height="315"
                    src="https://www.youtube.com/embed/byIiyVhLIPo?si=C0mb0X0Cxspqa6q4" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe class="w-75" width="560" height="315"
                    src="https://www.youtube.com/embed/NP5p0fJ9fYk?si=iGWFfILYdRn9eqiJ" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe class="w-75" width="560" height="315"
                    src="https://www.youtube.com/embed/Ls7FfJc73Vs?si=rK8sG5KdFxD0qk1P" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe class="w-75" width="560" height="315"
                    src="https://www.youtube.com/embed/H-kIkNpKRBM?si=IMUtHCoowmTKIpbe" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe class="w-75" width="560" height="315"
                    src="https://www.youtube.com/embed/vpCwNmpJ87Y?si=y8H4ydk2R89rFlp0" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe class="w-75" width="560" height="315"
                    src="https://www.youtube.com/embed/Hkk0YodNtrU?si=iTVxTd3yXc92-o6g" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe class="w-75" width="560" height="315"
                    src="https://www.youtube.com/embed/j_QJIx72esQ?si=4VOpKhygw1zjNP54" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe class="w-75" width="560" height="315"
                    src="https://www.youtube.com/embed/ZL2Klr8CnfQ?si=SH_N23Z_H8NhPJFz" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

        </div>

    </div>
@endsection
