@extends('admin.layouts.template')

@section('content')
<div class="row">
    <div class="card col-md-12 mx-auto">
        <div class="card-body">
            <h3 class="card-title">Edit Medicine</h3>
            <form action="{{ route('update.medicine') }}" method="post">
                @csrf
                <input type="hidden"name="medicine_id"value="{{ $medicine->id }}">
                 <!-- To override the POST method and use PUT for updating -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required value="{{ $medicine->name }}">
                </div>
                <div class="mb-3">
                    <label for="wmg" class="form-label">Weight in mg</label>
                    <input type="text" name="wmg" id="wmg" class="form-control" required value="{{ $medicine->wmg }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price Per Unit</label>
                    <input type="text" name="price" id="price" class="form-control" required value="{{ $medicine->price }}">
                </div>

                <div class="mb-3">
                    <label for="generics" class="form-label">Generics</label>
                    <select name="generic_id" id="generics" class="form-control" required>
                        <option value="">Select Generics</option>
                        @foreach ($generics as $id => $name)
                            <option value="{{ $id }}" {{ $id == $medicine->generic_id ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="company" class="form-label">Company</label>
                    <select name="company_id" id="company" class="form-control"required>
                        <option value="">Select company</option>
                        @foreach ($companies as $id => $name)
                            <option value="{{ $id }}" {{ $id == $medicine->company_id ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
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
