@extends('admin.layouts.template')

@section('content')
<div class="row">
    <div class="card col-md-12 mx-auto">
        <div class="card-body">
            <h3 class="card-title">Add Pharmacy</h3>
            <form action="{{ route('store.company') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="pharmacist" class="form-label">Pharmacist</label>
                    <select name="pharmacist_id" id="pharmacist" class="form-control">
                        <option value="">Select Pharmacist</option>
                        @foreach($pharma as $pharmacist)
                            @if($pharmacist->role == 'pharmacist')
                                <option value="{{ $pharmacist->id }}">{{ $pharmacist->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-footer text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
