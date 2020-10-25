<div class="nav">
    <div class="home">
        <a aria-label='Brand Logo' href="/">talkey.</a>
        <button aria-label="dropdown menu" class="menu" type="button">
        <span class="fas fa-bars"></span>
        </button>
    </div>

    <div class="toHome">
        <a href="/"><i class="fas fa-home"></i></a>
    </div>
    
    <div class="nav-list largeMode">
        <ul>
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

</div>