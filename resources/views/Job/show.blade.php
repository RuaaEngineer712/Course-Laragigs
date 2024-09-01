<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@vite('resources/css/app.css')

@include('Job.nav')

@include('Job.search')

<body class = "single-job">  
    <a href="/job"><i class="fas fa-arrow-left"></i>Back</a>
    <div class = "job-item">
        <img src = "{{ asset('images/no-image.png') }}" class = "job-img"/>
        <h1 class = "job-title"> {{ $job->title }} </h1>
        <h1 class = "job-company"> {{ $job->company }} </h1>
        {{-- <p class = "job-tags"> {{ $job->tags }} </p> --}}
        <section class="tags-inline">
            <p class = "job-tags"> API </p>
            <p class = "job-tags"> java </p>
            <p class = "job-tags"> laravel </p>
        </section>
        
        <p class = "job-location">
            <i class = "fas fa-map-marker-alt location-icon"></i>
            {{ $job->location }} 
        </p><br>       
        <hr><br>  
        <div class = "job-discreption">
            <h1>Job Discreption </h1>
            {{ $job->discreption }} 
        </div><br>
        <button class = "red-button">
            <i class="fas fa-envelope"></i>
            Contact Employer
        </button>
        <a href = "{{ $job->website }}"><button class = "black-button" >
            <i class="fas fa-globe"></i>
            Visit Website
        </button></a>
    </div>
</body>

@include('Job.footer')
