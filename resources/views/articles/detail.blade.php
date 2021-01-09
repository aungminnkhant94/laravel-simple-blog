@extends('main.app')

@section("content")
    <div class="container">
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $article->title }}
                </h5>
                <div class="card-subtitle mb-2 text-muted small">
                    {{ $article->created_at->diffForHumans() }} ,
                    Category: <b>{{ $article->category->name }}</b>
                </div>
                <p class="card-text">
                    {{ $article->body }}
                </p>
                <a href="{{ url("/articles/delete/$article->id") }}" 
                   class="btn btn-warning">
                    Delete
                </a>
                <a href="{{ url("/articles/edit/$article->id") }}"
                   class="btn btn-dark">
                   Edit
                </a>
            </div>
        </div>


    </div>
@endsection