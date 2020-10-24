@extends('master')

@section('content')
<section>
    <h2>Comment</h2>
    <div class="posting">
        <div class="profile"></div>
        <form action="">
            <textarea name="comment-post" id="comment-post" cols="" rows="3" class="post-input" placeholder="Tell me something"></textarea>
            <a href="/post" class="cancel cancel-button">Cancel</a>
            <button type="submit" class="button-post">Edit</button>
        </form>
    </div>
</section>
@endsection