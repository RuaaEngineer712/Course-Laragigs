<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@vite('resources/css/app.css')

@include('Job.nav')

@include('Job.search', ['customClass' => 'single-job i'])

<x-flash-messege />


<body class = "single-job">  
    <a href="/job" class="back">
        <i class="fas fa-arrow-left back-icon"></i> Back
    </a>
    <div class = "job-item">

        <img src = "{{ url('storage/' . $job->logo) }}" class = "job-img"/>
        <h1 class = "job-title"> {{ $job->title }} </h1>
        <h1 class = "job-company"> {{ $job->company }} </h1>

        @include('job.tags', [ 'tagCsv' => "$job->tags" , 'containerClass' => "tags-inline-index-single" , 'linkClass' => "job-tags-index-single"])
        
        <p class = "job-location">
            <i class = "fas fa-map-marker-alt location-icon"></i>
            {{ $job->location }} 
        </p>
        
        <br>

        <hr><br>  

        <div class = "job-discreption">
            <h1>Job Discreption </h1>
            {{ $job->discreption }} 
        </div>
        
        <br>

        <a href = "mailto:{{ $job->email }}">
            <button class = "red-button" >
                <i class="fas fa-envelope"></i>
                Contact Employer
            </button>
        </a>

        <a href = "{{ $job->website }}">
            <button class = "black-button" >
                <i class="fas fa-globe"></i>
                Visit Website
            </button>
        </a>
    </div>
</body>

@include('job.footer')
