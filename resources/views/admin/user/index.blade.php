@extends('layouts.admin')
@section('styles')
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3"><b>Dashboard</b></div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Admin</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">DataTable Admin</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-grd-info"><a href="{{ route('user.create') }}"
                                class="text-white">Add Data</a></button>
                    </div>
                </div>
                <br>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1;  @endphp
                        @foreach ($users as $data)
                            @if ($loop->first)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->isAdmin == 1 ? 'Admin' : 'User' }}</td>
                                    <td> <button class="btn btn btn-grd-danger" type="submit" disabled>
                                            Can't Delete
                                        </button></td>
                                </tr>
                            @else
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->isAdmin == 1 ? 'Admin' : 'User' }}</td>
                                    <td>
                                        <form action="{{ route('user.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('user.edit', $data->id) }}" class="btn btn-grd-success">
                                                Edit
                                            </a> |
                                            <a href="{{ route('user.destroy', $data->id) }}" class="btn btn-grd-danger"
                                                data-confirm-delete="true">
                                                Delete
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush
