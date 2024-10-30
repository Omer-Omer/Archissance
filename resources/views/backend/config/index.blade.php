@extends('backend.layouts.master')
@push('header')
    <style>
        table.dataTable tbody th,
        table.dataTable tbody td {
            padding: 5px 5px !important;
        }

        table tr th {
            font-size: 12px !important;
        }

        table tr td {
            font-size: 12px !important;
        }

        table td .btn {
            border-radius: 5px !important;
            padding: 5px 10px !important;
            font-size: 12px !important;
        }
    </style>
@endpush
@section('content')
    <div class="py-4">
        <div class="row">
            <div class="col-6">
                <h4>Config</h4>
            </div>
            <div class="col-6">
                <div class="text-end">
                    <a class="btn btn-sm btn-info create-btn" href="{{ route('config.create') }}">Create</a>
                </div>
            </div>
            <div class="col-12">
                @include('backend.layouts.messages')

                <div class="card border-0 shadow components-section">
                    <div class="card-body">
                        <div class="row mb-4">
                            <form action="{{ route('config.update') }}" method="POST">
                                @csrf
                                @method('PUT') <!-- Assuming you're using a PUT method for updates -->

                                @foreach($configurations as $configuration)
                                    <div class="form-group">
                                        <label for="configuration_{{ $configuration->id }}" class="mb-1">{{ ucfirst($configuration->key) }}</label>
                                        <input type="text"
                                               class="form-control"
                                               id="configuration_{{ $configuration->id }}"
                                               name="configurations[{{ $configuration->id }}]"
                                               value="{{ old('configurations.'.$configuration->id, $configuration->value) }}"
                                               required>
                                    </div>

                                    <br>
                                @endforeach

                                <button type="submit" class="btn btn-primary">Update Configurations</button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('footer-js')
    <script>
        $('#data-tables').DataTable({
            "paging": true, // Enable pagination
            "lengthChange": false, // Disable ability to change number of records per page
            "searching": true, // Enable search
            "ordering": true, // Enable column-based sorting
            "info": true, // Show info on number of entries
            "autoWidth": false, // Disable auto-width for columns
            "pageLength": 10 // Set default number of rows per page
        });
    </script>
@endpush
