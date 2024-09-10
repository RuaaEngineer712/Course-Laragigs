<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@vite('resources/css/app.css')

<nav> 
    <a href = "/job"><img class = "logo" src = "{{ asset('images/logo.png') }}"/></a>

    <div class = "auth">
        @guest
            <div><a href = "register"><i class="fas fa-user-plus"></i>Registeration</a></div>
            <div><a href = "login"><i class="fas fa-sign-in-alt"></i>Login</a></div>
            @else
                <div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-in-alt"></i> Logout
                    </a>
                </div>
        @endguest


        {{-- @auth
            <div><a href = "{{route('logout')}}"><i class="fas fa-sign-in-alt"></i>Logout</a></div>     
        @endauth --}}


        
    </div> 
</nav>