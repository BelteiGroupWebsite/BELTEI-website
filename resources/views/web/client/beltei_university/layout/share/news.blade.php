

<div class="dailyNews mt-4">
    <hr>
    <div>
        <h6 class="Muol-Light p-3 my-2 bg-success text-white">ព្រឹត្តិការណ៍សំខាន់ៗប្រចាំថ្ងៃ</h6>
    </div>
    <hr>
    {{-- Hot News  --}}
    <a href="{{ route('beltei_university.news.detail' , $biu_news->first()->id) }}" class="card card-body d-flex">
        {{-- <a href="{{ route('school.news.bacll-batch18') }}" class="card card-body d-flex"> --}}
        <div class="overflow-hidden">
            @if ($biu_news->first()->image)
                @foreach (array_slice(explode(',', $biu_news->first()->image), 0, 1) as $newsImg)
                    <img class="rounded shadow-sm width-100 w-100" loading="lazy"
                        src="{{ asset('uploaded/university/news/images/' . $biu_news->first()->id . '/' . $newsImg) }}"
                        alt="News Image">
                @endforeach
            @endif
            {{-- <img class="w-100" src="{{ asset('asset/img/school/dailyNews/1/1.jpg') }}" alt=""> --}}
        </div>
        <div class="p-3">
            <h6 class="Muol-Light line-height-15">
                @foreach ($biu_news->first()->newsDetail as $item)
                    @if(app()->getLocale() == "kh")
                        @if ($item->language_id == 1)
                            <div onclick="toggleDescription(this)" class="cursor-pointer "
                                data-fulltext="{{ $item->header }}">
                                {{ Str::limit($item->header, 200) }}
                            </div>
                        @endif
                    @else
                        @if ($item->language_id == 2)
                            <div onclick="toggleDescription(this)" class="cursor-pointer "
                                data-fulltext="{{ $item->header }}">
                                {{ Str::limit($item->header, 200) }}
                            </div>
                        @endif

                    @endif

                @endforeach
            </h6>
            {{-- <p class="Battambang-Regular f14 line-height-15">​
                @foreach ($biu_news->first()->newsDetail as $item)
                    @if ($item->language_id == 1)
                        <div onclick="toggleDescription(this)" class="cursor-pointer "
                            data-fulltext="{{ $item->description }}">
                            {!! Str::limit($item->description) !!}
                        </div>
                    @endif
                @endforeach
            </p> --}}
        </div>
    </a>


    <div class="row p-0 m-0">

        @foreach ($biu_news as $news)
            
        <a href="{{ route('beltei_university.news.detail' , $news->id) }}" class="col-6 row align-items-center py-2 border m-0">
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
                        @if(app()->getLocale() == "kh")
                            @if ($item->language_id == 1)
                                <div onclick="toggleDescription(this)" class="cursor-pointer "
                                    data-fulltext="{{ $item->header }}">
                                    {{ Str::limit($item->header, 70) }}
                                </div>
                            @endif
                        @else
                            @if ($item->language_id == 2)
                                <div onclick="toggleDescription(this)" class="cursor-pointer "
                                    data-fulltext="{{ $item->header }}">
                                    {{ Str::limit($item->header, 70) }}
                                </div>
                            @endif
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