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


    {{-- @livewire('web.admin.share.competition.index', ['news' => $news]) --}}
    @livewire('admin.share.competition-component')


@endsection
