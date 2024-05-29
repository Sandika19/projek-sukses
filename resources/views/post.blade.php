@extends('layouts/main')

@section('container')

<article>

        <div class="container">
                 <div class="row justify-content-center">
                        <div class="col-md-8">
                                <h2>{{ $post->divisi }}</h2>
                                <p>Divisi <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                                {!! $post->body !!}
                                <br>
                                <a href="/posts">Back</a>
                        </div>
                </div>
        </div>




</article>
@endsection
