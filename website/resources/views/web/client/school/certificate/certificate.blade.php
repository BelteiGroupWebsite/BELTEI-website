@extends('web.client.school.layout.app')


@section('content')

<div class="container">
    <div class="card">
        <div class="card-header pt-3">
            <h4>Student Certificate</h4>
        </div>
        <div class="card-body">
            <div class="my-3">
                {{-- @livewire('school.certificate-search') --}}
                <livewire:school.certificate-search :program="$program" :grade="$grade" :year="$year"/>

            </div>            
        </div>
    </div>
</div>
    
@endsection
