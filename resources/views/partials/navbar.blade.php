<div class="nav">
    <div class="home">
<<<<<<< HEAD
        <a aria-label='Brand Logo' href="/post">Laravel Sosmed.</a>
        <button aria-label="dropdown menu" class="menu" type="button">
            <span class="fas fa-bars"></span>
=======
        <a aria-label='Brand Logo' href="/">talkey.</a>
        <button aria-label="dropdown menu" class="menu" type="button">
        <span class="fas fa-bars"></span>
>>>>>>> 55f6092374795ec31a6ebdfb5fe64925040f9bbb
        </button>
    </div>

    <div class="toHome">
        <a href="/"><i class="fas fa-home"></i></a>
    </div>
    
    <div class="nav-list largeMode">
        <ul>
<<<<<<< HEAD
            <li><a href="#/favourite"><i class="fas fa-search"></i> Search</a></li>
            <li><a href="/profile"><i class="fas fa-user"></i> Profile</a></li>
            <!-- <li><a href="#/"><i class="fas fa-sign-out-alt"></i> Logout</a></li> -->


            <li class="nav-item dropdown">
              <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a> -->

            <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->

                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

    </ul>
</div>


=======
            <li><a href="#"><i class="fas fa-search"></i> Search</a></li>
            <li><a href="/profile/{{ $Username }}"><i class="fas fa-user"></i> Profile</a></li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            

            
        </ul>
    </div>
>>>>>>> 55f6092374795ec31a6ebdfb5fe64925040f9bbb

</div>