@extends('dashboard')

@section('editor')

    <div class="d-flex flex-row">
        @foreach($articles as $article)
            <div class="card m-2" style="width: 18rem;">
                <img class="card-img-top" src="{{Storage::url($article->image)}}" alt="{{$article->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$article->name}}</h5>
                    <p class="card-text">{{$article->shortContent}}</p>
                    <a href="{{route('articles.edit',['article'=>$article->id])}}" class="btn btn-primary">Edit post</a>
                </div>
            </div>

        @endforeach
    </div>



@endsection
