@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-row">

        @foreach($articles as $article)
            <div class="card m-2" style="width: 18rem;">
                <img class="card-img-top" src="{{Storage::url($article->image)}}" alt="{{$article->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$article->name}}</h5>
                    <p class="card-text">{{$article->shortContent}}</p>
                    <a href="{{route('article',['article'=>$article->slug])}}" class="btn btn-primary">Read All</a>
                </div>
            </div>

        @endforeach

    </div>

@endsection
