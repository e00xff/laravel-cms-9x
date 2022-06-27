@props(['listing'])
<x-card>
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">
                <a href="/listings/{{ $listing['id'] }}">
                    {{ $listing->title }}
                </a>
            </h5>

            <p class="card-text">{{ $listing->description }}</p>
            <x-listing-tags :tagsCsv="$listing->tags" />

            <p class="card-text">
                <small class="text-muted">
                    {{ $listing->location }}
                </small>
            </p>

        </div>
    </div>
</x-card>
