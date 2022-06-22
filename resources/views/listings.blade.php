@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        @unless(count($listings) == 0)
                            @foreach($listings as $listing)
                                <h4 class="h4 link"><a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a></h4>
                                <p>{{ $listing['description'] }}</p>
                            @endforeach
                        @else
                            <p>No listing found</p>
                        @endunless

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

