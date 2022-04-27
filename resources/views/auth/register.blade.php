@extends('layouts.app')

@section('content')
    <div class="container" style="width: 50%;">
        <div class="row bg-white border border-1 border-top-0 rounded-3">
            <label class="mt-2 p-2 fw-bold fs-4 text-center">註冊</label>
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="form-floating mb-4">
                    <input type="text" name="name" id="name" class="form-control bg-secondary bg-opacity-10 @error('name') border border-danger border-1 @enderror" placeholder="Your name" value="">
                    <label for="name">Your name</label>
                    @error('name')
                    <div class="text-danger mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="username" id="username" class="form-control bg-secondary bg-opacity-10 @error('username') border border-danger border-1 @enderror" placeholder="Username" value="">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="text-danger mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="email" id="email" class="form-control bg-secondary bg-opacity-10 @error('email') border border-danger border-1 @enderror" placeholder="Your email" value="">
                    <label for="email">Email</label>
                    @error('email')
                    <div class="text-danger mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="password" id="password" class="form-control bg-secondary bg-opacity-10 @error('password') border border-danger border-1 @enderror" placeholder="Choose a password" value="">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="text-danger mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control bg-secondary bg-opacity-10 @error('password_confirmation') border border-danger border-1 @enderror"
                    placeholder="Repeat your password" value="">
                    <label for="password_confirmation">Password again</label>
                    @error('password_confirmation')
                    <div class="text-danger mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
