<div>
    @foreach ($utb_posters->sortBy('order_column') as $poster)
        <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0" src="{{ asset('storage/' . $poster->image) }}"
            alt="">
    @endforeach
</div>
