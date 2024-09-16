<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@vite('resources/css/app.css')

<nav> 
    <a href = "/job"><img class = "logo" src = "{{ asset('images/logo.png') }}"/></a>

    <div class = "auth">
        @auth
        <!-- Show Logout link for authenticated users -->
        <div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    @endauth

    @guest
        <!-- Show Register and Login links for guests -->
        <div><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Registration</a></div>
        <div><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></div>
    @endguest


        
    </div> 
</nav>