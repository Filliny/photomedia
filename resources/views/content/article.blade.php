@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3">
            <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="here must be image - upload it !">
            <div class="card-body">
                <h5 class="card-title">{{$article->name}}</h5>
                <p class="card-text">{!! $article->content !!}}</p>
                <p class="card-text"><small class="text-muted">{{date('d.m.Y H:m', strtotime($article->created_at))}}</small></p>
            </div>
        </div>
    </div>


@endsection
