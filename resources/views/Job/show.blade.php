<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@vite('resources/css/app.css')

@include('Job.nav')

@include('Job.search')

<body class = "single-job">  
    <a href="/job" class = "back"><i class="fas fa-arrow-left"></i>Back</a>
    <div class = "job-item">
        <img src = "{{ url('storage/' . $job->logo) }}" class = "job-img"/>
        <h1 class = "job-title"> {{ $job->title }} </h1>
        <h1 class = "job-company"> {{ $job->company }} </h1>


        @php
            $tags = explode(',', $job->tags);
        @endphp


        <div class = "tags-inline-index-single">
            @foreach ($tags as $tag)
                <a href = "?tags={{ $tag }}" class = "job-tags-index-single"><p>{{$tag}}</p></a>
            @endforeach
        </div>
        {{-- <x-tags  :tagCsv="$job->tags"/> --}}

        
        <p class = "job-location">
            <i class = "fas fa-map-marker-alt location-icon"></i>
            {{ $job->location }} 
        </p><br>       
        <hr><br>  
        <div class = "job-discreption">
            <h1>Job Discreption </h1>
            {{ $job->discreption }} 
        </div><br>
        <a href = "mailto:{{ $job->email }}"><button class = "red-button" >
            <i class="fas fa-envelope"></i>
            Contact Employer
        </button></a>
        <a href = "{{ $job->website }}"><button class = "black-button" >
            <i class="fas fa-globe"></i>
            Visit Website
        </button></a>
    </div>
</body>

@include('job.footer')
