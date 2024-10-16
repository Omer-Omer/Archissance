@extends('backend.layouts.master')
@push('header')
@endpush
@section('content')
<div class="container py-4">
   <div class="row">
      <div class="col-6">
         <h1>Image Gallery</h1>
      </div>
      <div class="col-6">
         <div class="text-end">
            <button class="btn btn-sm btn-info create-btn" type="submit">Create</button>
         </div>
      </div>
      <div class="col-12">
      @include('backend.layouts.messages')
         <div class="card border-0 shadow components-section">
            <div class="card-body">
               <div class="row">
                  @foreach($images as $image)
                  <div class="col-md-2">
                     <div class="card mb-2" style="box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.3);">
                        <a href="javascript:void(0);" class="copy-url" data-url="{{ asset('storage/' . $image->path) }}">
                        <i class="bi bi-clipboard"></i>
                        </a>
                        <img style="width:100%; height:100px;" src="{{ asset('storage/' . $image->path) }}" class="card-img-top" alt="{{ $image->title }}">
                        <div class="card-body">
                           <!-- <span class="card-title">{{ $image->title }}</span> -->
                           <span class="card-title">{{ $image->title }}</span>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   document.addEventListener('DOMContentLoaded', function () {
      const copyLinks = document.querySelectorAll('.copy-url');
      copyLinks.forEach(link => {
         link.addEventListener('click', function () {
               const url = this.getAttribute('data-url');
               navigator.clipboard.writeText(url).then(function() {
                  alert('URL copied to clipboard!');
               }, function() {
                  alert('Failed to copy URL.');
               });
         });
      });
   });
   
   $('.create-btn').on('click', function () {
      window.location.href = "{{  route('images.create')  }}";
   });

   // Hide alerts after 3 seconds
   setTimeout(function() {
      $('.alert').alert('close');
   }, 3000);
       
</script>
@endsection
@push('footer-js')
@endpush