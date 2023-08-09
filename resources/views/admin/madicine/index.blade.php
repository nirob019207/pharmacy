@extends('admin.layouts.template')

@section('content')
<div class="page-header">
    <h1>Manage Users</h1>
    <a href="{{ route('addmedicine') }}" class="btn btn-dark">
        <span class="icon icon-plus"></span> Add Medicine
    </a>
</div>

<!-- Page Body -->
<section class="page-body">
    <!-- Flash Alert (if applicable) -->
    <!-- You can replace this with any equivalent Flash Alert implementation -->

    <!-- Users Card -->
    <div class="card">
        <div class="card-header">Company</div>
        <div class="card-table table-responsive">
            <table class="table table-vcenter table-nowrap" id="example">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Stock</th>
                        <th>Unit/Price</th>

                        <th>Created At</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($medicines as $medicine)
                    @php
                            // Get the stock quantity for the medicine
                            $stockQuantity = $medicine->stocks->sum('stock');
                        @endphp

                        <tr>
                            <td>{{ $medicine->name }}</td>
                            <td>{{ $medicine->company->name }}</td>
                            <td>
                                @if ($stockQuantity > 0)
                                    {{ $stockQuantity }}
                                @else
                                    Stock Out
                                @endif
                            </td>
                            <td>{{ $medicine->price }}</td>

                            <td>{{ $medicine->created_at }}</td>
                            <td>
                                <a href="{{ route('editmedicine',$medicine->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('deletemedicine',$medicine->id) }}"class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Pagination (if applicable) -->
    </div>
</section>

<!-- Add the DataTables JavaScript initialization -->
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
@endsection
