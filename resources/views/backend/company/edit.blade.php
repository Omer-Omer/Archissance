@extends('backend.layouts.master')
@push('header')


    <!-- FilePond core library -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

    <!-- FilePond file validation plugin -->
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

    <!-- (Optional) Add more plugins as needed -->
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <style>
        .cke_notifications_area {
            display: none;
        }

        .required {
            color: red;
        }
        .alert-danger {
            background-color: white !important;
            color: red;
        }
        .custom-images {
            position: relative; /* Allows absolute positioning for child elements */
            display: inline-block; /* Ensures images are side by side */
            margin: 10px; /* Adds spacing between images */
        }

        .custom-images .position-absolute {
            position: absolute; /* Position the delete button absolutely */
            top: 0; /* Aligns to the top */
            right: 0; /* Aligns to the right */
            margin: 5px; /* Adds a little margin */
        }

        .custom-images .btn-danger {
            color: white; /* Text color */
            background-color: red !important; /* Background color */
            border-radius: 50%; /* Makes it circular */
            width: 30px; /* Width of the button */
            height: 30px; /* Height of the button */
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>

@endpush
@section('content')

    <div style="margin-top: 50px;">
        <div class="row">
            <h4>Edit Company</h4>
            @include('backend.layouts.messages')
            <div class="col-12 mb-4">
                <form id="form-submit"  action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card border-0 shadow components-section">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label>Name</label>
                                            <span class="required">*</span>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $company->name ?? '') }}">
                                        </div>
                                        <!-- End of Form -->
                                    </div>
                                    <div class="col-lg-6">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label>Introduction</label>
                                            <span class="required">*</span>
                                            <textarea class="form-control" name="introduction" id="introduction" cols="30" rows="5">
                                                {{ old('introduction', $company->introduction ?? '') }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label>Details</label>
                                            <span class="required">*</span>
                                            <textarea class="form-control" name="details" id="details" cols="30" rows="5">
                                                {{ old('details', $company->details ?? '') }}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label>Apparel Categories</label>
                                            <span class="required">*</span>
                                            <textarea name="apparel_categories" id="apparel_categories">
                                                {{ old('apparel_categories', $company->apparel_categories ?? '') }}
                                            </textarea>
                                        </div>
                                        <!-- End of Form -->
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label>Manufacturing</label>
                                            <span class="required">*</span>
                                            <textarea name="manufacturing" id="manufacturing">
                                                {{ old('manufacturing', $company->manufacturing ?? '') }}
                                            </textarea>
                                        </div>
                                        <!-- End of Form -->
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label>Contact</label>
                                            <span class="required">*</span>
                                            <textarea name="contact" id="contact">
                                                {{ old('contact', $company->contact ?? '') }}
                                            </textarea>
                                        </div>
                                        <!-- End of Form -->
                                    </div>
                                </div>

                                <!-- Dropzone for Images -->


                                <div class="row g-1">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="images">Upload Images</label>
                                            <input type="file" name="images[]" id="images" multiple>
                                        </div>
                                    </div>
                                    <div class="col-6"></div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-lg-12">
                                        <!-- Form -->
                                        <div class="form-check form-switch">
                                            <label class="form-check-label" for="status">Statue Active/Inactive</label>
                                            <input class="form-check-input" type="checkbox" name="status" id="status"
                                                {{ old('status', $company->status ?? '') ? 'checked' : '' }} checked>
                                        </div>
                                        <!-- End of Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <br />
                    <div class="card border-0 shadow components-section">
                        <div class="card-body">
                            <h4>SEO Setting</h4>
                            <div class="row mb-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label for="meta title">Meta Title(?)</label>
                                            <input type="text" class="form-control" id="meta_" name="meta_title"
                                                value="{{ old('meta_title') }}">
                                        </div>
                                        <!-- End of Form -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label for="description">Meta Description(?)</label>
                                            <textarea class="form-control" placeholder="Enter meta description..." name="meta_description" id="meta_description"
                                                rows="4">{{ old('meta_description') }}</textarea>
                                        </div>
                                        <!-- End of Form -->
                                    </div>
                                </div>
                            </div>

                            <div id="validation-errors"></div>

                            <button class="btn btn-sm btn-primary  d-flex justify-content-center align-items-center w-25" type="submit">
                                Update
                                &nbsp; &nbsp;
                                <!-- Loading Icon -->
                                <div id="loading-icon" class="spinner-border text-primary" role="status"
                                    style="display: none; height: 1rem; width: 1rem; color: white !important;">
                                </div>
                            </button>
                        </div>
                    </div>

                </form>

                <div class="row">
                    @foreach ($images as $image)
                        <div class="col-2">
                            <div class="custom-images">
                                <div class="image position-relative">
                                    <img src="{{ $image->getFullUrl() }}" alt="Image" style="width: 200px; height: auto;">
                                    <form action="{{ route('company.deleteImage', $image->id) }}" method="POST" class="mt-2 position-absolute top-0 end-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete" style="background: none; border: none; padding: 0;">
                                            <i class="fas fa-trash"></i> <!-- Font Awesome trash icon -->
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

@endsection
@push('footer-js')
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('apparel_categories', {
            height: 100,
        });
        CKEDITOR.replace('manufacturing', {
            height: 100,
        });
        CKEDITOR.replace('contact', {
            height: 100,
        });

        // setTimeout(function() {
        //     $('.alert').alert('close');
        // }, 10000);
    </script>

    <script>
        // Turn input element into a FilePond instance
        FilePond.registerPlugin(FilePondPluginFileValidateType); // Optional: For validating file types
        FilePond.registerPlugin(FilePondPluginFileValidateSize); // Optional: For validating file sizes

        const inputElement = document.querySelector('input[id="images"]');

        // Create the FilePond instance
        const pond = FilePond.create(inputElement, {
            allowMultiple: true, // Allow multiple file uploads
            maxFiles: 5, // Optional: Limit to 5 files
            server: {
                // Laravel CSRF token
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            console.log('..........');
            // alert();
            // Handle form submission
            $('#form-submit').on('submit', function(e) {
                e.preventDefault();
                // alert();
                // Clear previous validation messages
                $('#validation-errors').html('');

                // Show loading icon
                $('#loading-icon').show();

                // Get all form data using FormData
                var formData = new FormData(this);

                // Append FilePond files to formData (necessary if you handle file uploads synchronously)
                pond.getFiles().forEach(function (file) {
                    formData.append('images[]', file.file); // Append each file from FilePond to formData
                });

                var url = $(this).attr('action');

                // Make AJAX POST request
                $.ajax({
                    url: url, // Route to store post
                    type: 'POST',
                    data: formData,
                    contentType: false, // Important for FormData to work
                    processData: false, // Important for FormData to work
                    headers: {
                        'X-HTTP-Method-Override': 'PUT' // Spoof the PUT method
                    },
                    beforeSend: function() {
                        // Optional: Disable submit button to prevent duplicate submissions
                        $('#form-submit button[type="submit"]').prop('disabled', true);
                    },
                    success: function(response) {
                        // Hide loading icon
                        $('#loading-icon').hide();

                        // Show success message with SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.success,
                        }).then(function() {
                            // Redirect to index after success
                            window.location.href = response.redirect_to;
                            // window.location.href = "{{ route('company.index') }}";
                        });
                    },
                    error: function(xhr) {
                        // Hide loading icon
                        $('#loading-icon').hide();

                        // Re-enable submit button
                        $('#form-submit button[type="submit"]').prop('disabled', false);

                        // Display validation errors
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#validation-errors').append('<div class="alert-danger mb-1">' + value + '</div>');
                            });
                        }
                    }
                });
            });
        });
    </script>

@endpush
