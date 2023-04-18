<h1>{{ $comic->title }}</h1>
<img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }} thumbnail">
<p>{{ $comic->description }}</p>
<p>Price: {{ $comic->price }}</p>
<form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Elimina</button>
</form>


<a href="{{ route('comics.index') }}" class="btn btn-primary">Torna indietro</a>

@foreach($comics as $comic)
  @if($comic->id)
    <a href="{{ route('comics.show', ['id' => $comic->id]) }}">{{ $comic->title }}</a>
  @endif
@endforeach
