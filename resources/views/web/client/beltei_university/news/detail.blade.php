{{-- @extends('web.client.beltei_university.layout.app') --}}
@extends('web.client.' . $category . '.layout.app')

@section('content')
    <style>
        #newsDescription * {
            width: 100% !important;
        }
    </style>

    <div>
        <div class="text-start p-3  position-relative" id="newsContainer">

            @foreach ($news->newsDetail as $item)
                @if ($item->language->key == app()->getLocale())
                    <h5 class="title-translate-font mb-4 text-center line-height-15" id="newsHeader">
                        {{ $item->header }}


                    </h5>

                    <div class=" w-100 h-100">
                        <div class="float-start w-50 content-translate-font">
                            <p id="newsDescription" class="text-justify pt-2">
                                {!! $item->description !!}
                            </p>
                        </div>
                        <div id="imgContainer" class="position-relative">
                            @foreach (explode(',', $news->image) as $newsImg)
                                <img width="49%" class=" p-2 " loading="lazy"
                                    src="{{ asset('uploaded/university/news/images/' . $news->id . '/' . $newsImg) }}"
                                    alt="News Image">
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach


        </div>
    </div>

    <div>
        <livewire:university.share.news-component :category="$categoryKey" />
        {{-- @include('web.client.'.$category.'.layout.share.news') --}}
    </div>
@endsection
