@extends('backend.layouts.master')
@push('header')
@endpush
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <h1>Page</h1>
                <div>
                    <button class="btn btn-sm btn-info create-btn" type="submit">Create</button>
                </div>
            </div>
            <div class="col-12">
                @include('backend.layouts.messages')
                <table id="pages-table" style="border-top: 1px solid rgb(128 128 128 / 17%);" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
        <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
            <span class="fw-bold d-inline-flex align-items-center h6">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"></path>
                </svg>
                Settings
            </span>
        </div>
    </div>
    <script>
        $(function() {
            $('#pages-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('page.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'slug',
                        name: 'slug'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        render: function(data, type, row) {
                            if (type === 'display' || type === 'filter') {
                                var date = new Date(data);
                                var formattedDate = date.toLocaleDateString('en-GB', {
                                    day: '2-digit',
                                    month: '2-digit',
                                    year: 'numeric'
                                });
                                return formattedDate;
                            }
                            return data;
                        }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                order: [
                    [0, 'desc']
                ]
            });
        });

        $('.create-btn').on('click', function() {
            window.location.href = "{{ route('page.create') }}";
        });

        $('#pages-table').on('click', '.edit-btn', function() {
            var pageId = $(this).data('id');
            var url = "{{ url('admin/page/page_id_placeholder/edit') }}";
            window.location.href = url.replace('page_id_placeholder', pageId);
        });

        $('#pages-table').on('click', '.delete-btn', function(e) {
            e.preventDefault();

            var pageId = $(this).data('id');
            if (confirm("Are you sure you want to delete this record?")) {
                // Create a hidden form and submit it
                var form = $('<form>', {
                    'method': 'POST',
                    'action': '{{ route('page.destroy', ':id') }}'.replace(':id', pageId)
                }).append(
                    $('<input>', {
                        'type': 'hidden',
                        'name': '_method',
                        'value': 'DELETE'
                    }),
                    $('<input>', {
                        'type': 'hidden',
                        'name': '_token',
                        'value': '{{ csrf_token() }}'
                    })
                );
                $('body').append(form);
                form.submit();
            }
        });

        // Hide alerts after 3 seconds
        setTimeout(function() {
            $('.alert').alert('close');
        }, 3000);
    </script>
@endsection
@push('footer-js')
@endpush
