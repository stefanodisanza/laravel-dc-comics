<h1>{{ $comic->title }}</h1>
<p>{{ $comic->description }}</p>
<p>Price: {{ $comic->price }}</p>

@foreach($comics as $comic)
  @if($comic->id)
    <a href="{{ route('comics.show', ['id' => $comic->id]) }}">{{ $comic->title }}</a>
  @endif
@endforeach

