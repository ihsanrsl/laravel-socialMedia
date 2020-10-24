@extends('master')

@section('content')
<div class="all-posts">
    <div class="posting">
        <div class="profile"></div>
        <form action="">
            <textarea name="post-input" id="post-input" cols="" rows="3" class="post-input" placeholder="Tell me something"></textarea>
            {{-- <input type="text" placeholder="Tell me something" class='post-input'> --}}
            <button type="submit" class="button-post">Post</button>
        </form>
        
    </div>

    <div class="comment-post">
        <a href="/post" class="post-link"></a>
        <div class="profile"></div>
        <div class="comment-content">
            <a href="/profile" class="author-username">@username</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni ad fugiat a rerum sunt suscipit, aliquam laudantium voluptate vitae consectetur corrupti aperiam exercitationem ullam pariatur nostrum non saepe mollitia.</p>
        </div>
    </div>

    <div class="comment-post">
        <a href="/post" class="post-link"></a>
        <div class="profile"></div>
        <div class="comment-content">
            <a href="/profile" class="author-username">@username</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni ad fugiat a rerum sunt suscipit, aliquam laudantium voluptate vitae consectetur corrupti aperiam exercitationem ullam pariatur nostrum non saepe mollitia.</p>
        </div>
    </div>

    <div class="comment-post">
        <a href="/post" class="post-link"></a>
        <div class="profile"></div>
        <div class="comment-content">
            <a href="/profile" class="author-username">@username</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni ad fugiat a rerum sunt suscipit, aliquam laudantium voluptate vitae consectetur corrupti aperiam exercitationem ullam pariatur nostrum non saepe mollitia.</p>
        </div>
    </div>

    <div class="comment-post">
        <a href="/post" class="post-link"></a>
        <div class="profile"></div>
        <div class="comment-content">
            <a href="/profile" class="author-username">@username</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni ad fugiat a rerum sunt suscipit, aliquam laudantium voluptate vitae consectetur corrupti aperiam exercitationem ullam pariatur nostrum non saepe mollitia.</p>
        </div>
    </div>

    <div class="comment-post">
        <a href="/post" class="post-link"></a>
        <div class="profile"></div>
        <div class="comment-content">
            <a href="/profile" class="author-username">@username</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni ad fugiat a rerum sunt suscipit, aliquam laudantium voluptate vitae consectetur corrupti aperiam exercitationem ullam pariatur nostrum non saepe mollitia.</p>
        </div>
    </div>

</div>
@endsection