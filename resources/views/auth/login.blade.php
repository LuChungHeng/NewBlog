@extends('layouts.app')

@section('content')
    <div class="container" style="width: 50%;">
        <div class="row bg-white border border-1 border-top-0 rounded-3">
            <label class="mt-2 p-2 fw-bold fs-4 text-center">登入頁面</label>
            @if(session('status'))
                <div class="bg-danger p-4 rounded-3 mb-4 text-white text-center">
                    {{session('status')}}
                </div>
            @endif

            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-floating mb-4">
                    <input type="text" name="email" id="email" class="form-control bg-secondary bg-opacity-10 @error('email') border border-danger border-1 @enderror" placeholder="Your email" value="{{old('email')}}">
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

                <div class="form-check mb-4">
                    <input class="form-check-input" name="remember" id="remember" type="checkbox">
                    <label class="form-check-label" for="remember">
                        記住我
                    </label>
                </div>

                <div class="d-grid pb-4">
                    <button type="submit" class="btn btn-primary">登入</button>
                </div>
            </form>
        </div>
    </div>
@endsection
