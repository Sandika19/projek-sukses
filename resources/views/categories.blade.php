@extends('layouts/main')

@section('container')

<div class="container mt-5">
    <h1 class="mb-5">Categories</h1>
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <a style="color: black" class="text-decoration-none" href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                    </h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <a href="/posts" class="btn btn-primary mt-4">Back</a>
</div>

@endsection
