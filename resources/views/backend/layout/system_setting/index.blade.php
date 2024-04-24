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
                        <h4 class="card-title">System Setting</h4>
                        <p class="card-description">Setup your system, please provide your<code>provide your valid
                                data</code>.</p>
                        <div class="mt-4">
                            <form class="forms-sample" method="POST" action="{{ route('system.update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col">
                                        <label>System Name:</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('system_name') is-invalid @enderror"
                                            placeholder="Name" name="system_name" value="{{ $setting->system_name ?? '' }}"
                                            required>
                                        @error('system_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Copy Rights Text:</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('copyright') is-invalid @enderror"
                                            placeholder="Copy Rights" name="copyright"
                                            value="{{ $setting->copyright ?? '' }}" required>
                                        @error('copyright')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Contact Number:</label>
                                        <input type="tel"
                                            class="form-control form-control-md border-left-0 @error('contact') is-invalid @enderror"
                                            placeholder="+100 --- ------" name="contact"
                                            value="{{ $setting->contact ?? '' }}" required>
                                        @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Support email:</label>
                                        <input type="email"
                                            class="form-control form-control-md border-left-0 @error('support_email') is-invalid @enderror"
                                            placeholder="example@mail.com" name="support_email"
                                            value="{{ $setting->support_email ?? '' }}" required>
                                        @error('support_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Address :</label>
                                        <input type="text"
                                            class="form-control form-control-md border-left-0 @error('address') is-invalid @enderror"
                                            placeholder="Address" name="address" value="{{ $setting->address ?? '' }}"
                                            required>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col">
                                        <label>Logo:</label>
                                        <input type="file"
                                            class="form-control form-control-md border-left-0 dropify @error('logo') is-invalid @enderror"
                                            name="logo"
                                            data-default-file="@isset($setting){{ asset($setting->logo) }}@endisset">
                                        @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Favicon:</label>
                                        <input type="file"
                                            class="form-control form-control-md border-left-0 dropify @error('favicon') is-invalid @enderror"
                                            name="favicon"
                                            data-default-file="@isset($setting){{ asset($setting->favicon) }}@endisset">
                                        @error('favicon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>About System</label>
                                    <textarea id="editor" class="form-control @error('description') is-invalid @enderror" name="description">{{ $setting->description ?? '' }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Submit</button>
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
