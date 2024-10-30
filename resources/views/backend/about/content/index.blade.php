@extends('backend.layouts.master')
@push('header')
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
    </style>

    <!-- FilePond core library -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

    <!-- FilePond file validation plugin -->
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

    <!-- (Optional) Add more plugins as needed -->
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
@endpush
@section('content')
    <div style="margin-top: 50px;">
        <div class="row">
            <h4>Description</h4>
            @include('backend.layouts.messages')
            <div class="col-12 mb-4">
                <form id="form-submit" action="{{ route('about.content.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card border-0 shadow components-section">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="row">
                                   <div class="row">
                                        <div class="col-lg-12">

                                            <div class="row mb-4">
                                                <div class="form-group">
                                                    <label for="images">Upload Images</label>
                                                    <input type="file" name="image" id="image">
                                                </div>

                                                <div>
                                                    @if(isset($aboutPage) && $aboutPage->hasMedia('leftImage'))
                                                        <img height="200px" src="{{ $aboutPage->getFirstMediaUrl('leftImage') }}" alt="leftImage">
                                                    @endif
                                                </div>
                                            </div>
                                        
                                            <!-- Form -->
                                            <div class="mb-4">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" placeholder="Enter meta description..." name="description" id="description"
                                                    rows="4">{{ old('description', $aboutJsonContent->description ?? '') }}</textarea>
                                            </div>
                                            <!-- End of Form -->

                                            <!-- Form -->
                                            <div class="mb-4">
                                                <label for="more_description">More Description</label>
                                                <textarea class="form-control" placeholder="Enter meta description..." name="more_description" id="more_description"
                                                    rows="4">{{ old('more_description', $aboutJsonContent->more_description ?? '') }}</textarea>
                                            </div>
                                            <!-- End of Form -->
                                        </div>
                                   </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div id="validation-errors"></div>
                                        <button
                                            class="btn btn-sm btn-primary d-flex justify-content-center align-items-center w-50"
                                            type="submit">
                                            Update
                                            &nbsp; &nbsp;
                                            <!-- Loading Icon -->
                                            <div id="loading-icon" class="spinner-border text-primary" role="status"
                                                style="display: none; height: 1rem; width: 1rem; color: white !important;">
                                            </div>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('footer-js')
    <script src="https://cdn.tiny.cloud/1/zf5zsxae4ty6mu1ixiartpai973ow1g067fwm9qk1mr0p39v/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>

        tinymce.init({
            selector: '#description', // Replace with your textarea ID
        });

        tinymce.init({
            selector: '#more_description', // Replace with your textarea ID
        });

    </script>

    <script>
        // Turn input element into a FilePond instance
        FilePond.registerPlugin(FilePondPluginFileValidateType); // Optional: For validating file types
        FilePond.registerPlugin(FilePondPluginFileValidateSize); // Optional: For validating file sizes

        // Initialize FilePond for single file upload (up to 1 file)
        const featureImageInputElement = document.querySelector('input[id="image"]');
        const featurePond = FilePond.create(featureImageInputElement);
        console.log(featurePond.getFile());
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

                if (featurePond.getFile()) {
                    console.log('file exist!');
                    formData.append('image', featurePond.getFile()
                        .file); // Ensure we're appending file.file
                }

                var url = $(this).attr('action');

                // Make AJAX POST request
                $.ajax({
                    url: url, // Route to store post
                    type: 'POST',
                    data: formData,
                    contentType: false, // Important for FormData to work
                    processData: false, // Important for FormData to work
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
                                $('#validation-errors').append(
                                    '<div class="alert-danger mb-1">' + value +
                                    '</div>');
                            });
                        }
                    }
                });
            });
        });
    </script>
@endpush
