@extends('backend.app')

@section('title', 'Home page Settings')

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
                        <h4 class="card-title">Update Home page Settings</h4>
                        <p class="card-description">Setup Mainstream Entertainment, please provide your <code>valid
                                data</code>.</p>
                        <div class="mt-4">
                            <form class="forms-sample" action="{{ route('homesetting.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="id"
                                    value="{{ isset($HomePageSetting->id) ? $HomePageSetting->id : '' }}" hidden>
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
                                    <textarea class="form-control @error('step_description') is-invalid @enderror" id="step_description"
                                        name="step_description">
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
                                            name="home_banner_image" id="home_banner_image"
                                            data-default-file="{{ isset($HomePageSetting->home_banner_image) ? asset($HomePageSetting->home_banner_image) : '' }}">
                                        @error('home_banner_image')
                                            <span class="text-danger" role="alert">
                                                <strong>Image is Required and size should not exceed 4MB.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div style="display: flex;justify-content: end;margin-bottom: 20px;">
                                    <button class="btn btn-outline-primary" type="button" onclick="addField()"
                                        style="font-weight: 900">Add step </button>
                                </div>





                                <div id="step_container">
                                    @foreach ($BookinStep as $index => $data)
                                        <input type="text" name="StepId[]"
                                            value="{{ isset($data->id) ? $data->id : '' }}" hidden>
                                        <!-- Input field for Question -->
                                        <div class="step"
                                            style="border: 2px solid #cccccc; margin-bottom:20px; padding: 10px; border-Radius:5px; ">
                                            <div class="form-group row" style="margin-top:45px;">
                                                <label for="step_name[]" class="col-sm-3 col-form-label">Step</label>
                                                <div class="col-sm-9">
                                                    <input type="text"
                                                        class="form-control @error('step_name[]') is-invalid @enderror"
                                                        id="step_name[]" placeholder="Please enter your Question"
                                                        name="step_name[]"
                                                        value="{{ isset($data->step_name) ? $data->step_name : '' }}" required>
                                                    @error('step_name[]')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="step_detail[]" class="col-sm-3 col-form-label">Detail</label>
                                                <div class="col-sm-9">
                                                    <input type="text"
                                                        class="form-control @error('step_detail[]') is-invalid @enderror"
                                                        id="step_detail[]" placeholder="Please enter your Question"
                                                        name="step_detail[]"
                                                        value="{{ isset($data->step_detail) ? $data->step_detail : '' }}" required>
                                                    @error('step_detail[]')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button class="btn btn-outline-warning" type="button"
                                                onclick="removeSocialField(this)"
                                                style="font-weight: 900; margin-bottom: 20px; margin-left: 1389px; margin-top: 4px;"
                                                data-id="{{ $data->id }}">Remove</button>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Buttons for update and cancel -->
                                <div class="d-flex justify-content-end py-3">
                                    <button class="btn btn-primary me-2">Update</button>
                                    <a href="{{ route('home') }}" class="btn btn-danger ">Cancel</a>
                                </div>

                                {{-- <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="{{ route('home') }}" class="btn btn-danger">Cancel</a> --}}
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
        // Count the number of question fields and answer fields in the question container
        var StepFieldsCount = $('#step_container .step_name').length;
        var StepDetailFieldsCount = $('#step_container .step_detail').length;

        // Function to add a new question and answer field
        function addField() {
            // Access the container for the fields
            var FieldsContainer = document.getElementById("step_container");

            // Create a new div for the question and answer field
            var StepnewField = document.createElement("div");
            StepnewField.className = "step";
            // Add styling to the dynamically created div element
            StepnewField.style.border = "2px solid #cccccc";
            StepnewField.style.borderRadius = "5px";
            StepnewField.style.marginTop = "20px";
            StepnewField.style.padding = "10px";
            StepnewField.innerHTML =
                `<div class="form-group row"style="margin-top:45px;">
            <label for="step_name[]" class="col-sm-3 col-form-label">Step</label>
            <div class="col-sm-9">
                <input type="text"
                    class="form-control @error('step_name[]') is-invalid @enderror"
                    id="step_name[]" placeholder="Please enter content title"
                    name="step_name[]"
                    value="" required>
                @error('step_name[]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="step_detail[]" class="col-sm-3 col-form-label">Detail</label>
            <div class="col-sm-9">
                <input type="text"
                        class="form-control @error('step_detail[]') is-invalid @enderror"
                        id="step_detail[]" placeholder="Please enter your Question"
                        name="step_detail[]" value="" required>
                        @error('step_detail[]')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
            </div>
        </div>
        <button class="btn btn-outline-warning" type="button" onclick="removeSocialField(this)" style="font-weight: 900; margin-bottom: 20px; margin-left: 1389px; margin-top: 4px;">Remove</button>`;

            // Append the new question and answer field to the container
            FieldsContainer.appendChild(StepnewField);

            // Increment the count of question and answer fields
            StepFieldsCount++;
            StepDetailFieldsCount++;
        }

        // Function to remove a question and answer field
        function removeSocialField(button) {
            // Access the parent element of the button (the question and answer field)
            var newField = button.parentElement;

            // Remove the question and answer field
            newField.remove();

            // Decrement the count of question and answer fields
            StepFieldsCount--;
            StepDetailFieldsCount--;
        }
        // Attach the removeSocialField function to the Remove button
        window.removeSocialField = function(button) {
            var StepId = $(button).data('id');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route('homesetting.delete', '') }}/' + StepId, // Updated line
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $(button).closest('.step').remove();
                    StepFieldsCount--;
                    StepDetailFieldsCount--;
                    if (response.success === true) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                        });
                        Toast.fire({
                            icon: "success",
                            title: "Deleted Successfully"
                        });
                    } else if (response.errors) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                        });
                        Toast.fire({
                            icon: "error",
                            title: "Deleted Unsuccessful"
                        });
                    } else {

                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        };
    </script>
@endpush
