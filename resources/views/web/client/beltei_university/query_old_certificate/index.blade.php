@extends('web.client.beltei_university.layout.app')

@section('content')
    <div>

        @if (session('sorry'))
            <div id="alert-box" class="alert alert-warning alert-dismissible fade show" role="alert">
                <p>{{ session('sorry') }}</p>
            </div>
        @endif

        <livewire:university.certificate-search :degree="3" :batch="$batch" />

    </div>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if the alert box is present
            const alertBox = document.getElementById('alert-box');
            if (alertBox) {
                // Set a timer to hide the alert box after 1 minute
                setTimeout(function() {
                    alertBox.classList.remove('show'); // Removes 'show' class to hide the alert
                    alertBox.style.opacity = '0'; // Fades out the alert
                }, 60000); // 60000 milliseconds = 1 minute
            }
        });
    </script> --}}
    
@endsection
