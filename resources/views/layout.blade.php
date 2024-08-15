<nav>
    <div>
        <img src="{{asset('images/logo.png')}}">logo</img>
    </div>

    <div class = "">
        <a href="#"><p>Register</p></a>
        <a href="#"><p>Login</p></a>
    </div>
</nav>

<body>
    <div class = "">
        <div class = "">
            <h1 class = "">LARA</h1>
            <h1 class = "">GIGS</h1>
        </div>

        <p class = "">Find or post Laravel jobs & project</p>

        <button class="">SIGN UP To List A GIG</button>
    </div>

    <div class = "">
        <form>
            <input name = "search" placeholder="search"/>
            <button class = "">Search</button>
        </form>
        
    </div>

    <main>
        {{ $slot }}
    </main>

</body>

<footer>
    <div>
        <p>copyright @ 2022, All Right reserved</p>
        <button>Post Job</button>
    </div>
</footer>
