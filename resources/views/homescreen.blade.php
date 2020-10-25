@extends('master', ['Username' => Auth::user()->username])

@section('content')
<div class="all-posts">
    <div class="posting">
        <div class="profile"></div>
        <form role="form" action="/" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <textarea name="post-input" id="post-input" cols="" rows="3" class="post-input" placeholder="Tell me something"></textarea>
                {{-- <input type="text" placeholder="Tell me something" class='post-input'> --}}
                @error('post-input')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" name="images" id="images" class="form-control" style="color: grey"></input>
                <button type="submit" class="button-post">Post</button>
            </div>
        </form>
    </div>

    <section>
        @forelse ($post as $key => $post)
        <div class="comment-post">

            <a href="/post/{{$post->id}}" class="post-link"></a>
            <div class="profile"></div>
            <div class="comment-content">
                <a href="/profile/{{$post->author->username}}" class="author-username">{{'@'.$post->author->username}}</a>
                <p> {{ $post->isi}} </p>
                @if($post->images)
                <img class="card-img-top" src="{{asset($post->images)}}" class="img-fluid" style="width:200px">
                @endif
            </div>
        </div>
        @empty
        <p>Tidak ada data post</p>
        @endforelse
    </section>          
</div>
@endsection