@extends($extends)


@section('editor')
    <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('user.articles._form')
        <button class="btn btn-primary mt-3">Save</button>
    </form>

@endsection
