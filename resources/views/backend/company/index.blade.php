@extends('backend.layouts.master')
@push('header')
@endpush
@section('content')

    <div class="py-4">
        <div class="row">
            <div class="col-6">
                <h4>Company</h4>
            </div>
            <div class="col-6">
                <div class="text-end">
                    <a class="btn btn-sm btn-info create-btn" href="{{ route('company.create') }}">Create</a>
                </div>
            </div>
            <div class="col-12">
                @include('backend.layouts.messages')
                <table id="data-tables" style="border-top: 1px solid rgb(128 128 128 / 17%);" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Intro</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($companies as $k => $c)
                            <tr>
                                <td>{{ $k+1 }}</td>
                                <td>{{ $c->name ?? '' }}</td>
                                <td>{!! $c->intro ?? '' !!}</td>
                                <td>{{ $c->status ?? '' }}</td>
                                <td>{{ $c->created_at ?? '' }}</td>
                                <td>
                                    <a href="{{ route('company.show', $c->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('company.edit', $c->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('company.destroy', $c->id) }}" method="POST" style="display:inline;">
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

@endsection
@push('footer-js')

    <script>
        $('#data-tables').DataTable({
            "paging": true,         // Enable pagination
            "lengthChange": false,  // Disable ability to change number of records per page
            "searching": true,      // Enable search
            "ordering": true,       // Enable column-based sorting
            "info": true,           // Show info on number of entries
            "autoWidth": false,     // Disable auto-width for columns
            "pageLength": 10        // Set default number of rows per page
        });
    </script>
@endpush
