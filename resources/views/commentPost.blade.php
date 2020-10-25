@extends('master', ['Username' => Auth::user()->username])

@section('content')
<section>
    <h2>Comment</h2>
    <div class="posting">
        <div class="profile"></div>
        <form method="POST" action="/post/{{$post->id}}/comments">
            @csrf
            
            <textarea name="comment-post" id="comment-post" cols="" rows="3" class="post-input" placeholder="Tell me something"></textarea>
            <a href="/post" class="cancel cancel-button">Cancel</a>
            <button class="button-post" type="submit">Comment</button>
        </form>
    </div>
</section>
@endsection