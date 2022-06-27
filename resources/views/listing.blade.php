@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <x-card class="pt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="h4 link"><a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a></h4>
                            <p>{{ $listing['description'] }}</p>
                        </div>
                    </div>
                </x-card>

            </div>
        </div>
    </div>

@endsection

