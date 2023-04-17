<h1>{{ $comic->title }}</h1>
<img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }} thumbnail">
<p>{{ $comic->description }}</p>
<p>Price: {{ $comic->price }}</p>

<a href="{{ route('comics.index') }}" class="btn btn-primary">Torna indietro</a>

{{-- @foreach($comics as $comic)
  @if($comic->id)
    <a href="{{ route('comics.show', ['id' => $comic->id]) }}">{{ $comic->title }}</a>
  @endif
@endforeach --}}
