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

    <div id="loader" class="body-active d-none">
        <span class="loader" style="z-index: 10"></span>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>BELTEI NEWS</h5>
            </div>
            <div class="card-body">

                <div>
                    @if (Session::has('success'))
                        <div class="alert alert-info">
                            {{Session::get('success')}}
                        </div>
                    @endif
                </div>

                <form action="{{ route('admin.university.news.update' , $news->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    {{-- {{ dd($news->newsDetail) }} --}}

                    <div class="row mb-3 me-0 pe-0">
                        <div class="col-6 mb-3">
                            <label for="category" class="form-label"><b>Category</b></label>
                            <div class="form-group d-flex">
                                <select required class="form-control" name="category" id="category">
                                    <option selected disabled value="">Please select news category</option>
                                    <option value="1" {{ $news->category == 1 ? 'selected' : '' }}>Beltei Construction</option>
                                    <option value="2" {{ $news->category == 2 ? 'selected' : '' }}>Beltei School</option>
                                    <option value="3" {{ $news->category == 3 ? 'selected' : '' }}>Beltei University</option>
                                    <option value="4" {{ $news->category == 4 ? 'selected' : '' }}>Beltei International Relation</option>
                                    <option value="5" {{ $news->category == 5 ? 'selected' : '' }}>Beltei Tour and Travel</option>
                                    <option value="6" {{ $news->category == 6 ? 'selected' : '' }}>Beltei Test Center</option>
                                    <option value="7" {{ $news->category == 7 ? 'selected' : '' }}>Beltei Charity</option>
                                    <option value="8" {{ $news->category == 8 ? 'selected' : '' }}>BIU Field Trip</option>
                                    <option value="9" {{ $news->category == 9 ? 'selected' : '' }}>BIU Practical Training</option>
                                    <option value="10" {{ $news->category == 10 ? 'selected' : '' }}>BICC</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="date" class="form-label"><b>Celebration Date</b></label>
                            <div class="form-group d-flex">
                                <input required class="form-control @error('date') is-invalid @enderror" value="{{ $news->date }}" name="date" id="date" type="date">
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row row-cols-1 row-cols-lg-{{ $news->newsDetail->count() }} mb-3 me-0 pe-0" id="academicYearDiv">
                        @foreach ($news->newsDetail as $item)            
                            <div class="col mb-3">
                                <label for="header-{{ $item->language->key }}" class="form-label">
                                    Header {{ $item->language->lang }}
                                    <i class="text-danger">*</i>
                                    @error('header-' . $item->language->key)
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </label>
                                <textarea maxlength="255" required placeholder="{{ $item->language->key }}" class="form-control Battambang-Regular @error('header-' . $item->language->key) is-invalid @enderror" name="header-{{ $item->language->key }}" id="header-{{ $item->language->key }}" cols="30" rows="3">{{ old('header-' . $item->language->key, $item->header) }}</textarea>
                            </div>
                            <div class="col mb-3">
                                <label for="description-{{ $item->language->key }}" class="form-label">
                                    Description {{ $item->language->lang }}
                                    <i class="text-danger">*</i>
                                    @error('description-' . $item->language->key)
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </label>
                                <textarea placeholder="{{ $item->language->key }}" class="mytiny w-100 form-control Battambang-Regular @error('description-' . $item->language->key) is-invalid @enderror" name="description-{{ $item->language->key }}" id="description-{{ $item->language->key }}" cols="30" rows="10">{{ old('description-' . $item->language->key, $item->description) }}</textarea>
                            </div>
                        @endforeach
                    </div>
                    
    
                    <div class="row mb-3 me-0 pe-0">
                        <div class="col-12 mb-3">
                            <label for="" class="form-label"><b>News Images</b> <i
                                    class="text-danger">( Multiples )</i></label>
                            <div class="form-group d-flex">
                                <input class="form-control @error('images') is-invalid @enderror" multiple  name="images[]" id="" accept=".jpg, .png, .jpeg, .webp" type="file">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            @if ($news->image)
                            <div class="d-flex flex-wrap">
                                @foreach (explode(',', $news->image) as $newsImg)
                                <div>
                                    <img class="rounded shadow-sm width-120" loading="lazy"
                                        src="{{ asset('uploaded/university/news/images/' . $news->id . '/' . $newsImg) }}"
                                        alt="News Image">
                                </div>
                                @endforeach
                            </div>
                        @endif
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success ">submit</button>
                    </div>

                </form>
                

            </div>
        </div>
    </div>


    <script src="{{ asset('assets/plugins/tiny/tinymce-min.js') }}"></script>

    <script>
        tinymce.init({
            selector: 'textarea.mytiny', // Replace this CSS selector to match the placeholder element for TinyMCE
            // height: 400,
            height: 555,
            // width: '50%',
            plugins: [
                'advlist', 'autolink',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | removeformat | a11ycheck code table help'
        });
    </script>
    
@endsection
