@extends('web.client.beltei_university.layout.app')

@section('content')
    <div class="dailyNews mt-4">
        <hr>
        <div>
            <h6 class="Muol-Light p-3 my-2 bg-success text-white">{{ __('beltei_university/activity/fieldtrip.biccheader') }}</h6>
        </div>
        <hr>

        <div class="text-center">
            <img src="{{ asset('asset/img/university/bicc/BICC.png') }}" class="w-5" alt="">
        </div>

        <div class="row p-0 m-0 text-start my-3">

            <ul>
                @foreach ($bicc_news as $news)
                <li>
                    <a href="{{ route('beltei_university.news.detail', $news->id) }}">
                        <h5 class="content-translate-font f12 line-height-15">
                            @foreach ($news->newsDetail as $item)
                                @if ($item->language_id == 1)
                                    <div onclick="toggleDescription(this)" class="cursor-pointer "
                                        data-fulltext="{{ $item->header }}">
                                        {{ Str::limit($item->header, 70) }}
                                    </div>
                                @endif
                            @endforeach
                        </h5>
                    </a>
                </li>
                @endforeach
            </ul>
            {{-- @foreach ($bicc_news as $news)
                <a href="{{ route('beltei_university.news.detail', $news->id) }}"
                    class="col-6 row align-items-center py-2 border m-0">
                    <div class=" col-6 overflow-hidden">

                        @if ($news->image)
                            @foreach (array_slice(explode(',', $news->image), 0, 1) as $newsImg)
                                <img class="rounded shadow-sm w-100" loading="lazy"
                                    src="{{ asset('uploaded/university/news/images/' . $news->id . '/' . $newsImg) }}"
                                    alt="News Image">
                            @endforeach
                        @endif

                    </div>
                    <div class="p-2 col-6 ">
                        <h6 class="content-translate-font f12 line-height-15">
                            @foreach ($news->newsDetail as $item)
                                @if ($item->language_id == 1)
                                    <div onclick="toggleDescription(this)" class="cursor-pointer "
                                        data-fulltext="{{ $item->header }}">
                                        {{ Str::limit($item->header, 70) }}
                                    </div>
                                @endif
                            @endforeach
                        </h6>
                        <small class="text-danger">
                            {{ \DateTime::createFromFormat('Y-m-d', $news->date)->format('d/M/Y') }}
                        </small>

                    </div>
                </a>
            @endforeach --}}

        </div>


    </div>
@endsection
