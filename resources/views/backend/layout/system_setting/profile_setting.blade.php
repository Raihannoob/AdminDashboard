@extends('backend.app')

@section('title', 'Dashboard')

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
                        <h4 class="card-title">Profile Setting</h4>
                        <p class="card-description">Setup your profile, please provide your<code>provide your valid
                                data</code>.</p>
                        <div class="mt-4">
                            <form class="forms-sample" method="POST" action="{{ route('system.update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>User Name:</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('name') is-invalid @enderror"
                                            placeholder="Name" name="name" value="{{ Auth::user()->name}}"
                                            required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>Email :</label>
                                        <input type="email"
                                            class="form-control form-control-md border-left-0 @error('email') is-invalid @enderror"
                                            placeholder="Email" name="email"
                                            value="{{ Auth::user()->email }}" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </form>

                            <h4 class="card-title mt-4">Update your password</h4>

                            <form class="forms-sample mt-4" method="POST" action="{{ route('system.update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>Current Password:</label>
                                        <input type="password"
                                            class="form-control form-control-md border-left-0 @error('name') is-invalid @enderror"
                                            placeholder="Current Password" name="name"
                                            required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>Change Password :</label>
                                        <input type="password"
                                            class="form-control form-control-md border-left-0 @error('email') is-invalid @enderror"
                                            placeholder="Change Password" name="email"
                                             required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>Confirm Password :</label>
                                        <input type="password"
                                            class="form-control form-control-md border-left-0 @error('email') is-invalid @enderror"
                                            placeholder="Confirm Password" name="email" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="{{route('home')}}" class="btn btn-danger me-2">Cancle</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/41.3.1/ckeditor.min.js"
        integrity="sha512-Qhh+VfoTh+a2tbFw+u86fMKfvyNyHR4aTVbivQAIkFQPcXFa1S0ZlTcib0HXiT4XBVS0a/FtSGamQ9YfXIaPRg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error(error.stack);
            });

        $('.dropify').dropify();
    </script>
@endpush
