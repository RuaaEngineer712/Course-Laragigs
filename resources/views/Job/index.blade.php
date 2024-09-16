@include('job.nav')

@include('job.background')

@include('job.search')

<div class = "jobs">
    
        @foreach ($jobs as $job)
        <div class = "item" >
            {{-- <img src="{{ asset('storage/' . $job->logo) }}" alt="Company Logo" class = "img"> --}}

            <img src = "{{ url('storage/' . $job->logo) }}" class = "img"/>

            <a href = "{{ route('job.show', $job->id) }}" class = "title">
                <h1>{{ $job->title }}</h1>
            </a>

            <h3 class = "company">{{ $job->company }}</h3>

            @php
                $tags = explode(',', $job->tags);
            @endphp


            <div class = "tags-inline-index">
                @foreach ($tags as $tag)
                    <a href = "?tags={{ $tag }}" class = "job-tags-index"><p>{{$tag}}</p></a>
                @endforeach
            </div>

            {{-- <x-tags  :tagCsv="$job->tags"/> --}}
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

<x-flash-messege />

@auth
    @include('Job.footer') 
@endauth

