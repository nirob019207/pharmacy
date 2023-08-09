
@extends('admin.layouts.template')


@section('content')


<div class="page-header">
    <h1>Manage Users</h1>
    <a href="{{ route('adduser') }}" class="btn btn-dark">
        <span class="icon icon-plus"></span> Add User
    </a>
</div>

<!-- Page Body -->
<section class="page-body">
    <!-- Flash Alert (if applicable) -->
    <!-- You can replace this with any equivalent Flash Alert implementation -->

    <!-- Users Card -->
    <div class="card">
        <div class="card-header">Users</div>
        <div class="card-table table-responsive">
            <table class="table table-vcenter table-nowrap">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $users)
                    <tr>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->role }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->phone }}</td>
                        <td>
                         <a href="{{ route('edituser',$users->id) }}" class="btn btn-info">Edit</a>
                         <a href="{{ route('deleteuser',$users->id) }}"class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                   @endforeach
                </tbody>
            </table>
        </div>
        <!-- Pagination (if applicable) -->

    </div>
</section>

@endsection


