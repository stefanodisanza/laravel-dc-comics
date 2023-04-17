<form method="POST" action="{{ route('comics.update', ['id' => $comic->id]) }}">
    @csrf
    @method('PUT')
    <!-- Resto del codice della form -->
</form>
