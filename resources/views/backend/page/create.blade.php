@extends('backend.layouts.master')
@push('header')
@endpush
@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <div class="row py-4">
        <h1>Create Page</h1>

        <div class="col-12 mb-4">
            @include('backend.layouts.messages')
            <form action="{{ route('page.store') }}" method="POST">
                @csrf
                <div class="card border-0 shadow components-section">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="meta name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}">
                                </div>
                                <!-- End of Form -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="meta title">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        value="{{ old('slug') }}">
                                </div>
                                <!-- End of Form -->
                            </div>
                        </div>
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
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="og_type">OG:Type</label>
                                        <input type="text" class="form-control" id="og_type" name="og_type"
                                            value="{{ old('og_type') }}">
                                    </div>
                                    <!-- End of Form -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="email">OG:URL</label>
                                        <input type="text" class="form-control" id="og_url" name="og_url"
                                            value="{{ old('og_url') }}">
                                    </div>
                                    <!-- End of Form -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="og site name">OG:Site Name</label>
                                        <input type="text" class="form-control" id="og_site_name" name="og_site_name"
                                            value="{{ old('og_site_name') }}">
                                    </div>
                                    <!-- End of Form -->
                                </div>
                            </div>
                            <!-- <h4>Advance Setting</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-4">
                                        <label for="email">Meta: Robot Tag</label>
                                        <input type="text" class="form-control" id="robot_type" name="robot_type"
                                            value="{{ old('robot_type') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-4">
                                        <label for="email">URL:Canonical</label>
                                        <input type="text" class="form-control" id="url_canonical"
                                            name="url_canonical" value="{{ old('url_canonical') }}">
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-4">
                                        <label for="textarea">Schema Code</label>
                                        <textarea class="form-control" placeholder="Enter Schema Code..." name="schema_code" id="schema_code"
                                            rows="4">{{ old('schema_code') }}</textarea>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <h4>Advance Setting</h4>
                        <div class="row mb-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="meta title">Redirect URL</label>
                                        <input type="text" class="form-control" id="redirect_url" name="redirect_url"
                                            value="{{ old('redirect_url') }}">
                                    </div>
                                    <!-- End of Form -->
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="meta title">Redirection Time</label>
                                        <input type="text" class="form-control" id="redirection_time" name="redirection_time"
                                            value="{{ old('redirection_time') }}">
                                    </div>
                                    <!-- End of Form -->
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-primary" type="submit">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
        <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
            <span class="fw-bold d-inline-flex align-items-center h6">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"></path>
                </svg>
                Settings
            </span>
        </div>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '/upload_image?_token={{ csrf_token() }}'
                }
            })
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error(error);
            });

        setTimeout(function() {
            $('.alert').alert('close');
        }, 5000);
    </script>
@endsection
@push('footer-js')
@endpush
