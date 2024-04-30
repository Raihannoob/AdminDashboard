@extends('backend.app')

@section('title', 'Create Cars')

@push('style')
    {{-- select2  --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 150px;
        }

        .select2-container--default .select2-selection--multiple {
            /* background-color: #f3f6fa;
                                                                            border: 0px solid #aaa;
                                                                            border-radius: 0px;
                                                                            cursor: text;
                                                                            padding-bottom: 5px;
                                                                            padding-right: 5px;
                                                                            position: relative; */
        }
    </style>
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Car</h4>
                        <p class="card-description">Setup Cars, please provide your <code>valid
                                data</code>.</p>
                        <div class="mt-4">
                            <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="car_tittle">Car Name:</label>
                                    <input type="text" required
                                        class="form-control form-control-md border-left-0 @error('car_tittle') is-invalid @enderror"
                                        placeholder="Please enter your car name" name="car_tittle" id="car_tittle"
                                        value="{{ old('car_tittle', '') }}">
                                    @error('car_tittle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">
                                        {{ old('description', '') }}
                                    </textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="car_type">Car Type:</label>
                                            <select
                                                class="form-control form-control-md border-left-0 @error('car_type') is-invalid @enderror"
                                                name="car_type" id="car_type">
                                                <option value="">Select Type</option>
                                                @foreach ($CarType as $CarType)
                                                    <option value="{{ $CarType->title }}"
                                                        {{ old('car_type') == $CarType->title ? 'selected' : '' }}>
                                                        {{ $CarType->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('car_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fuel_type">Fuel Type:</label>
                                            <select
                                                class="form-control form-control-md border-left-0 @error('fuel_type') is-invalid @enderror"
                                                name="fuel_type" id="fuel_type">
                                                <option class="dropdown-item" value=""
                                                    {{ old('fuel_type') == '' ? 'selected' : '' }}>Select Type
                                                </option>
                                                <option class="dropdown-item" value="Petrol"
                                                    {{ old('fuel_type') == 'Petrol' ? 'selected' : '' }}>Petrol
                                                </option>
                                                <option class="dropdown-item" value="Diesel"
                                                    {{ old('fuel_type') == 'Diesel' ? 'selected' : '' }}>Diesel
                                                </option>
                                                <option class="dropdown-item" value="Diesel"
                                                    {{ old('fuel_type') == 'Diesel' ? 'selected' : '' }}>Diesel
                                                </option>
                                                <option class="dropdown-item" value="Hybrid"
                                                    {{ old('fuel_type') == 'Hybrid' ? 'selected' : '' }}>Hybrid
                                                </option>
                                                <option class="dropdown-item" value="Electric"
                                                    {{ old('fuel_type') == 'Electric' ? 'selected' : '' }}>Electric
                                                </option>
                                                <option class="dropdown-item" value="LPG"
                                                    {{ old('fuel_type') == 'LPG' ? 'selected' : '' }}>LPG
                                                </option>
                                                <option class="dropdown-item" value="CNG"
                                                    {{ old('fuel_type') == 'CNG' ? 'selected' : '' }}>CNG
                                                </option>
                                            </select>
                                            @error('fuel_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="total_bagage">Total Bagage:</label>
                                            <input type="number" required
                                                class="form-control form-control-md border-left-0 @error('total_bagage') is-invalid @enderror"
                                                placeholder="Enter Total Allowed Baggage" name="total_bagage"
                                                id="total_bagage" value="{{ old('total_bagage', '') }}">
                                            @error('total_bagage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="total_person">Total Person:</label>
                                            <input type="number" required
                                                class="form-control form-control-md border-left-0 @error('total_person') is-invalid @enderror"
                                                placeholder="Enter Total Allowed Person" name="total_person"
                                                id="total_person" value="{{ old('total_person', '') }}">
                                            @error('total_person')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="total_seat_number">Total Seats:</label>
                                            <input type="number" required
                                                class="form-control form-control-md border-left-0 @error('total_seat_number') is-invalid @enderror"
                                                placeholder="Enter Total Seat Number" name="total_seat_number"
                                                id="total_seat_number" value="{{ old('total_seat_number', '') }}">
                                            @error('total_seat_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price_per_day">Price Per Day:</label>
                                            <input type="number" required
                                                class="form-control form-control-md border-left-0 @error('price_per_day') is-invalid @enderror"
                                                placeholder="Enter Price Per Day" name="price_per_day" id="price_per_day"
                                                value="{{ old('price_per_day', '') }}">
                                            @error('price_per_day')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price_per_week">Price Per Week:</label>
                                            <input type="number" required
                                                class="form-control form-control-md border-left-0 @error('price_per_week') is-invalid @enderror"
                                                placeholder="Enter Price Per Week" name="price_per_week"
                                                id="price_per_week" value="{{ old('price_per_week', '') }}">
                                            @error('price_per_week')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price_per_month">Price Per Month:</label>
                                            <input type="number" required
                                                class="form-control form-control-md border-left-0 @error('price_per_month') is-invalid @enderror"
                                                placeholder="Enter Price Per Month" name="price_per_month"
                                                id="price_per_month" value="{{ old('price_per_month', '') }}">
                                            @error('price_per_month')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="included">Included:</label>

                                            <select class="js-example-basic-multiple form-control" name="included[]"
                                                multiple="multiple">
                                                @foreach ($CarAmenities as $item)
                                                    @if ($item->type === 'included')
                                                        <option value="{{ $item->title }}">{{ $item->title }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>

                                            @error('car_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="not_included">Not
                                                Included:</label>

                                            <select class="js-example-basic-multiple form-control" name="not_included[]"
                                                multiple="multiple">
                                                @foreach ($CarAmenities as $item)
                                                    @if ($item->type === 'not_included')
                                                        <option value="{{ $item->title }}">{{ $item->title }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>

                                            @error('car_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="pick_up_from">Pick up
                                                Locations:</label>

                                            <select class="js-example-basic-multiple form-control" name="pick_up_from[]"
                                                multiple="multiple">
                                                <option value="">Select Location
                                                </option>
                                                @foreach ($CarLocation as $item)
                                                    @if ($item->type === 'pick_up')
                                                        <option value="{{ $item->location }}">{{ $item->location }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>

                                            @error('pick_up_from')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col">
                                        <label for="home_banner_image">Home Banner Image:</label>
                                        <input type="file" required
                                            class="form-control form-control-md border-left-0 dropify @error('home_banner_image') is-invalid @enderror"
                                            name="home_banner_image" id="home_banner_image"
                                            value="{{ old('home_banner_image', '') }}">
                                        @error('home_banner_image')
                                            <span class="text-danger" role="alert">
                                                <strong>Image is Required and size should not exceed 4MB.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col">
                                        <label for="tubmbnil_image">Car Tubmbnil Image:</label>
                                        <input type="file" required
                                            class="form-control form-control-md border-left-0 dropify @error('tubmbnil_image') is-invalid @enderror"
                                            name="tubmbnil_image" id="tubmbnil_image"
                                            value="{{ old('tubmbnil_image', '') }}">
                                        @error('tubmbnil_image')
                                            <span class="text-danger" role="alert">
                                                <strong>Image is Required and size should not exceed 4MB.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="form-group row" id="imageUploadContainer">
                                    <div class="col">
                                        <label for="image">Car Thumbnail Image:</label>
                                        <input type="file" required class="form-control form-control-md border-left-0 dropify" name="image[]" id="image" data-show-remove="true" value="{{ old('image', '') }}">
                                        @error('image')
                                            <span class="text-danger" role="alert">
                                                <strong>Image is Required and size should not exceed 4MB.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="button" id="addImageInput" class="btn btn-primary">Add Another Image</button> --}}
                                <button type="button" id="addImageInput" class="btn btn-primary" style="margin-left: 1368px;margin-bottom: 23px;">Add Another Image</button>
                                {{-- <div id="imageUploadContainer"style="border: 1px solid #ced4da; padding: 10px;">
                                    <div class="form-group row">
                                        <div class="col">
                                            <label for="image">Gallary Image:</label>
                                            <input type="file" required class="form-control form-control-md border-left-0 dropify" name="image[]" id="image" data-show-remove="true" value="{{ old('image', '') }}">
                                            @error('image')
                                                <span class="text-danger" role="alert">
                                                    <strong>Image is Required and size should not exceed 4MB.</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="form-group row" id="imageUploadContainer">
                                    <div class="col">
                                        <label for="image">Gallary Image:</label>
                                        <input type="file" required class="form-control form-control-md border-left-0 dropify" name="image[]" id="image" data-show-remove="true" value="{{ old('image', '') }}">
                                        @error('image')
                                            <span class="text-danger" role="alert">
                                                <strong>Image is Required and size should not exceed 4MB.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="{{ route('product.index') }}" class="btn btn-danger">Cancel</a>
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
    {{-- for select2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // $(#interior).select2();
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
   {{-- <script>
    document.getElementById('addImageInput').addEventListener('click', function() {
        var container = document.getElementById('imageUploadContainer');
        var newInput = document.createElement('div');
        newInput.classList.add('form-group', 'row');
        newInput.innerHTML = `
            <div class="col">
                <label for="image">Gallary Image:</label>
                <input type="file" required class="form-control form-control-md border-left-0 dropify" name="image[]" value="{{ old('image', '') }}" data-show-remove="true">
                <button type="button" class="btn btn-danger remove-image" style="margin-top: 10px;margin-left: 1429px;">Remove</button>
            </div>
        `;
        container.appendChild(newInput);

        // Initialize Dropify for the new input field
        $('.dropify').dropify();
    });

    // Event delegation to handle remove button click for dynamically added fields
    $('#imageUploadContainer').on('click', '.remove-image', function() {
        $(this).parent().parent().remove();
    });
</script> --}}
<script>
    document.getElementById('addImageInput').addEventListener('click', function() {
        var container = document.getElementById('imageUploadContainer');
        var newInput = document.createElement('div');
        newInput.classList.add('col');
        newInput.innerHTML = `
            <label for="image">Gallary Image:</label>
            <input type="file" required class="form-control form-control-md border-left-0 dropify" name="image[]" value="{{ old('image', '') }}" data-show-remove="true">
            <button type="button" class="btn btn-danger remove-image" style="margin-top: 10px;"">X</button>
        `;
        container.appendChild(newInput);

        // Initialize Dropify for the new input field
        $('.dropify').dropify();
    });

    // Event delegation to handle remove button click for dynamically added fields
    $('#imageUploadContainer').on('click', '.remove-image', function() {
        $(this).parent().remove();
    });
</script>
@endpush
