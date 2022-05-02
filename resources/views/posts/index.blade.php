@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row bg-white rounded-3">
            <form action="{{ route('posts') }}" method="post" class="mb-4">
                @csrf
                <div class="mb-4 text-center">
                    <label for="body" class="form-label fw-bolder p-2 mt-3">新增文章內容</label>
                    <textarea name="body" id="body" class="form-control @error('body') border-danger @enderror" rows="4" placeholder="請輸入文字內容"></textarea>
                </div>

                @error('body')
                <div class="text-danger mt-2 text-sm-center">
                    {{ $message }}
                </div>
                @enderror
                <div>
                    <button type="submit" class="btn btn-primary mb-2">上傳文章</button>
                </div>
            </form>
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
