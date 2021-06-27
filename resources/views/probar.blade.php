@extends("layouts.paginas")

@section("pagina")
    
    @forelse ($forums->news as $new)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                {{$new->user->name}}
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                {{$new->created_at->toFormattedDateString()}}
            </h6>
            <p class="card-text">
                {{$new->title}}
            </p>
            <p class="card-text">
                {{$new->content}}
            </p>
        </div>
    </div>
    @empty
    @endforelse

<h1>posts</h1>

    @forelse ($forums->posts as $post)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                {{$post->user->name}}
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                {{$post->created_at->toFormattedDateString()}}
            </h6>
            <p class="card-text">
                {{$post->title}}
            </p>
            <p class="card-text">
                {{$post->content}}
            </p>
        </div>
    </div>
    @empty
    @endforelse



<h1>Guides</h1>

    @forelse ($forums->guides as $guide)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                {{$guide->user->name}}
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                {{$guide->created_at->toFormattedDateString()}}
            </h6>
            <p class="card-text">
                {{$guide->title}}
            </p>
            <p class="card-text">
                {{$guide->content}}
            </p>
        </div>
    </div>
    @empty
    @endforelse



    
@endsection