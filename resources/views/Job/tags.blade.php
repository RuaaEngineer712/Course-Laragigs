<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@vite('resources/css/app.css')

@props(['tagCsv', 'containerClass' => '', 'linkClass' => ''])

@php
    $tags = explode(',', $tagCsv);
@endphp


<div class = "{{ $containerClass }}">
    @foreach ($tags as $tag)
        <a href = "?tags={{ $tag }}" class = "{{ $linkClass }}"><p>{{$tag}}</p></a>
    @endforeach
</div>


