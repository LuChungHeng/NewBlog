@props(['post' => $post])

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
