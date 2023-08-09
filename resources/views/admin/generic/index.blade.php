
@extends('admin.layouts.template')


@section('content')


<div class="page-header">
    <h1>Manage Users</h1>
    <a href="{{ route('addgeneric') }}" class="btn btn-dark">
        <span class="icon icon-plus"></span> Add Generic
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
                        <th>medicine</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($generics as $generic)
                    <tr>
                        <td>{{ $generic->name  }}</td>

                         <td>{{ $generic->medicines_count }}</td>
                        <td>
                         <a href="{{ route('editgeneric',$generic->id) }}" class="btn btn-info">Edit</a>
                         <a href="{{ route('deletegeneric',$generic->id) }}"class="btn btn-danger">Delete</a>
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


