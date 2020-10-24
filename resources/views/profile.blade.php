@extends('master')

@section('content')
<div class="detail-section">
    <div class="profile-user">
        <div class="author-profile">
            <div class="profile"></div>
            <div class="author-name">
                <h2>Author Name</h2>
                <p>@Username</p>
                <a href="" class="follow-button">Follow</a>
            </div>
        </div>

        <div class="profile-about">
            <p>Biography, Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, vel.</p>
            <div class="profile-detail">
                <div class="profile-total-post">
                    <p>Post</p>
                    <p>9</p>
                </div>
                <div class="profile-total-followings">
                    <p>Followings</p>
                    <p>274</p>
                </div>
                <div class="profile-totla-followers">
                    <p>Followers</p>
                    <p>411</p>
                </div>
            </div>
        </div>
    </div>

    <div class="detail-comment">
        <h2>Post</h2>
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
</div>
@endsection