@extends('admin.layouts.template')

@section('content')
<div class="row">
    <div class="card col-md-12 mx-auto">
        <div class="card-body">
            <h3 class="card-title">Add Generic</h3>
            <form action="{{ route('update.generic') }}" method="post">
                @csrf
                <input type="hidden" name="generic_id" value="{{ $generic->id }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" value="{{ $generic->name }}" class="form-control" required>
                </div>

                <div class="form-footer text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
