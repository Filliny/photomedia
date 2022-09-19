<div class=" d-flex flex-row">

    <input wire:model="search" type="text" placeholder="Search here..."/>

    @foreach($found_articles as $farticle)
        <div class="card m-2" style="width: 18rem;">
            <img class="card-img-top" src="{{Storage::url($farticle->image)}}" alt="{{$farticle->name}}">
            <div class="card-body">
                <h5 class="card-title">{{$farticle->name}}</h5>
                <p class="card-text">{{$farticle->shortContent}}</p>
                <a href="{{route('article',['article'=>$farticle->slug])}}" class="btn btn-primary">Read All</a>
            </div>
        </div>

    @endforeach

</div>
