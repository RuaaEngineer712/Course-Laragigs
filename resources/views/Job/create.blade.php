@include('Job.nav')
    
<div class = "create-head">
    <h1>Create A GIG</h1>
    <p>Post a gig to find a developer</p>
</div>
    
<div>
    <form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data" class = "create">
        @csrf
        <h1>Company Name</h1>
        <input type="text" name = "company"  />
        <h1>Email</h1>
        <input type="email" name = "email"  />
        <h1>Job Title</h1>
        <input type="text" name = "title" placeholder = "Example: Senior Laravel Developer" style = "font-size : small " />
        <h1>Job Location</h1>
        <input type="text" name = "location" placeholder = "Example: Romote, Boston MA, etc" style = "font-size : small " />
        <h1>Website / Application URL</h1>
        <input type="text" name = "website" />
        <h1>Tags (Comma seperated)</h1>
        <input type="text" name = "tags" placeholder = "Example: Laravel, Backend, Postgres, etc" style = "font-size : small "/>
        <h1>Company Logo</h1>
        <input type="file" name = "logo" />
        <h1>Job description</h1>
        <input type="text" name = "discreption" placeholder = "Example: Include Tasks, requirement, salary, etc" style = "font-size : small "/>
        <button type="submit" class = "create-button" > Submit </button>
    </form>
</div>

{{-- @include('Job.footer') --}}