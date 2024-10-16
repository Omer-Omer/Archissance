@extends('backend.layouts.master')
@push('header')
<style>
   .cke_notifications_area {
      display: none;
   }
   .required{
      color:red;
   }
</style>
@endpush
@section('content')
<div class="py-4">
   <div class="dropdown">
      <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
         <a class="dropdown-item d-flex align-items-center" href="#">
            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
               </path>
            </svg>
            Add User
         </a>
         <a class="dropdown-item d-flex align-items-center" href="#">
            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
               </path>
            </svg>
            Add Widget
         </a>
         <a class="dropdown-item d-flex align-items-center" href="#">
            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
               </path>
               <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
            </svg>
            Upload Files
         </a>
         <a class="dropdown-item d-flex align-items-center" href="#">
            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd"
                  d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"></path>
            </svg>
            Preview Security
         </a>
         <div role="separator" class="dropdown-divider my-1"></div>
         <a class="dropdown-item d-flex align-items-center" href="#">
            <svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd"
                  d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                  clip-rule="evenodd"></path>
            </svg>
            Upgrade to Pro
         </a>
      </div>
   </div>
</div>
<div class="theme-settings card bg-gray-800 pt-2 collapse" id="theme-settings">
   <div class="card-body bg-gray-800 text-white pt-4">
      <button type="button" class="btn-close theme-settings-close" aria-label="Close" data-bs-toggle="collapse"
         href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings"></button>
      <div class="d-flex justify-content-between align-items-center mb-3">
         <p class="m-0 mb-1 me-4 fs-7">Open source <span role="img" aria-label="gratitude">💛</span></p>
         <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard"
            data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
            data-size="large" data-show-count="true"
            aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>
      </div>
      <a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank"
         class="btn btn-secondary d-inline-flex align-items-center justify-content-center mb-3 w-100">
         Download
         <svg class="icon icon-xs ms-2" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
               d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z"
               clip-rule="evenodd"></path>
         </svg>
      </a>
      <p class="fs-7 text-gray-300 text-center">Available in the following technologies:</p>
      <div class="d-flex justify-content-center">
         <a class="me-3" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard"
            target="_blank">
         <img src="{{ asset('backend/assets/img/technologies/bootstrap-5-logo.svg') }}" class="image image-xs">
         </a>
         <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
         <img src="{{ asset('backend/assets/img/technologies/react-logo.svg') }}" class="image image-xs">
         </a>
      </div>
   </div>
