@extends('master', ['Username'=> Auth::user()->username])

@section('content')
<div class="detail-section">
    <div class="profile-user">
        <div class="author-profile">
            <div class="profile"></div>
            <div class="author-name">
                <h2> {{$profile->name}} </h2>
                <p>  {{'@'.$store->username}} </p>
                
                @if (Auth::user()->id == $store->id) 
                    <a href="/profile/{{$store->username}}/setting" class="follow-button settings"><i class="fas fa-cog"></i></a>
                @elseif ($checkFollowing)
                   <a href="/profile/{{$store->username}}/unfollowed" class="follow-button">Unfollow</a>
                @else 
                    <a href="/profile/{{$store->username}}/followed" class="follow-button">Follow</a> 
                @endif
                
                
            </div>
        </div>

        <div class="profile-about">
            <p class="bio"> {{$profile->biography }} </p>
            <div class="profile-detail">
                <div class="profile-total-post">
                    <p>Post</p>
                    <p>{{ $post->count() }}</p>
                </div>
                <div class="profile-total-followings">
                    <p>Followings</p>
                    <p> {{ $following->count() }} </p>
                </div>
                <div class="profile-totla-followers">
                    <p>Followers</p>
                    <p> {{ $follower->count() }} </p>
                </div>
            </div>
        </div>
    </div>

    <div class="detail-comment">
        <h2>Post</h2>

        @forelse ($post as $key => $posted)
                <div class="comment-post">
                    <a href="/post/{{$posted->id}}" class="post-link"></a>
                    <div class="profile"></div>
                    <div class="comment-content">
                        <a href="/profile/{{$posted->author->username}}" class="author-username">{{'@'.$posted->author->username}}</a>
                        <p>{{$posted->isi}}</p>
                    </div>
                </div>
                @empty
                <p>No comment yet.</p>
            @endforelse
        
    </div>
</div>
@endsection
