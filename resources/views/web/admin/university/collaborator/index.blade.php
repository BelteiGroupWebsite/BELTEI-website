@extends('web.admin.layouts.app')
@section('content-header', 'User')
@section('sub-header', 'User')



@section('setting-link')
    @if (Auth::user()->role_id < 4)
        <a class="dropdown-item" type="button" class="btn btn-success" data-bs-toggle="modal"
            data-bs-target="#collaboratorModal">Add New Collaborator</a>
    @endif
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:;">Report</a>
@endsection


@section('content')
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @livewire('university.collaborator.index')


@endsection
