@extends('web.client.beltei_university.layout.app')

@section('content')
    <div class="dailyNews mt-4">
        <hr>
        <div>
            <h6 class="Muol-Light p-3 my-2 bg-success text-white">{{ __('beltei_university/activity/fieldtrip.header') }}</h6>
        </div>
        <hr>

        {{-- Hot News  --}}
        <a href="{{ route('beltei_university.news.detail', $biutrip_news->first()->id) }}" class="card card-body d-flex">
            {{-- <a href="{{ route('school.news.bacll-batch18') }}" class="card card-body d-flex"> --}}
            <div class="overflow-hidden">
                @if ($biutrip_news->first()->image)
                    @foreach (array_slice(explode(',', $biutrip_news->first()->image), 0, 1) as $newsImg)
                        <img class="rounded shadow-sm width-100 w-100" loading="lazy"
                            src="{{ asset('uploaded/university/news/images/' . $biutrip_news->first()->id . '/' . $newsImg) }}"
                            alt="News Image">
                    @endforeach
                @endif
                {{-- <img class="w-100" src="{{ asset('asset/img/school/dailyNews/1/1.jpg') }}" alt=""> --}}
            </div>
            <div class="p-3">
                <h6 class="Muol-Light line-height-15">
                    @foreach ($biutrip_news->first()->newsDetail as $item)
                        @if ($item->language_id == 1)
                            <div onclick="toggleDescription(this)" class="cursor-pointer "
                                data-fulltext="{{ $item->header }}">
                                {{ Str::limit($item->header, 200) }}
                            </div>
                        @endif
                    @endforeach
                </h6>
            </div>
        </a>


        <div class="row p-0 m-0">

            @foreach ($biutrip_news as $news)
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
            @endforeach

        </div>


    </div>
@endsection
