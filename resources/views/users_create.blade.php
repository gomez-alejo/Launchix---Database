@extends('layout.app')

@section('content')
<style>
    body {
        background: #f0f2f5;
    }

    .form-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .card-custom {
        width: 800px;
        max-width: 95%;
        display: flex;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        background-color: white;
    }

    .form-left {
        padding: 40px;
        width: 60%;
    }

    .form-right {
        width: 40%;
        background: #1e1f40 url('/images/rocket.png') no-repeat center;
        background-size: contain;
    }

    .form-left h2 {
        font-weight: 600;
        font-size: 24px;
        margin-bottom: 30px;
        color: #333;
    }

    .form-label {
        font-size: 14px;
        font-weight: 500;
    }

    .form-control {
        font-size: 14px;
        padding: 10px;
        border-radius: 8px;
    }

    .btn-register {
        background-color: #4b6cb7;
        color: white;
        border: none;
        border-radius: 20px;
        padding: 10px 30px;
        margin-top: 10px;
        transition: all 0.3s ease;
    }

    .btn-register:hover {
        background-color: #3b5899;
        transform: scale(1.05);
    }
</style>

<div class="form-container">
    <div class="card-custom">
        <div class="form-left">
            <h2>Registration Form</h2>

            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="col">
                        <label class="form-label">Second Name</label>
                        <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <select class="form-select" name="role">
                        <option value="client">Client</option>
                        <option value="entrepreneur">Entrepreneur</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-register">Register</button>
                </div>
            </form>
        </div>

        <div class="form-right"></div>
    </div>
</div>
@endsection
