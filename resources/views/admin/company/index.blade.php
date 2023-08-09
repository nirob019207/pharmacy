
@extends('admin.layouts.template')


@section('content')


<div class="page-header">
    <h1>Manage Users</h1>
    <a href="{{ route('addcompany') }}" class="btn btn-dark">
        <span class="icon icon-plus"></span> Add Company
    </a>
</div>

<!-- Page Body -->
<section class="page-body">
    <!-- Flash Alert (if applicable) -->
    <!-- You can replace this with any equivalent Flash Alert implementation -->

    <!-- Users Card -->
    <div class="card">
        <div class="card-header">Company </div>
        <div class="card-table table-responsive">
            <table class="table table-vcenter table-nowrap">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>address</th>
                        <th>pharmacist</th>
                        <th>Phone</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->pharmacist->name }}</td>
                        <td>{{ $company->phone }}</td>
                        <td>
                         <a href="{{ route('editcompany',$company->id) }}" class="btn btn-info">Edit</a>
                         <a href="{{ route('deletecompany',$company->id) }}"class="btn btn-danger">Delete</a>
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


