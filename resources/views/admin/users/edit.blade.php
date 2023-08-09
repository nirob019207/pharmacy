
@extends('admin.layouts.template')


@section('content')







    <div class="card">
    <div class="card-body">
        <form action="{{ route('update.user') }}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user_info->id }}">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" id="name" value="{{ $user_info->name }}"name="name" class="form-control" />
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <input type="tel" id="phone"value="{{ $user_info->phone }}" name="phone" class="form-control"  />
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" id="email" value="{{ $user_info->email }}" name="email" class="form-control"  />
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <div class="input-group">
            <input type="password" id="password" name="password" class="form-control" autocomplete="off">
            <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">Show Password</button>
        </div>
        <div class="invalid-feedback">
            @error('password')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select name="role" id="role" class="form-control">
            <option  value="{{ $user_info->role }}">Select role</option>
            @foreach ($user->roles() as $role)
            <option >
                {{ ucfirst($role) }}</option>
        @endforeach
        </select>
        <div class="invalid-feedback">
            @error('role')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
    </div>

    <div class="form-footer text-end">
        <button type="submit" class="btn btn-primary">
            Save
        </button>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            document.querySelector(".btn-outline-secondary").textContent = "Hide Password";
        } else {
            passwordInput.type = "password";
            document.querySelector(".btn-outline-secondary").textContent = "Show Password";
        }
    }
</script>

        <!-- Display pagination links here -->
    </div>


@endsection


