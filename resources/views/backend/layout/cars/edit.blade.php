@extends('backend.app')

@section('title', 'Update Users')

@push('style')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 150px;
        }
    </style>
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Users</h4>
                        <p class="card-description">Setup Mainstream Entertainment, please provide your <code>valid
                                data</code>.</p>
                        <div class="mt-4">
                            <form class="forms-sample" action="{{ route('happyuser.update', ['id' => $happyuser->id]) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="author_name">Author Name:</label>
                                    <input type="text" 
                                        class="form-control form-control-md border-left-0 @error('author_name') is-invalid @enderror"
                                        placeholder="Please enter your author name" name="author_name" id="author_name"
                                        value="{{ old('author_name', $happyuser->author_name) }}">
                                    @error('author_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="author_type">Author Type:</label>
                                    <input type="text"
                                        class="form-control form-control-md border-left-0 @error('author_type') is-invalid @enderror"
                                        placeholder="Please enter your author type" name="author_type" id="author_type"
                                        value="{{ old('author_type', $happyuser->author_type) }}">
                                    @error('author_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">
                                        {{ $happyuser->description }}
                                    </textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="image">Image:</label>
                                        <input type="file"
                                            class="form-control form-control-md border-left-0 dropify @error('image') is-invalid @enderror"
                                            name="image" id="image"
                                            data-default-file="{{ asset($happyuser->image) }}">
                                        @error('image')
                                            <span class="text-danger" role="alert">
                                                <strong>Image is Required and size should not exceed 4MB.</strong><br>
                                                <strong>Now you are seeing your previous image..</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Update</button>
                                <a href="{{ route('happyuser.index') }}" class="btn btn-danger">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>

    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
