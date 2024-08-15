<nav></nav>

<body>
    <img src = "{{ asset('images/no-image.png') }}"/>
    <h1>{{ $job->title }}</h1>
    <h3>{{ $job->company }}</h3>
    <h3>{{ $job->discreption }}</h3>
    <p>{{ $job->tags }}</p>
    <p>{{ $job->location }}

</body>