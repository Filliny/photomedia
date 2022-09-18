<div class="form-group">
    <label for="name">Article Name</label>
    <input name="name" type="text" id="name" class="form-control @error('name') is-invalid @enderror" value="@isset($article){{$article->name}}@endisset">
    @error('name')
    <div class="invalid-feedback is-invalid">{{$message}}</div>
    @enderror
</div>

<div class="form-group mt-3">
    <label for="content">Article content</label>
    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">@isset($article) {{$article->content}}@endisset</textarea>
    @error('content')
    <div class="invalid-feedback is-invalid">{{$message}}</div>
    @enderror
</div>

<div class="form-group mt-3">
    <label for="category_id">Article category</label>
    <select name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}"  @isset($article) @if($article->category_id==$category->id) selected @endif  @endisset >{{$category->name}}</option>
        @endforeach
    </select>
    @error('category_id')
    <div class="invalid-feedback is-invalid">{{$message}}</div>
    @enderror
</div>

<div class="form-group mt-3">
    <label for="category_id">Article tags</label>
    <select name="tag[]" id="category_id" class="form-control" multiple>
        @foreach($tags as $tag)
            <option value="{{$tag->id}}" @isset($article) @if( $article->tags->contains($tag->id)) selected @endif  @endisset>{{$tag->name}}</option>
        @endforeach
    </select>

</div>

<div class="form-group mt-3 ml-3">
    <input type="checkbox" class="form-check-input" name="published" id="published" value="1" >
    <label for="published" class="form-check-label ml-1">Article published</label>

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

@include('ckeditor')
@include('filemanager')

