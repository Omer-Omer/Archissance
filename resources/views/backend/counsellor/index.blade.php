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
                <h1>Counsellor</h1>
            </div>
            <div class="col-6">
                <div class="text-end">
                    <form method="GET" action="{{ route('counsellor.index') }}" class="mb-3">
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
                                    <th>Step 1</th>
                                    <th>Step 2</th>
                                    <th>Step 3</th>
                                    <th>Step 4</th>
                                    <th>Video</th>
                                    <th>View Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($counsellors as $k => $counsellor)
                                    <tr>
                                        <td>{{ $k + 1 }}</td>
                                        <td>{{ $counsellor->first_name . '  ' . $counsellor->last_name }}</td>
                                        <td>{{ isset($counsellor->email_verified_at) ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ $counsellor->email }}</td>
                                        <td>{{ $counsellor->number }}</td>
                                        <td>
                                            @if ($counsellor->step_1 == 0)
                                                <span class="not-done">Not Done</span>
                                            @else
                                                <span class="done">Done</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($counsellor->step_2 == 0)
                                                <span class="not-done">Not Done</span>
                                            @else
                                                <span class="done">Done</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($counsellor->step_3 == 0)
                                                <span class="not-done">Not Done</span>
                                            @else
                                                <span class="done">Done</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($counsellor->step_4 == 0)
                                                <span class="not-done">Not Done</span>
                                            @else
                                                <span class="done">Done</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($counsellor->step_5 == 0)
                                                <span class="not-done">Not Done</span>
                                            @else
                                                <span class="done">Done</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a class="txt-black txt-dn" target="_blank"
                                                href="{{ url('/find-a-counsellor/' . $counsellor->profile_link) }}">View</a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <div class="col-12 custom-pagination">
                            {{ $counsellors->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('footer-js')
@endpush
