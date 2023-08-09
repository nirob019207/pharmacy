@extends('admin.layouts.template')

@section('content')
<div class="row">
    <div class="card col-md-12">
        <div class="card-body">
            <form action="{{ route('store.stockmedicine') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="generics" class="form-label">Medincine</label>
                    <select name="medicine_id" id="medicine" class="form-control">
                        <option value="">Select Medicine</option>
                        @foreach ($medicine as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Batch Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stock Quantity</label>
                    <input type="number" name="stock" id="stock" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="mfg_date" class="form-label">MFG Date</label>
                    <input type="date" name="mfg_date" id="mfg_date" class="form-control" id="datepicker" required>
                </div>

                <div class="mb-3">
                    <label for="expiry_date" class="form-label">Expiry Date</label>
                    <input type="date" name="expiry_date" id="expiry_date" class="form-control" id="datepicker" required>
                </div>

                <div class="mb-3">
                    <label for="purchase_price" class="form-label">Purchase Price (Total)</label>
                    <input type="number" name="purchase_price" id="purchase_price" class="form-control" required>
                </div>

                <div class="form-footer text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
