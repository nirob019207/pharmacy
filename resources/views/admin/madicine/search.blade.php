@extends('admin.layouts.template')

@section('content')

<div class="container">
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
            <div class="card-header">Medicine List</div>
            <div class="card-body table-responsive">
                <table class="table table-vcenter table-striped">
                    <thead>
                        <tr>
                            <th>Medicine</th>
                            <th>Stock</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($medicines as $medicine)
                        @php
                        // Get the stock quantity for the medicine
                        $stockQuantity = $medicine->stocks->sum('stock');
                        @endphp
                        <tr>
                            <td id="medicine">
                                <a href="#">
                                    <strong>{{ $medicine->name }}</strong>
                                </a>
                                <br>
                                <small title="Weight" class="text-muted">{{ $medicine->wmg }}mg</small>
                                <br>
                                <small title="Generic" class="text-muted">{{ $medicine->generic->name }}</small>
                            </td>

                            <td>
                                @if ($stockQuantity > 0)
                                {{ $stockQuantity }}
                                @else
                                Stock Out
                                @endif
                            </td>
                            <td >
                                <input type="number" id="qty" min="0" value="0">
                            </td>

                            <td id="price">
                                {{ $medicine->price }}
                            </td>

                            <td class="text-end">
                                <a href="{{ url('/billReciept')}}">
                                    <button type="submit" id="add" class="btn btn-primary">
                                        Add to cart
                                    </button>
                                </a>
                            </td>


                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">No medicine Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- Pagination (if applicable) -->
        </div>
    </section>
</div>

@endsection
