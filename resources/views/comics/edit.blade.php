<form action="{{ route('comics.update', ['id' => $comic->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $comic->title) }}">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ old('description', $comic->description) }}</textarea>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ old('price', $comic->price) }}">
    </div>
    <button type="submit">Update</button>
</form>

<a href="{{ route('comics.index') }}" class="btn btn-primary">Torna indietro</a>