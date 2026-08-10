@extends('web.client.beltei_university.layout.app')

@section('content')
    @php
        $id = request()->query('id');
        $images = [];

        if ($id) {
            $folderPath = public_path("asset/img/biu/booklets/undergraduate/$id");

            if (File::exists($folderPath)) {
                // Find all matching image files
                $files = File::files($folderPath);

                // Sort files naturally (e.g., page_1, page_2, ..., page_10)
                usort($files, function ($a, $b) {
                    return strnatcmp($a->getFilename(), $b->getFilename());
                });

                foreach ($files as $file) {
                    $extension = strtolower($file->getExtension());
                    if (in_array($extension, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                        $images[] = asset("asset/img/biu/booklets/undergraduate/$id/" . $file->getFilename());
                    }
                }
            }
        }
    @endphp

    <div class="header"></div>

    <div>
        <div class="container my-4 translate-font">
            <div class="bg-header-color p-3 text-white text-center">
                <h5 id="header-title" class="translate-font">{{ __('beltei_university/faculty/faculty.f' . $id) }}</h5>
            </div>

            <div class="card">
                <div class="card-body shadow d-flex flex-column align-items-center">

                    <div class="pb-3 text-center" id="booklets">
                        @forelse ($images as $image)
                            <img class="w-75 mb-3" src="{{ $image }}" alt="Booklet Page">
                        @empty
                            <p class="text-muted my-4">No images found for this booklet.</p>
                        @endforelse
                    </div>

                    @if (count($images) > 0)
                        <div class="file-count text-muted">
                            <p class="translate-font mb-0">
                                {{ __('beltei_university/faculty/faculty.Page') }} 1
                                {{ __('beltei_university/faculty/faculty.of') }} {{ count($images) }}
                            </p>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
