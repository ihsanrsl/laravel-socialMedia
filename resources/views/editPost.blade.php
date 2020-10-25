@extends('master', ['Username' => Auth::user()->username])

@section('content')
<section>
    <h2>Edit Post</h2>
    <div class="posting editing">
        <div class="profile"></div>
        <form action="">
            <textarea name="edit-post" id="edit-post" cols="" rows="3" class="post-input" placeholder="Tell me something"></textarea>
            <a href="/post" class="cancel cancel-button">Cancel</a>
            <button type="submit" class="button-post">Edit</button>            
        </form>
    </div>
</section>
@endsection