@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<div class="mb-3">
    @foreach($tags as $tag)
        <a href="/?tag={{ $tag }}">
            <span class="badge rounded-pill bg-dark"> {{ $tag }} </span>
        </a>
    @endforeach
</div>
