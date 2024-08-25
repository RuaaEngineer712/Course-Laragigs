@extends('Job.layout')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@vite('resources/css/app.css')


<div class = "middle">
    <div class = "laragig">
        <div class = "seperate">
            <h1 class = "Lara">LARA</h1>
            <h1>GIGS</h1>
        </div>
    </div>
        
    <div class = "discription">
        <h1 class = "disc-text">Find or post Laravel jobs & projects</h1>
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

@section('sign')
    
@endsection


