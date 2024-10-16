@extends('backend.layouts.master')
@push('header')
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
   <h1>Create University</h1>
   @include('backend.layouts.messages')
   <div class="col-12 mb-4">
      <form action="{{ route('universities.store') }}" method="POST">
         @csrf
         @method('POST')
         <div class="card border-0 shadow components-section">
            <div class="card-body">
               <div class="row mb-4">
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="name">Name</label>
                           <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="starting_fee">Starting Fee</label>
                           <input type="text" class="form-control" name="starting_fee" value="{{ old('starting_fee') }}">
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="entrance_type">Entrance Type</label>
                            <select class="form-select" multiple aria-label="multiple select" name="entrance_type[]">
                                <option value="Summer" @if(is_array(old('entrance_type')) && in_array('Summer', old('entrance_type'))) selected @endif>Summer</option>
                                <option value="Spring" @if(is_array(old('entrance_type')) && in_array('Spring', old('entrance_type'))) selected @endif>Spring</option>
                                <option value="Fall" @if(is_array(old('entrance_type')) && in_array('Fall', old('entrance_type'))) selected @endif>Fall</option>
                            </select>

                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                        <label for="deadline">Dead Line</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </span>
                                <input data-datepicker="" class="form-control" type="text" placeholder="dd/mm/yyyy" name="deadline" value="{{ old('deadline') }}">                                               
                            </div>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="min_gpa">Min GPA</label>
                           <input type="text" class="form-control" name="min_gpa" value="{{ old('min_gpa') }}">
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="min_ielts">Min Ielts</label>
                           <input type="text" class="form-control" name="min_ielts" value="{{ old('min_ielts') }}">
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="min_toeft">Min Toefl</label>
                           <input type="text" class="form-control" name="min_toefl" value="{{ old('min_toefl') }}">
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="scholarships">Scholarships</label>
                           <select class="form-select" aria-label="Default select example" name="scholarships">
                            <option disabled>Select an option</option>
                                <option value="1" @if(old('scholarships') == '1') selected @endif>Yes</option>
                                <option value="0" @if(old('scholarships') == '0') selected @endif>No</option>
                            </select>

                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="local_rank">Local Rank</label>
                           <input type="text" class="form-control" name="local_rank" value="{{ old('local_rank') }}">
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                           <label for="qs_rank">QS Rank</label>
                           <input type="text" class="form-control" name="qs_rank" value="{{ old('qs_rank') }}">
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Country Form -->
                        <div class="mb-4">
                              <label class="my-1 me-2" for="country">Country</label>
                              <select class="form-select" aria-label="Default select example" name="country_id" id="country-dropdown" data-url="{{ route('getStates') }}">
                                 <option value="" selected disabled>Select a country</option>
                                 @forelse($countries as $country)
                                    <option value="{{ $country['id'] }}" @if(old('country_id') == $country['id']) selected @endif>{{ $country['name'] }}</option>
                                 @empty
                                    <option disabled>No countries available</option>
                                 @endforelse
                              </select>
                        </div>
                        <!-- End of Country Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- State Form -->
                        <div class="mb-4">
                              <label class="my-1 me-2" for="state">State</label>
                              <select class="form-select" aria-label="Default select example" name="state_id" id="state-dropdown" data-url="{{ route('getCities') }}">
                                 <option selected disabled>Select a state</option>
                                 @forelse($states as $state)
                                    <option value="{{ $state['id'] }}" @if(old('state_id') == $state['id']) selected @endif>{{ $state['name'] }}</option>
                                 @empty
                                    <option disabled>No states available</option>
                                 @endforelse
                              </select>
                        </div>
                        <!-- End of State Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- City Form -->
                        <div class="mb-4">
                              <label class="my-1 me-2" for="city">City</label>
                              <select class="form-select" aria-label="Default select example" name="city_id" id="city-dropdown">
                                 <option value="" selected disabled>Select a city</option>
                                 @forelse($cities as $city)
                                    <option value="{{ $city['id'] }}" @if(old('city_id') == $city['id']) selected @endif>{{ $city['name'] }}</option>
                                 @empty
                                    <option disabled>No cities available</option>
                                 @endforelse
                              </select>
                        </div>
                        <!-- End of City Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="colleges">Select Colleges</label>
                            <select class="form-select" multiple aria-label="multiple select" name="colleges[]">
                                @forelse ($colleges as $college)
                                    <option value="{{ $college['id'] }}" @if(is_array(old('colleges')) && in_array($college['id'], old('colleges'))) selected @endif>{{ $college['name'] }}</option>
                                @empty
                                    <option value="" disabled>No colleges available</option>
                                @endforelse
                            </select>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="colleges">Select Foundation Programs</label>
                            <select class="form-select" multiple aria-label="multiple select" name="foundation_programs[]">
                                @forelse ($foundationPrograms as $val)
                                    <option value="{{ $val['id'] }}" @if(is_array(old('foundation_programs')) && in_array($val['id'], old('foundation_programs'))) selected @endif>{{ $val['name'] }}</option>
                                @empty
                                    <option value="" disabled>No foundation programs available</option>
                                @endforelse
                            </select>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="colleges">Select UG Programs</label>
                            <select class="form-select" multiple aria-label="multiple select" name="ug_programs[]">
                                @forelse ($ugPrograms as $val)
                                    <option value="{{ $val['id'] }}" @if(is_array(old('ug_programs')) && in_array($val['id'], old('ug_programs'))) selected @endif>{{ $val['name'] }}</option>
                                @empty
                                    <option value="" disabled>No UG programs available</option>
                                @endforelse
                            </select>
                        </div>
                        <!-- End of Form -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="colleges">Select PG Programs</label>
                            <select class="form-select" multiple aria-label="multiple select" name="pg_programs[]">
                                @forelse ($pgPrograms as $val)
                                    <option value="{{ $val['id'] }}" @if(is_array(old('pg_programs')) && in_array($val['id'], old('pg_programs'))) selected @endif>{{ $val['name'] }}</option>
                                @empty
                                    <option value="" disabled>No PG programs available</option>
                                @endforelse
                            </select>
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
    $(document).ready(function() {
        $('#country-dropdown').change(function() {
            var countryId = $(this).val();
            var url = $(this).data('url');
            var stateDropdown = $('#state-dropdown');
            var cityDropdown = $('#city-dropdown');

            if (countryId) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    data: { country_id: countryId },
                    dataType: 'json',
                    success: function(data) {
                        stateDropdown.empty();
                        stateDropdown.append('<option selected disabled>Select a state</option>');
                        $.each(data.states, function(key, value) {
                            stateDropdown.append('<option value="'+ value.id +'">'+ value.name +'</option>');
                        });
                        cityDropdown.empty();
                        cityDropdown.append('<option selected disabled>Select a city</option>');
                    }
                });
            } else {
                stateDropdown.empty();
                stateDropdown.append('<option selected disabled>Select a state</option>');
                cityDropdown.empty();
                cityDropdown.append('<option selected disabled>Select a city</option>');
            }
        });

        $('#state-dropdown').change(function() {
            var stateId = $(this).val();
            var url = $(this).data('url');
            var cityDropdown = $('#city-dropdown');

            if (stateId) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    data: { state_id: stateId },
                    dataType: 'json',
                    success: function(data) {
                        cityDropdown.empty();
                        cityDropdown.append('<option selected disabled>Select a city</option>');
                        $.each(data.cities, function(key, value) {
                            cityDropdown.append('<option value="'+ value.id +'">'+ value.name +'</option>');
                        });
                    }
                });
            } else {
                cityDropdown.empty();
                cityDropdown.append('<option selected disabled>Select a city</option>');
            }
        });
    });

    setTimeout(function() {
       $('.alert').alert('close');
   }, 4000);
</script>
@endsection
@push('footer-js')
@endpush