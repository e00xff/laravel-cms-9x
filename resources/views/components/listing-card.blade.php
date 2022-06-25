@props(['listing'])
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">
            <a href="/listings/{{ $listing['id'] }}">
                {{ $listing->title }}
            </a>
        </h5>

        <p class="card-text">{{ $listing->description }}</p>
        <div class="mb-3">
            <a href="#"><span class="badge rounded-pill bg-dark">PHP</span></a>
            <a href="#"><span class="badge rounded-pill bg-dark">MySQL</span></a>
        </div>

        <p class="card-text">
            <small class="text-muted">
                {{ $listing->location }}
            </small>
        </p>
    </div>
</div>
