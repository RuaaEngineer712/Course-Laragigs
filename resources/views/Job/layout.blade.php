<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@vite('resources/css/app.css')

<nav> 
    <a href = "/job"><img class = "logo" src = "{{ asset('images/logo.png') }}"/></a>

    <div class = "auth">
        <div><a href = "auth/register"><i class="fas fa-user-plus"></i>Registeration</a></div>
        <div><a href = "#"><i class="fas fa-sign-in-alt"></i>Login</a></div>
    </div>
</nav>




<main>
    @yield('content')
</main>

</body>

{{-- <footer>
    <div class="foot">
        <p>Copyright @ 2022, All Right reserved</p>
        <button>Post Job</button>
    </div>
</div>
</footer> --}}
