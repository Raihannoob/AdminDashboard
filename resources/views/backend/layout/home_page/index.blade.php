@extends('backend.app')

@section('title', 'Create Product')

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
                        <h4 class="card-title">Create Product</h4>
                        <p class="card-description">Setup Mainstream Entertainment, please provide your <code>valid
                                data</code>.</p>
                        <div class="mt-4">
                            <form class="forms-sample" action="{{route('homesetting.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="id" value="{{ isset($HomePageSetting->id) ? $HomePageSetting->id : '' }}" hidden>
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hero_title">Hero title</label>
                                            <input type="text"
                                                class="form-control @error('hero_title') is-invalid @enderror"
                                                id="hero_title" placeholder="Please enter hero title" name="hero_title"
                                                value="{{ isset($HomePageSetting->hero_title) ? $HomePageSetting->hero_title : '' }}">
                                            @error('hero_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="step_title">Step title</label>
                                            <input type="text"
                                                class="form-control @error('step_title') is-invalid @enderror"
                                                id="step_title" placeholder="Please enter hero title" name="step_title"
                                                value="{{ isset($HomePageSetting->step_title) ? $HomePageSetting->step_title : '' }}">
                                            @error('step_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="step_description">Step Description</label>
                                    <textarea class="form-control @error('step_description') is-invalid @enderror" id="step_description" name="step_description">
                                        {{ isset($HomePageSetting->step_description) ? $HomePageSetting->step_description : '' }}
                                    </textarea>
                                    @error('step_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="home_banner_image">Step Banner Image:</label>
                                        <input type="file"
                                            class="form-control form-control-md border-left-0 dropify @error('home_banner_image') is-invalid @enderror"
                                            name="home_banner_image" id="home_banner_image" data-default-file="{{ isset($HomePageSetting->home_banner_image) ? asset($HomePageSetting->home_banner_image) : '' }}" >
                                        @error('home_banner_image')
                                            <span class="text-danger" role="alert">
                                                <strong>Image is Required and size should not exceed 4MB.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="{{ route('home') }}" class="btn btn-danger">Cancel</a>
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
            .create(document.querySelector('#step_description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
