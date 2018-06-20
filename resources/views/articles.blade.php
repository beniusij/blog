<?php $articles = App\Article::all() ?>

@extends ('layouts/layout')

@section('title', 'Articles')

@section('bg-image', '/bg-images/articles-bg.jpeg')

@section('content')

<div>

    @foreach ($articles as $a)

            <div class="row">
                <a href="#" class="col-md-8 offset-md-2 article-item">
                    <img src="{{ Voyager::image($a->image) }}" class="img-thumbnail">
                    <h2> {{ $a->title }}</h2>
                    {{ $a->sample }}
                </a>
            </div>

    @endforeach
</div>

@endsection