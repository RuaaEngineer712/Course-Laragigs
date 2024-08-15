
<link href="{{ asset('/css/app.css') }}" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



<nav> 
    <img class = "logo" src = "{{ asset('images/logo.png') }}"/>

    <div class = "auth">
        <div><i class="fas fa-user-plus"></i>Registeration</div>
        <div><i class="fas fa-sign-in-alt"></i>Login</div>
    </div>
</nav>

<div class = "middle">
    <div class = "laragig">
        <div class = "seperate">
            <h1 class = "Lara">LARA</h1>
            <h1>GIGS</h1>
        </div>
    </div>

        
    <div class = "discription">
        <h1 class = "disc-text">Find or post Laravel jobs & project</h1>
        <button class="disc-button">SIGN UP To List A GIG</button>
    </div>
</div>    

<div class = "search">
    <form>
        <i class="fas fa-search search-icon"></i>
        <input name = "search" placeholder = "search Laravel Gigs...">
        <button>Search</button>
    </form>
    
</div>

<div class = "jobs">
    
        @foreach ($jobs as $job)
        <div class = "item">
            <img src="{{asset('images/logo.png')}}" class = "img"/>
            <a href = "/job/{{ $job['id'] }}" class = "title"><h1>{{ $job->title }}</h1></a>
            <h3 class = "company">{{ $job->company }}</h3>
            <p class = "tags">{{ $job->tags }}</p>
            <div> 
                <p class = "location">
                    <i class = "fas fa-map-marker-alt location-icon"></i>
                    {{ $job->location }}
                </p>
            </div>
        </div>
        @endforeach
    
</div>

{{ $jobs->links() }}


<footer>
    <div>
        <p>copyright @ 2022, All Right reserved</p>
        <button>Post Job</button>
    </div>
</footer>
