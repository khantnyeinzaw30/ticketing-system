@extends('layout.app')

@section('title', 'Category')

@section('content')
    <div class="row mt-6">
        <div class="col-md-12 col-12">
            <!-- card  -->
            <div class="card">
                <!-- card header  -->
                <div class="card-header bg-white py-4">
                    <h4 class="mb-0">Active Projects</h4>
                </div>
                <!-- table  -->
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Admin</th>
                                <th>Agent</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="align-middle">
                                        <h5 class="text-inherit">{{ $user->first_name }}</h5>
                                    </td>
                                    <td class="align-middle">
                                        <h5 class="text-inherit">{{ $user->last_name }}</h5>
                                    </td>
                                    <td class="align-middle">
                                        <h5 class="text-inherit">{{ $user->username }}</h5>
                                    </td>
                                    <td class="align-middle">
                                        <h5 class="text-inherit">
                                            {{ $user->is_admin ? 'YES' : 'NO' }}
                                        </h5>
                                    </td>
                                    <td class="align-middle">
                                        <h5 class="text-inherit">
                                            {{ $user->is_agent ? 'YES' : 'NO' }}
                                        </h5>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="me-3 ms-3 mt-3">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
