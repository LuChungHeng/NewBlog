@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row bg-white border border-1 border-top-0 rounded-3">
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
                    <div class="mb-4">
                        <a href="{{route('users.posts', $post->user)}}" class="fw-bolder text-dark" style="text-decoration:none;">{{ $post->user->name }}</a>
                        <span class="text-secondary text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        <p class="mb-2">{{ $post->body }}</p>
                    </div>

                    @can('delete', $post)<!--使用Policy確認文章能否刪除-->
                    <form action="{{ route('posts.destroy', $post) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    @endcan

                    <div class="d-flex">
                        @auth
                            @if(!$post->likedBy(auth()->user()))
                                <form action="{{ route('posts.likes', $post) }}" method="post" style="width: 40px">
                                    @csrf
                                    <button type="submit" class="btn text-primary p-0 me-5">Like</button>
                                </form>
                            @else
                                <form action="{{ route('posts.likes', $post) }}" method="post" style="width: 60px">
                                    @csrf
                                    @method('DELETE')
                                    <a><button type="submit" class="btn text-primary p-0 me-5">Unlike</button></a>
                                </form>
                            @endif
                        @endauth
                        <div class="m-0">
                            <span>{{ $post->likes->count() }}  {{Str::plural('like', $post->likes->count())}}</span>
                        </div>

                    </div>
                @endforeach
                    {{ $posts->links() }}
            @else
                <p>There are no posts</p>
            @endif
        </div>
    </div>
@endsection
