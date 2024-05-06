@extends('web.client.beltei_university.layout.app')

@section('content')

<livewire:university.certificate-search :degree="$degree" :batch="$batch"/>


@endsection
