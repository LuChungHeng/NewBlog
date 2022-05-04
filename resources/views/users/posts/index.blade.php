@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12 p-4 mb-1">
            <h1 class="text-dark fw-bolder">{{$user->name}}</h1>
            <p>Posted {{$posts->count()}} {{Str::plural('post', $posts->count())}} and recevied {{$user->receivedLikes->count()}} likes</p>
        </div>

        <div class="col-12 bg-white p-4 rounded-3">
            @if ($posts->count())
                @foreach($posts as $post)
                    <x-post :post="$post"/>
                @endforeach
                {{ $posts->links() }}
            @else
                <p>{{$user->name}} does not have any posts</p>
            @endif
        </div>

    </div>
@endsection
