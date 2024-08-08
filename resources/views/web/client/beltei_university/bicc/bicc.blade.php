@extends('web.client.beltei_university.layout.app')

@section('content')
    <div class="dailyNews mt-4">
        <hr>
        <div>
            <h6 class="Muol-Light p-3 my-2 bg-success text-white">{{ __('beltei_university/activity/fieldtrip.biccheader') }}
            </h6>
        </div>
        <hr>

        <div class="text-center">
            <img src="{{ asset('asset/img/university/bicc/BICC.png') }}" width="400px" alt="">
        </div>

        <div class="row p-0 m-0 text-start my-3">

            <table class="table table-hover table-bordered">
                <tr>
                    <td class="py-3">
                        <h6>1- BELTEI International Collaboration Conference Education Fair</h6>
                    </td>
                </tr>
                @foreach ($bicc_news as $news)
                    <tr>
                        <td class="ps-4 py-2">
                            <a href="{{ route('beltei_university.news.detail', $news->id) }}">
                                <h6 class="content-translate-font line-height-15">
                                    @foreach ($news->newsDetail as $item)
                                        @if(app()->getLocale() == "kh")
                                            @if ($item->language_id == 1)
                                                <div onclick="toggleDescription(this)" class="cursor-pointer "
                                                    data-fulltext="{{ $item->header }}">
                                                    - {{ Str::limit($item->header, 70) }}
                                                </div>
                                            @endif
                                        @else
                                            @if ($item->language_id == 2)
                                                <div onclick="toggleDescription(this)" class="cursor-pointer "
                                                    data-fulltext="{{ $item->header }}">
                                                    - {{ Str::limit($item->header, 70) }}
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                </h6>
                            </a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td class="py-3">
                        <h6>2- BELTEI International Collaboration Conference Research Forum</h6>
                    </td>
                </tr>
                @foreach ($biccr_news as $news)
                    <tr>
                        <td class="ps-4 py-2">
                            <a href="{{ route('beltei_university.news.detail', $news->id) }}">
                                <h6 class="content-translate-font line-height-15">
                                    @foreach ($news->newsDetail as $item)
                                        @if(app()->getLocale() == "kh")
                                            @if ($item->language_id == 1)
                                                <div onclick="toggleDescription(this)" class="cursor-pointer "
                                                    data-fulltext="{{ $item->header }}">
                                                    - {{ Str::limit($item->header, 70) }}
                                                </div>
                                            @endif
                                        @else
                                            @if ($item->language_id == 2)
                                                <div onclick="toggleDescription(this)" class="cursor-pointer "
                                                    data-fulltext="{{ $item->header }}">
                                                    - {{ Str::limit($item->header, 70) }}
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                </h6>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
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
