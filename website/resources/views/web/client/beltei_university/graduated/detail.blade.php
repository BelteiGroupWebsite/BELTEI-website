@extends('web.client.beltei_university.layout.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="my-3">
                {{-- @livewire('school.certificate-search') --}}
                {{-- <livewire:school.certificate-search :program="$program" :grade="$grade" :year="$year"/> --}}
                <livewire:university.certificate-search :degree="$degree" :batch="$batch"/>

            </div>            
        </div>
    </div>
</div>


@endsection
