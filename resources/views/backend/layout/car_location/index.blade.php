@extends('backend.app')

@section('title')
    Car Locations 
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatable/css/datatables.min.css') }}">
@endpush


@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Car Locations</h4>
                        <p class="card-description">Setup your FAQ, please provide your<code>provide your valid data</code>.
                        </p>
                        <div style="display: flex;justify-content: end;">
                            {{-- <a href="{{ route('productcategory.create') }}" class="btn btn-primary">Add Category</a> --}}
                            <a href="jvascript:void(0)" class="btn btn-outline-primary" id="addServiceItem">Add Locations </a>
                        </div>
                        <div class="table-responsive mt-4 p-4">
                            <table class="table table-hover" id="data-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create Modal -->
        <div class="modal fade" id="CatagoryItemModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="POST" id="CatagoryItemForm">
                        <div class="modal-header">
                            <h1 class="modal-title fs-3" id="exampleModalLabel" style="font-size: 1.19rem;">Car Locations
                            </h1>
                            <button type="button" class="btn btn-inverse-danger" onclick="closeModal()"
                                aria-label="Close">X</button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="id" id="CatagoryItemID" readonly>
                            <div class="mb-3">
                                <label for="type" class="col-form-label">Type</label>
                                <div>
                                    <select class="form-control @error('type') is-invalid @enderror"
                                        name="type" id="type" required>
                                        <option class="dropdown-item" value="" disabled selected>Select Type</option>
                                        <option class="dropdown-item" value="pick_up">Pick Up</option>
                                        <option class="dropdown-item" value="drop_off">Drop Off</option>
                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="location" class="col-form-label">Location Name</label>
                                <div>
                                    <input type="text" class="form-control @error('location') is-invalid @enderror"
                                        id="location" placeholder="Please enter your location" name="location" value="" required>
                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div> <!-- Close modal-body here -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-inverse-danger" onclick="closeModal()">Close</button>
                            <button type="submit" class="btn btn-inverse-success">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection


@push('script')
    {{-- Datatable --}}
    <script src="{{ asset('backend/vendors/datatable/js/datatables.min.js') }}"></script>
    {{-- sweet alart --}}
    <script src="{{ asset('backend/vendors/sweetalert/sweetalert2@11.js') }}"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                }
            });
            if (!$.fn.DataTable.isDataTable('#data-table')) {
                let dTable = $('#data-table').DataTable({
                    order: [],
                    lengthMenu: [
                        [25, 50, 100, 200, 500, -1],
                        [25, 50, 100, 200, 500, "All"]
                    ],
                    processing: true,
                    responsive: true,
                    serverSide: true,

                    language: {
                        processing: `<div class="text-center">
                        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div>
                        </div>`
                    },

                    scroller: {
                        loadingIndicator: false
                    },
                    pagingType: "full_numbers",
                    dom: "<'row justify-content-between table-topbar'<'col-md-2 col-sm-4 px-0'l><'col-md-2 col-sm-4 px-0'f>>tipr",
                    ajax: {
                        url: "{{ route('car-location.index') }}",
                        type: "get",
                    },

                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'type',
                            name: 'type',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'location',
                            name: 'location',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'status',
                            name: 'status',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],
                });

                dTable.buttons().container().appendTo('#file_exports');

                new DataTable('#example', {
                    responsive: true
                });
            }
        });


        // Status Change Confirm Alert
        function showStatusChangeAlert(id) {
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to update the status?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
            }).then((result) => {
                if (result.isConfirmed) {
                    statusChange(id);
                }
            });
        }

        // Status Change
        function statusChange(id) {
            let url = '{{ route('car-location.status', ':id') }}';
            $.ajax({
                type: "GET",
                url: url.replace(':id', id),
                success: function(resp) {
                    console.log(resp);
                    // Reloade DataTable
                    $('#data-table').DataTable().ajax.reload();
                    if (resp.success === true) {
                        // show toast message
                        toastr.success(resp.message);
                    } else if (resp.errors) {
                        toastr.error(resp.errors[0]);
                    } else {
                        toastr.error(resp.message);
                    }
                }, // success end
                error: function(error) {
                    // location.reload();
                } // Error
            })
        }

        // delete Confirm
        function showDeleteConfirm(id) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure you want to delete this record?',
                text: 'If you delete this, it will be gone forever.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteItem(id);
                }
            });
        }


        // Delete Button
        function deleteItem(id) {
            let url = '{{ route('car-location.destroy', ':id') }}';
            let csrfToken = '{{ csrf_token() }}';
            $.ajax({
                type: "DELETE",
                url: url.replace(':id', id),
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(resp) {
                    console.log(resp);
                    // Reloade DataTable
                    $('#data-table').DataTable().ajax.reload();
                    if (resp.success === true) {
                        // show toast message
                        toastr.success(resp.message);

                    } else if (resp.errors) {
                        toastr.error(resp.errors[0]);
                    } else {
                        toastr.error(resp.message);
                    }
                }, // success end
                error: function(error) {
                    // location.reload();
                } // Error
            })
        }
    </script>
    {{-- Store Data  --}}
    <script>
        $(document).ready(function() {
            $('#addServiceItem').on('click', function() {
                // Clear input fields
                $('#CatagoryItemID').val('');
                $('#type').val('').prop('selected', true);
                $('#location').val('');
                $('#CatagoryItemModal').modal('show');
            });
            $('#CatagoryItemModal').on('hidden.bs.modal', function() {
                // Set the default value of the select dropdown to "Select Type"
                $('#type').val('').prop('selected', true);
            });
        });

        $('#CatagoryItemForm').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "{{ route('car-location.store') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(resp) {
                    console.log(resp.success);
                    if (resp.success == true) {
                        $('#data-table').DataTable().ajax.reload();
                        $('#CatagoryItemModal').modal('hide');
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
                            title: resp.message
                        });
                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        })
    </script>

    {{-- Update Modal Open --}}
 
    <script>
            function showEditForm(id) {
                var url = '{{ route('car-location.edit', ':id') }}';
                console.log(url);
                $.ajax({
                    type: "GET",
                    url: url.replace(':id', id),
                    success: function(resp) {
                        console.log(resp);
                        // Reloade DataTable
                        $('#data-table').DataTable().ajax.reload();
                        if (resp.success === true) {
                            // show toast message

                            $("#CatagoryItemID").val(resp.data.id);
                            $("#location").val(resp.data.location);
                            $("#type").val(resp.data.type).trigger('change');
                            $('#CatagoryItemModal').modal('show');
                        } else if (resp.errors) {

                        } else {

                        }
                    }, // success end
                    error: function(error) {
                        location.reload();
                    } // Error
                })
            }
        // 
    </script>
    {{-- close modal function --}}
    <script>
        function closeModal() {
            $('#CatagoryItemModal').modal('hide');
        }
    </script>
@endpush
