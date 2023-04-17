<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ old('description') }}</textarea>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ old('price') }}">
    </div>
    <button type="submit">Create</button>
</form>
