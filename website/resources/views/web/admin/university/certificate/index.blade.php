@extends('web.admin.layouts.app')
@section('content-header', 'User')
@section('sub-header', 'User')



@section('setting-link')
    @if (Auth::user()->role_id < 4)
        <a class="dropdown-item" href="{{ route('admin.university.certificate.create') }}">Create Certificate</a>
    @endif
    {{-- <a class="dropdown-item" href="javascript:;">Another action</a>
    <a class="dropdown-item" href="javascript:;">Something else here</a> --}}
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:;">Report</a>
@endsection


@section('content')


    <div class="container">
        <div class="card">
            <div class="card-header pt-3">
                <h4>Student Certificate</h4>
            </div>
            <div class="card-body">
                <table>

                </table>




            </div>
        </div>
    </div>


@endsection
