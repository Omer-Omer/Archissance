@extends('backend.layouts.master')
@push('header')
    <style>
        .txt-black {
            color: black;
        }

        .txt-dn {
            text-decoration: none;
        }

        .not-done {
            color: red;
        }

        .done {
            color: green;
        }

        /* .custom-pagination {
            margin: 20px 0px;
        } */
        .custom-pagination svg {
            height: 20px;
            width: 20px;
        }

        .custom-pagination nav>.flex {
            display: none;
        }

        .custom-pagination nav>div {
            display: flex;
            justify-content: end;
            margin: 30px 20px;
        }

        .custom-pagination nav>div>div>p>span {
            font-size: 12px;
        }

        .custom-pagination nav>div>div>p {
            font-size: 12px;
        }

        .custom-pagination nav>div>div>span>a {
            padding: 5px 8px !important;
            font-size: 14px;
            margin: 2px;
        }

        .custom-pagination nav>div>div>span>span>span {
            padding: 5px 8px !important;
            font-size: 14px;
            background-color: #1F2937 !important;
            color: white !important;
        }
    </style>
@endpush
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-6">
                <h1>Student</h1>
            </div>
            <div class="col-6">
                <div class="text-end">
                    <form method="GET" action="{{ route('student.index') }}" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search..."
                                value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12">
                <div class="card p-0">
                    <div class="table-responsive">
                        <table id="" style="border-top: 1px solid rgb(128 128 128 / 17%);"
                            class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Active/Inactive</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Message Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as $k => $student)
                                    <tr>
                                        <td>{{ $k + 1 }}</td>
                                        <td>{{ $student->first_name . '  ' . $student->last_name }}</td>
                                        <td>{{ isset($student->email_verified_at) ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->number }}</td>
                                        <td>
                                            @if (isset($student->messages) && count($student->messages) > 0)
                                                <span class="">Yes</span>
                                            @else
                                                <span class="">no</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <div class="col-12 custom-pagination">
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('footer-js')
@endpush
