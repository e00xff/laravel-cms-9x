@extends('layouts.app')

@section('title')
    Listings
@endsection

@section('content')

    @if(Request::is('/'))
        @include('partials._hero')
        @include('partials._search')
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @unless(count($listings) == 0)
                    @foreach($listings as $listing)
                        <x-listing-card :listing="$listing" />
                    @endforeach
                @else
                    <p>No listing found</p>
                @endunless
            </div>
        </div>
    </div>
@endsection
