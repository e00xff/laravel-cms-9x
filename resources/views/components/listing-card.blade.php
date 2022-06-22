@props(['listing'])
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
        </div>
        <div class="col-md-8">
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
    </div>
</div>
