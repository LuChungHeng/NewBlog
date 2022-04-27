@extends('layouts.app')

@section('content')
    <div class="container text-center" style="width: 50%;">
        <div class="row bg-white border border-1 border-top-0 rounded-3">
            <label class="mt-2 p-2 fw-bold fs-4">註冊</label>
            <form action="{{route('register')}}" method="post">
                <div class="form-floating mb-4">
                    <input type="text" name="name" id="name" class="form-control bg-secondary bg-opacity-10" placeholder="Your name" value="">
                    <label for="name">Your name</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="username" id="username" class="form-control bg-secondary bg-opacity-10" placeholder="Username" value="">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="email" id="email" class="form-control bg-secondary bg-opacity-10" placeholder="Your email" value="">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="password" id="password" class="form-control bg-secondary bg-opacity-10" placeholder="Choose a password" value="">
                    <label for="password">Password</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control bg-secondary bg-opacity-10"
                    placeholder="Repeat your password" value="">
                    <label for="password_confirmation">Password again</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
