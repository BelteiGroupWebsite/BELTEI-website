<div class="row gy-2 justify-content-center">
    {{-- Do your work, then step back. --}}

    @foreach ($posters as $poster)
        <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0" src="{{ asset('storage/' . $poster->image) }}"
            alt="">
    @endforeach

</div>
