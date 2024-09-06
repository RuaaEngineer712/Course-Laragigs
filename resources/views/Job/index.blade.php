@include('Job.nav')

@include('Job.background')

@include('Job.search')

<div class = "jobs">
    
        @foreach ($jobs as $job)
        <div class = "item">
            {{-- <img src="{{ asset('storage/' . $job->logo) }}" alt="Company Logo" class = "img"> --}}

            <img src = "{{ asset ('images/logo.png') }}" class = "img"/>

            <a href = "{{ route('job.show', $job->id) }}"  class = "title">
                <h1>{{ $job->title }}</h1>
            </a>

            <h3 class = "company">{{ $job->company }}</h3>
            <x-tags  :tagCsv="$job->tags"/>
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

@include('Job.footer')

