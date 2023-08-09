@extends('admin.layouts.template')

@section('content')
<div class="row">
    <div class="card col-md-12">
        <div class="card-body">
            <form action="{{ route('update.stockmedicine') }}" method="POST">
                @csrf
                <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                <div class="mb-3">

                    <div class="mb-3">
                        <label for="medicine" class="form-label">Medincine</label>
                        <select name="medicine_id" id="medicine" class="form-control">
                            <option value="">Select Medicine</option>
                            @foreach ($medicine as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Batch Name</label>
                    <input type="text" name="name" id="name" value="{{ $stock->name }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stock Quantity</label>
                    <input type="number" name="stock" value="{{ $stock->stock }}" id="stock" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="mfg_date" class="form-label">MFG Date</label>
                    <input type="date" name="mfg_date" id="mfg_date" value="{{ $stock->mfg_date }}" class="form-control" id="datepicker" required>
                </div>

                <div class="mb-3">
                    <label for="expiry_date" class="form-label">Expiry Date</label>
                    <input type="date" name="expiry_date" id="expiry_date" value="{{ $stock->expiry_date }}" class="form-control" id="datepicker" required>
                </div>

                <div class="mb-3">
                    <label for="purchase_price" class="form-label">Purchase Price (Total)</label>
                    <input type="number" name="purchase_price" id="purchase_price" value="{{ $stock->purchase_price }}" class="form-control" required>
                </div>

                <div class="form-footer text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
