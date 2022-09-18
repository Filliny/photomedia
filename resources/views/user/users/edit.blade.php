@extends($extends)

@section('editor')
    <h2>Choose your avatar</h2>
    <div class="d-flex flex-row align-items-center">
        <div id="holder" class="m-1 rounded-circle overflow-hidden">
            @isset($user->avatar)<img style="height: 5rem" src="{{$user->avatar}}">@endisset
        </div>
        <form action="{{route('users.update',['user'=>$user->id])}}" id="avatar" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="input-group">
           <span class="input-group-btn">
             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
               <i class="fa fa-picture-o"></i> Choose
             </a>
           </span>
                <input id="thumbnail" class="form-control" type="hidden" name="image">
            </div>
        </form>
    </div>
    <div class="d-flex">
        <button  type="submit" form="avatar" class="btn btn-primary mt-3">@isset($user->avatar) Remove @else Save @endisset</button>

    </div>





    @include('ckeditor')
    @include('filemanager')
@endsection
