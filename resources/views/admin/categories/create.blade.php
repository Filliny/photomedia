@extends('admin.dashboard')


@section('editor')
    <form action="{{route('admin.categories.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input name="name" type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name')}}">
            @error('name')
            <div class="invalid-feedback is-invalid">{{$message}}</div>
            @enderror
        </div>
        <div class="input-group">
            <span class="input-group-btn">
             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
               <i class="fa fa-picture-o"></i> Choose
             </a>
            </span>
            <input id="thumbnail" class="form-control" type="hidden" name="image">
        </div>
        <div id="holder">
            @isset($article)<img style="height: 5rem" src="{{Storage::url($article->image)}}">@endisset
        </div>
        <button class="btn btn-primary mt-3">Save</button>
    </form>


    @include('filemanager')
@endsection
