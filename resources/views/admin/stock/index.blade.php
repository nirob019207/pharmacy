@extends('admin.layouts.template')

@section('content')

<div class="card">
    <header>
        <h1>Medicine Stock</h1>
        <a href="{{ route('addstockmedicine') }}" class="btn btn-dark">
            Add Stock
        </a>
    </header>
    <div class="card-header justify-content-between">
        Stocks

    </div>
    <div class="card-table table-responsive">
        <table class="table table-vcenter table-nowrap">
            <thead>
                <tr>
                    <th>Batch</th>
                    <th>Medicine</th>
                <th>quantity</th>
                    <th>Stock</th>
                    <th>Purchase Price</th>
                    <th>Expires</th>
                    <th>Added</th>
                    <th class="d-print-none"></th>
                </tr>
            </thead>
            <tbody>
                <!-- Use PHP to loop through the $stocks array and generate table rows -->
                <!-- Replace the PHP loop below with your actual data -->
                <tr>
                    @foreach($stocks as $stock)
                    <td>{{ $stock->name }}</td>
                    <td>{{ $stock->medicine->name }}</td>
                    <td>{{ $stock->quantity }}</td>
                    <td>{{ $stock->stock }}</td>
                    <td>{{ $stock->purchase_price }}</td>
                    <td>{{ $stock->expiry_date }}</td>
                    <td>{{ $stock->created_at }}</td>

                    <td class="d-print-none text-end">
                        <a href="{{ route('editstockmedicine',$stock->id) }}" class="btn btn-icon btn-secondary">
                            Edit
                        </a>
                        <a href="{{ route('deletestockmedicine',$stock->id) }}" class="btn btn-icon btn-secondary">
                            Delete
                        </a>
                    </td>



                </tr>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    <div class="pagination">
        <!-- Pagination links here -->
    </div>
</div>
@endsection
