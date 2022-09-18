@extends('admin.dashboard')

@section('editor')

    <a href="{{route('admin.categories.create')}}" class="btn btn-primary">Create</a>



    @if($categories->count() === 0)
        <p>No categories</p>
    @endif

    @include('alerts')

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>image</th>
            <th>name</th>
            <th>delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                <img src="{{Storage::url($category->image)}}" alt="" style="width: 120px; height: 80px;">
            </td>
            <td>
                <a href="{{route('admin.categories.edit',['category'=>$category->id])}}">{{$category->name}}</a>
                <span class="badge text-bg-secondary">{{$category->articles->count()}}</span>
            </td>
            <td>
                <form action="{{route('admin.categories.destroy',['category'=>$category->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-primary mt-3">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
