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
                <h4>Team</h4>
            </div>
            <div class="col-6">
                <div class="text-end">
                    <a class="btn btn-sm btn-info create-btn" href="{{ route('team.create') }}">Create</a>
                </div>
            </div>
            <div class="col-12">
                @include('backend.layouts.messages')
                <div class="table-responsive">
                    <table id="data-tables" style="border-top: 1px solid rgb(128 128 128 / 17%);"
                        class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($teams as $k => $t)
                                <tr>
                                    <td class="text-center">{{ $k + 1 }}</td>
                                    <td>{{ $t->name ?? '' }}</td>
                                    <td>{{ $t->designation ?? '' }}</td>
                                    <td>
                                        <img width="25%" src="{{ $t->getFirstMediaUrl('profileImage') }}"
                                            alt="Image">
                                    </td>
                                    <td class="text-center">{{ $t->status ?? '' }}</td>
                                    <td>{{ $t->created_at ?? '' }}</td>
                                    <td>
                                        <a href="{{ route('team.show', $t->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('team.edit', $t->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('team.destroy', $t->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>
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
