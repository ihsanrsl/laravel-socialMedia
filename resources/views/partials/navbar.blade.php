<div class="nav">
    <div class="home">
        <a aria-label='Brand Logo' href="/post">Laravel Sosmed.</a>
        <button aria-label="dropdown menu" class="menu" type="button">
            <span class="fas fa-bars"></span>
        </button>
    </div>

    <div class="toHome">
        <a href=""><i class="fas fa-home"></i></a>
    </div>
    
    <div class="nav-list largeMode">
        <ul>
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



</div>