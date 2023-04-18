<form action="{{ route('comics.update', ['id' => $comic->id]) }}" method="POST" class="mt-4">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $comic->title) }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $comic->description) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $comic->price) }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna indietro</a>
</form>


@vite('resources/js/app.js')