</div>
<div class="row">
   <h1>Edit Blog Page</h1>
   @include('backend.layouts.messages')
   <div class="col-12 mb-4">
      <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="card border-0 shadow components-section">
            <div class="card-body">
               <div class="row mb-4">
                  <div class="row">
                     <div class="col-lg-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="email">Slug Text</label>
                           <span class="required">*</span>
                           <input type="text" class="form-control" id="slug" name="slug" value="{{ $blog->slug }}">
                        </div>
                        <!-- End of Form -->
                     </div>
                     <div class="col-lg-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="email">Blog Page Heading</label>
                           <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  @if($blog->image)
                     <img style="width:100px; height:70px;" src="{{ asset('storage/' . $blog->image) }}" alt="Image">
                  @endif
                  <div class="row">
                     <div class="col-lg-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="email">Image</label>
                           <span class="required">*</span>
                           <input type="file" class="form-control" id="image" name="image" value="{{ $blog->image }}">
                        </div>
                        <!-- End of Form -->
                     </div>
                     <div class="col-lg-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="email">Image Alt Tag</label>
                           <input type="text" class="form-control" id="image_alt_tag" name="image_alt_tag" value="{{ $blog->image_alt_tag }}">
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="email">Select Category</label>
                           <span class="required">*</span>
                           <select class="form-select" aria-label="Default select" name="category_id" id="category_id">
                                 <option value="" selected disabled>Select a category</option>
                                 @forelse($categories as $category)
                                    <option value="{{ $category['id'] }}" @if($category['id'] == $blog->category_id) selected @endif>{{ $category['name'] }}</option>
                                 @empty
                                    <option disabled>No categories available</option>
                                 @endforelse
                              </select>
                        </div>
                        <!-- End of Form -->
                     </div>
                     <div class="col-lg-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="email">Select Author</label>
                           <span class="required">*</span>
                           <select class="form-select" aria-label="Default select" name="user_id" id="user_id">
                                 <option value="" selected disabled>Select an author</option>
                                 @forelse($users as $user)
                                    <option value="{{ $user['id'] }}" @if($user['id'] == $blog->user_id) selected @endif>{{ $user['name'] }}</option>
                                 @empty
                                    <option disabled>No authors available</option>
                                 @endforelse
                              </select>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="content">Content</label>
                           <span class="required">*</span>
                           <textarea name="content" id="editor">{{ $blog->content }}</textarea>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="status">Blog Draft/Publish</label>
                            <input class="form-check-input" type="checkbox" name="status" id="status" {{ $blog->status ? 'checked' : '' }}>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="comments display">Comment Disallow/Allow</label>
                            <input class="form-check-input" type="checkbox" name="comments_display" id="comments_display" {{ $blog->comments_display ? 'checked' : '' }}>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                    <div class="mb-3">
                        <label for="birthday">Created at</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </span>
                            <input class="form-control date-picker" id="created_date" type="text" name="created_date" placeholder="dd/mm/yyyy" value="{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}">                                              
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="mb-3">
                        <label>Updated at</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </span>
                            <input class="form-control date-picker" id="updated_date" type="text" name="updated_date" placeholder="dd/mm/yyyy" value="{{ \Carbon\Carbon::parse($blog->updated_at)->format('d/m/Y') }}">                                               
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <br/>
         <div class="card border-0 shadow components-section">
            <div class="card-body">
                <h4>SEO Setting</h4>
               <div class="row mb-4">
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="meta title">Meta Title(?)</label>
                           <input type="text" class="form-control" id="meta_" name="meta_title" @if(isset($pageMeta['meta_title'])) value="{{ $pageMeta['meta_title'] }}" @endif>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                        <label for="description">Meta Description(?)</label>
                            <textarea class="form-control" placeholder="Enter meta description..." name="meta_description" id="meta_description" rows="4">@if(isset($pageMeta['meta_description'])) {{ $pageMeta['meta_description'] }} @endif</textarea>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                              <label for="og_type">OG:Title</label>
                              <input type="text" class="form-control" id="og_title" name="og_title"
                                 @if(isset($pageMeta['og_title'])) value="{{ $pageMeta['og_title'] }}" @endif>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                              <label for="og_description">OG:Description</label>
                              <textarea class="form-control" placeholder="Enter og description" name="og_description" id="og_description"
                                 rows="4">@if(isset($pageMeta['og_description'])) {{ $pageMeta['og_description'] }} @endif</textarea>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="og_type">OG:Type</label>
                           <input type="text" class="form-control" id="og_type" name="og_type" @if(isset($pageMeta['og_type'])) value="{{ $pageMeta['og_type'] }}" @endif>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="email">OG:URL</label>
                           <input type="text" class="form-control" id="og_url" name="og_url" @if(isset($pageMeta['og_url'])) value="{{ $pageMeta['og_url'] }}" @endif>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="og site name">OG:Site Name</label>
                           <input type="text" class="form-control" id="og_site_name" name="og_site_name" @if(isset($pageMeta['og_site_name'])) value="{{ $pageMeta['og_site_name'] }}" @endif>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                              <label for="og locale">OG:Locale</label>
                              <input type="text" class="form-control" id="og_locale" name="og_locale"
                                 @if(isset($pageMeta['og_locale'])) value="{{ $pageMeta['og_locale'] }}" @endif>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                              <label for="article publisher">Article Publisher</label>
                              <input type="text" class="form-control" id="article_publisher" name="article_publisher"
                                 @if(isset($pageMeta['article_publisher'])) value="{{ $pageMeta['article_publisher'] }}" @endif>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                              <label for="twitter card">Twitter Card</label>
                              <input type="text" class="form-control" id="twitter_card" name="twitter_card"
                                 @if(isset($pageMeta['twitter_card'])) value="{{ $pageMeta['twitter_card'] }}" @endif>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                              <label for="twitter title">Twitter Title</label>
                              <input type="text" class="form-control" id="twitter_title" name="twitter_title"
                              @if(isset($pageMeta['twitter_title'])) value="{{ $pageMeta['twitter_title'] }}" @endif>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- Form -->
                        <div class="mb-4">
                              <label for="twitter description">Twitter Description</label>
                              <textarea class="form-control" placeholder="Enter twitter description..." name="twitter_description" id="twitter_description"
                                 rows="4">@if(isset($pageMeta['twitter_title'])) {{ $pageMeta['twitter_title'] }} @endif</textarea>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <!-- <h4>Advance Setting</h4>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="mb-4">
                           <label for="email">Meta: Robot Tag</label>
                           <input type="text" class="form-control" id="robot_type" name="robot_type" @if(isset($pageMeta['robot_type'])) value="{{ $pageMeta['robot_type'] }}" @endif>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="mb-4">
                           <label for="email">URL:Canonical</label>
                           <input type="text" class="form-control" id="url_canonical" name="url_canonical" @if(isset($pageMeta['url_canonical'])) value="{{ $pageMeta['url_canonical'] }}" @endif>
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-lg-12">
                        <div class="mb-4">
                        <label for="textarea">Schema Code</label>
                            <textarea class="form-control" placeholder="Enter Schema Code..." name="schema_code" id="schema_code" rows="4">@if(isset($pageMeta['schema_code'])) {{ $pageMeta['schema_code'] }} @endif</textarea>
                        </div>
                     </div>
                  </div> -->
               </div>
               <input type="hidden" name="article_published_time" value="{{ now()->format('Y-m-d\TH:i:sP') }}">
               <input type="hidden" name="article_modified_time" value="{{ now()->format('Y-m-d\TH:i:sP') }}">
               <input type="hidden" name="schema_code" value="schema_code">
               <input type="hidden" name="url_canonical" value="url_canonical">
               <input type="hidden" name="robot_type" value="robot_type">
               <button class="btn btn-sm btn-primary" type="submit">Update</button>
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
@endsection
@push('footer-js')
   <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
   <script>
      CKEDITOR.replace('editor', {
         height: 400,

      });

      document.addEventListener('DOMContentLoaded', function () {
        flatpickr(".date-picker", {
            dateFormat: "d/m/Y"
        });
      });
      
      setTimeout(function() {
       $('.alert').alert('close');
      }, 5000);
   </script>
@endpush