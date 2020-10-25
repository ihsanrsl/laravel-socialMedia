@extends('master', ['Username' => Auth::user()->username])

@section('content')
<section>
    <h2>Edit Post</h2>
    <div class="posting editing">
        <div class="profile"></div>
        <form method="POST" action="/post/{{$posts->id}}">
            @csrf
            @method('PUT')

            <textarea name="edit_post" id="edit_post" cols="" rows="3" class="post-input" placeholder="Tell me something"> {{$posts->isi}} </textarea>
            <a href="/post/{{$posts->id}}" class="cancel cancel-button">Cancel</a>
            <button class="button-post" type="submit">Edit</button>
            {{-- <a href="/post" class="button-post">Edit</a>        --}}
        </form>
    </div>
</section>
@endsection