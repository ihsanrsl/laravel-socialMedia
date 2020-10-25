@extends('master', ['Username' => Auth::user()->username])

@section('content')
    <div class="detail-section">
        
        <div class="detail-post">
            <div class="author-profile">
                <div class="profile"></div>
                <div class="author-name">
                    <h2> {{$posts->author->profile->name}} </h2>
                    <a href="/profile/{{$posts->author->username}}">{{'@'.$posts->author->username}}</a>
                </div>
                @if(Auth::user() == $post->user)
                <a class="delete-button" href="#"><i class="fas fa-trash"></i></a>
                @endif
            </div>
    
            <div class="detailed-post">
                <p>{{$posts->isi}}</p>
                @if($posts->images)
                <img class="card-img-top detail" src="{{asset($posts->images)}}" class="img-fluid" style="max-width:600px">
                @endif
                
                <div class="post-reaction">
                    @if(Auth::user() == $post->user)
                    <p><a href="/post/{{$posts->id}}/edit">Edit</a></p>
                    @endif
                    <p><a href="/post/{{$posts->id}}/comments">{{$comment->count()}} Comment</a></p>
                    @if ($checkLike)
                         <p><a href="/post/{{$posts->id}}/unlike" class="like">210 Unlike</a></p>
                    @else 
                        <p><a href="/post/{{$posts->id}}/like" class="like">210 Like</a></p>
                    @endif
                    <p><a href="/" class="like">210 Like</a></p>
                    <p class="post-date">20 Oktober 2020</p>
                </div>
            </div>
        </div>

        <div class="popup">
            <div class="bg-modal"></div>
            <div class="modal">
                <p>Are you sure want to delete this post?</p>
                <form method="POST" action="/post/{{$posts->id}} " class="choice">
                    @csrf
                    @method('DELETE')

                    <button type="submit" value="delete" class="yes">Yes</button>
                    <a href="" class="cancel">Cancel</a>
                </form>
            </div>
        </div>
        

        

        <div class="detail-comment">
            <h2>Comment</h2>

            @forelse ($comment as $key => $commented)
                <div class="comment-post">
                    <a href="/post" class="post-link"></a>
                    <div class="profile"></div>
                    <div class="comment-content">
                        <a href="/profile/{{$commented->user->username}}" class="author-username">{{'@'.$commented->user->username}}</a>
                        <p>{{ $commented->isi }}</p>
                        <a href="">Like</a>
                    </div>
                </div>
                @empty
                <p>No comment yet.</p>
            @endforelse
                
        </div>
    </div>
@endsection

@push('js')
    <script>
        OpenModal = () => {
            deleteButton.addEventListener('click', function (event) {
                event.stopPropagation();
                popUp.classList.add('active');
            });
        }

        CloseModal = () => {
            choiceCancel.addEventListener('click', function (event) {
                event.preventDefault();
                popUp.classList.remove('active');
            });

            choiceBgModal.addEventListener('click', function(event) {
                popUp.classList.remove('active');
            });

        }
        Modal = () => {
            CloseModal();
            OpenModal();
        }

        Modal();
    </script>
@endpush
