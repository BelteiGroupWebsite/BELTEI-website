@extends('web.client.beltei_university.layout.app')

@section('content')
    <div>
        @foreach ($images as $image)
            <img class="w-80" src="{{ $image }}" alt="">
        @endforeach
    </div>

    <div class="pagination">
        @if ($currentPage > 1)
            <a href="{{ url()->current() }}?page={{ $currentPage - 1 }}">Previous</a>
        @endif

        @if ($currentPage < $totalPages)
            <a href="{{ url()->current() }}?page={{ $currentPage + 1 }}">Next</a>
        @endif
    </div>
@endsection
