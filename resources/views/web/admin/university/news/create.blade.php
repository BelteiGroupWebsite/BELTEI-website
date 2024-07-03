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

                <form action="{{ route('admin.university.news.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                
                    <div class="row row-cols-1 row-cols-lg-{{ $languages->count() }} mb-3 me-0 pe-0" id="academicYearDiv">
    
                        @foreach ($languages as $language)            
                            <div class="col mb-3">
                                <label for="" class="form-label">Header {{ $language->lang }}<i class="text-danger"></i></label>
                                <textarea  required placeholder="{{ $language->key }}" class="form-control Battambang-Regular @error('header-{{ $language->key }}') is-invalid @enderror " name="header-{{ $language->key }}"  id="" cols="30" rows="3"></textarea>
                            </div>
                        @endforeach

                        @foreach ($languages as $language)            
                            <div class="col mb-3">
                                <label for="" class="form-label">Description {{ $language->lang }}<i class="text-danger"></i></label>
                                <textarea  required placeholder="{{ $language->key }}" class="myeditorinstance form-control Battambang-Regular @error('description-{{ $language->key }}') is-invalid @enderror" name="description-{{ $language->key }}"  id="" cols="30" rows="10"></textarea>
                            </div>
                        @endforeach
                        
                    </div>
    
                    <div class="row mb-3 me-0 pe-0">
                        <div class="col-6 mb-3">
                            <label for="" class="form-label"><b>Celebration Date</b></label>
                            <div class="form-group d-flex">
                                <input required class="form-control @error('date') is-invalid @enderror"   name="date" id=""  type="date">
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="" class="form-label"><b>Certificate Information</b> <i
                                    class="text-danger">(Excel:
                                    .xlsx)</i></label>
                            <div class="form-group d-flex">
                                <input required class="form-control @error('images') is-invalid @enderror" multiple  name="images[]" id="" accept=".jpg, .png, .jpeg, .webp" type="file">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success ">submit</button>
                    </div>

                </form>
                

            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('assets/plugins/tiny/tinymce-min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });


        tinymce.init({
            selector: 'textarea.myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            // height: 400,
            height: 555,
            // width: '50%',
            // plugins: [
            //     'advlist', 'autolink',
            //     'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
            //     'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            // ],
            // toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
            //     'alignleft aligncenter alignright alignjustify | ' +
            //     'bullist numlist outdent indent | removeformat | a11ycheck code table help'
        });
    </script>
    
@endsection
