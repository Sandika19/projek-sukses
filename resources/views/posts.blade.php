@extends('layouts/main')

@section('container')

<div class="row">
    <div class="col-md-6">
        <form action="/posts">
            <div class="input-group mb-3 mt-2">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
              </div>
              
        </form>
    </div>
</div>

@if($posts->isEmpty())
    <div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
        <h3 class="text-center">Tidak ada lowongan magang saat ini.</h3>
    </div>
@else
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-4 mt-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->divisi }}</a>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Divisi <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                            <small class="text-muted"> - {{ $post->created_at->diffForHumans() }}</small>
                        </h6>
                        <p class="card-text">{!! $post->excerpt !!}</p>
                        <a style="background-color: #003F7D; color:white;" class="btn" href="/posts/{{ $post->slug }}">Read more..</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

{{ $posts->links() }}


@endsection
