
@extends('admin.layouts.template')


@section('content')


<div class="card container">
    <div class="card-header">
        <h1 class="text-center">search medicine</h1>
    </div>
    <form action="{{ url('/search') }}" method="get">
        @csrf
        <div class="flex">
            <input type="text" name="query" class="p-2 w-full">
            <button class="btn-info p-2">search</button>
        </div>
    </form>

</div>



@endsection


