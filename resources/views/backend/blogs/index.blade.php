@extends('backend.layouts.master')
@push('header')
@endpush
@section('content')

    <div class="container py-4">
        <div class="row">
            <div class="col-6">
                <h1>Blogs</h1>
            </div>
            <div class="col-6">
                <div class="text-end">
                    <button class="btn btn-sm btn-info create-btn" type="submit">Create</button>
                </div>
            </div>
            <div class="col-12">
                @include('backend.layouts.messages')
                <table id="blogs-table" style="border-top: 1px solid rgb(128 128 128 / 17%);" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Slug URL</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Comment Status</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $('#blogs-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('blogs.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'slug',
                        name: 'slug'
                    },
                    {
                        data: 'image',
                        name: 'image',
                        render: function(data, type, row) {
                            if (type === 'display' || type === 'filter') {
                                return '<img src="{{ asset('storage') }}/' + data + '" alt="Image" style="width: 30px; height: 30px;"/>';
                        }
                            return data;
                        }

                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, row) {
                            if (type === 'display' || type === 'filter') {
                                return data == 1 ? 'Published' : 'Draft';
                            }
                            return data;
                        }
                    },
                    {
                        data: 'comments_display',
                        name: 'comments_display',
                        render: function(data, type, row) {
                            if (type === 'display' || type === 'filter') {
                                return data == 1 ? 'Allow' : 'Disallow';
                            }
                            return data;
                        }
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
                columnDefs: [
                    { width: '40%', targets: 0 }
                ],
                scrollX: true,
                fixedColumns: true,
                order: [
                    [0, 'desc']
                ]
            });
        });

        $('.create-btn').on('click', function() {
            window.location.href = "{{ route('blogs.create') }}";
        });

        $('#blogs-table').on('click', '.edit-btn', function() {
            var blogId = $(this).data('id');
            window.location.href = "{{ route('blogs.edit', ['blog' => 'blog_id_placeholder']) }}".replace(
                'blog_id_placeholder', blogId);
        });

        $('#blogs-table').on('click', '.show-btn', function() {
            var slug = $(this).data('slug');

            window.location.href = "{{ route('frontend.blog_detail', ['slug' => 'blog_slug_placeholder']) }}".replace(
            'blog_slug_placeholder', slug);
        });

        $('#blogs-table').on('click', '.delete-btn', function(e) {
            e.preventDefault();

            var blogId = $(this).data('id');
            if (confirm("Are you sure you want to delete this blog?")) {
                // Create a hidden form and submit it
                var form = $('<form>', {
                    'method': 'POST',
                    'action': '{{ route('blogs.destroy', ':id') }}'.replace(':id', blogId)
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
