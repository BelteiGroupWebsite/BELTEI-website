@extends('web.admin.layouts.app')
@section('content-header', 'News')
@section('sub-header', 'News')



@section('setting-link')
    @if (Auth::user()->role_id < 4)
        <a class="dropdown-item" href="{{ route('admin.university.news.create') }}">Create News</a>
    @endif
    {{-- <a class="dropdown-item" href="javascript:;">Another action</a>
    <a class="dropdown-item" href="javascript:;">Something else here</a> --}}
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:;">Report</a>
@endsection


@section('content')

    <div id="loader" class="body-active d-none">
        <span class="loader" style="z-index: 10"></span>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header pt-3">
                <h4>BIU News</h4>
            </div>
            <div class="card-body">
                <table>

                </table>


                <table class="table table-bordered text-center table-hover vertical-align-middle">
                    <thead class="bg-light-blue py-4">
                        <tr>
                            <th>ID</th>
                            <th>Header</th>
                            <th>Description</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>
                    </thead>
        
                    <tbody class="align-middle content-translate-font">
                        @foreach ($news as $items)
                            <tr>
                                <td>{{ $items->id }}</td>
        
                                <td>
                                    @foreach ($items->newsDetail as $item)
                                         @if ($item->language->key == app()->getLocale())
                                            <div onclick="toggleDescription(this)" class="cursor-pointer "
                                                data-fulltext="{{ $item->header }}">
                                                {{ Str::limit($item->header, 200) }}
                                            </div>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($items->newsDetail as $item)
                                         @if ($item->language->key == app()->getLocale())
                                            <div onclick="toggleDescription(this)" class="cursor-pointer "
                                                data-fulltext="{{ $item->description }}">
                                                {!! Str::limit($item->description, 200) !!}
                                            </div>
                                        @endif
                                    @endforeach
                                </td>
        
                                <td>
                                    @if ($items->image)
                                        <div class="d-flex flex-wrap">
                                            @foreach (array_slice(explode(',', $items->image), 0, 5) as $newsImg)
                                                <div>
                                                    <img class="rounded shadow-sm width-100" loading="lazy"
                                                    src="{{ asset('uploaded/university/news/images/' . $items->id . '/' . $newsImg) }}"
                                                    alt="News Image">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.university.news.edit' , $items->id) }}" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                <div class="d-flex justify-content-end">
                    {!! $news->links() !!}
                </div>

            </div>
        </div>
    </div>

    <script>
        function toggleDescription(paragraph, length = 200) {
            var descriptionDiv = paragraph;
            var fullText = descriptionDiv.getAttribute('data-fulltext');

            if (descriptionDiv.textContent === fullText) {
                descriptionDiv.textContent = descriptionDiv.textContent.substring(0, length) + '...';
            } else {
                descriptionDiv.textContent = fullText;
            }
        }
    </script>


@endsection
