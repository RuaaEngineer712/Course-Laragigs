@include('job.nav')

@include('job.background')

@include('job.search')

<div class = "jobs">
    
    @foreach ($jobs as $job)
        <div class = "item">

            <img src = "{{ url('storage/' . $job->logo) }}" class = "img"/>

            <a href = "{{ route('job.show', $job->id) }}" class = "title">
                <h1>{{ $job->title }}</h1>
            </a>

            <h3 class = "company">{{ $job->company }}</h3>

            @include('job.tags', [ 'tagCsv' => "$job->tags" , 'containerClass' => "tags-inline-index" , 'linkClass' => "job-tags-index"])

            <div> 
                <p class = "location">
                    <i class = "fas fa-map-marker-alt location-icon"></i>
                    {{ $job->location }}
                </p>
            </div>

            @auth
                <div class = "update">
                    <form action="{{ route('job.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                    
                    
                    <div class="edit">
                        <a href = "{{ route('job.edit', $job->id) }}">
                            <i class = "fas fa-pen"></i>
                        </a>
                    </div>
                    
                </div>
            @endauth
            
            
        </div>
    @endforeach
    
</div>
{{ $jobs->links() }}

<x-flash-messege />

@include('Job.footer') 

