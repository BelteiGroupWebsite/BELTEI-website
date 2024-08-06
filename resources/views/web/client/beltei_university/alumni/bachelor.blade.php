@extends('web.client.beltei_university.layout.app')

@section('content')
    <div>
        @foreach ($images as $image)
            <img class="w-80" src="{{ $image }}" alt="">
        @endforeach
    </div>

    <div class="my-4 d-flex justify-between">
        @if ($currentPage > 1)
            <a class="btn btn-primary" href="{{ url()->current() }}?page={{ $currentPage - 1 }}">Previous</a>
        @endif

        @if ($currentPage < $totalPages)
            <a class="btn btn-primary" href="{{ url()->current() }}?page={{ $currentPage + 1 }}">Next</a>
        @endif
    </div>
@endsection
