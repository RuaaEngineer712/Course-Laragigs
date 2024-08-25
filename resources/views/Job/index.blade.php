@extends('Job.layout')

@section('content')
    <div class = "jobs">
        
            @foreach ($jobs as $job)
            <div class = "item">
                <img src="{{asset('images/logo.png')}}" class = "img"/>

                <a href = "{{ route('Job.show', $job->id) }}"  class = "title">
                    <h1>{{ $job->title }}</h1>
                </a>

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

@endsection


