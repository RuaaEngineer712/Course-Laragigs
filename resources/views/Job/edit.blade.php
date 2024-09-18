@include('Job.nav')
    
<div class = "create-head">
    <h1>Edit A GIG</h1>
    <p>Edit: {{ $job->title }}</p>
</div>
    
<div>
    <form action="{{ route('job.update', $job) }}" method="POST" enctype="multipart/form-data" class = "create">
        @csrf
        @method('PUT')
        <h1>Company Name</h1>
        <input type="text" name = "company" value= "{{$job->company}}" />
        @error('company')
            <div style="color: red; margin-left: -20%;">{{ $message }}</div>
        @enderror
        <h1>Email</h1>
        <input type="email" name = "email" value= "{{$job->email}}" />
        @error('email')
            <div style="color: red; margin-left: -20%;">{{ $message }}</div>
        @enderror
        <h1>Job Title</h1>
        <input type="text" name = "title" placeholder = "Example: Senior Laravel Developer" style = "font-size : small " value= "{{$job->title}}" />
        @error('title')
            <div style="color: red; margin-left: -20%;">{{ $message }}</div>
        @enderror
        <h1>Job Location</h1>
        <input type="text" name = "location" placeholder = "Example: Romote, Boston MA, etc" style = "font-size : small " value= "{{$job->location}}" />
        @error('location')
            <div style="color: red; margin-left: -20%;">{{ $message }}</div>
        @enderror
        <h1>Website / Application URL</h1>
        <input type="text" name = "website" value= "{{$job->website}}" />
        @error('website')
            <div style="color: red; margin-left: -20%;">{{ $message }}</div>
        @enderror
        <h1>Tags (Comma seperated)</h1>
        <input type="text" name = "tags" placeholder = "Example: Laravel, Backend, Postgres, etc" style = "font-size : small " value= "{{$job->tags}}" />
        @error('tags')
            <div style="color: red; margin-left: -20%;">{{ $message }}</div>
        @enderror
        <h1>Company Logo</h1>
        @if($job->logo)
            <img src="{{ url('storage/' . $job->logo) }}" alt="Company Logo" style="max-width: 200px;">
        @endif
        <input type="file" name="logo" />   <br>
        @error('logo')
            <div style="color: red; margin-left: -20%;">{{ $message }}</div>
        @enderror
        <br>
        <h1>Job description</h1>
        <textarea name = "discreption" row = "100" placeholder = "Example: Include Tasks, requirement, salary, etc" style = "font-size : small ">{{$job->discreption}}</textarea>
        {{-- <input type="text" name = "discreption" placeholder = "Example: Include Tasks, requirement, salary, etc" style = "font-size : small "/> --}}
        @error('discreption')
            <div style="color: red; margin-left: -20%;">{{ $message }}</div>
        @enderror
        <button type="submit" class = "create-button" > Submit </button>

        </form>
</div>

{{-- @include('Job.footer') --}}