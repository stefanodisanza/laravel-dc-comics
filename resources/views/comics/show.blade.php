<style>
  img{
    max-width: 400px;
  }
</style>
<div class="card">
  <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }} thumbnail">
  <div class="card-body">
    <h5 class="card-title">{{ $comic->title }}</h5>
    <p class="card-text">{{ $comic->description }}</p>
    <p class="card-text"><strong>Price:</strong> {{ $comic->price }}</p>
    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Elimina</button>
    </form>
    <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna indietro</a>
  </div>
</div>
<div class="list-group mt-3">
  @foreach($comics as $comic)
    @if($comic->id)
      <a href="{{ route('comics.show', ['id' => $comic->id]) }}" class="list-group-item list-group-item-action">{{ $comic->title }}</a>
    @endif
  @endforeach
</div> 
@vite('resources/js/app.js')