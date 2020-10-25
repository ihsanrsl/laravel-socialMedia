@extends('master', ['Username' => Auth::user()->username])

@section('content')
    <div class="detail-section">
        
        <div class="detail-post">
            <div class="author-profile">
                <div class="profile"></div>
                <div class="author-name">
                    <h2>Author Name</h2>
                    <a href="/profile">@Username</a>
                </div>
                <a class="delete-button" href="#"><i class="fas fa-trash"></i></a>
            </div>
    
            <div class="detailed-post">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, inventore? Nihil fuga deleniti provident temporibus optio blanditiis earum esse odit quo quidem, praesentium, ipsam ipsa necessitatibus dolores dolor! Nostrum dolore inventore quod alias commodi autem tempora quidem eligendi molestiae culpa?</p>
                
                <div class="post-reaction">
                    <p><a href="/post/edit">Edit</a></p>
                    <p><a href="/post/comment">10 Comment</a></p>
                    <p><a href="#" class="like">210 Like</a></p>
                    <p class="post-date">20 Oktober 2020</p>
                </div>
            </div>
        </div>
        
        <div class="detail-comment">
            <h2>Comment</h2>
                <div class="comment-post">
                    <a href="/post" class="post-link"></a>
                    <div class="profile"></div>
                    <div class="comment-content">
                        <a href="/profile" class="author-username">@username</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni ad fugiat a rerum sunt suscipit, aliquam laudantium voluptate vitae consectetur corrupti aperiam exercitationem ullam pariatur nostrum non saepe mollitia.</p>
                        <a href="">Like</a>
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