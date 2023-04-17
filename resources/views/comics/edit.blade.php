@extends('layouts.app')

@section('title', 'Edit Comic')

@section('content')
    <h1>Edit Comic</h1>
    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $comic->title }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ $comic->description }}</textarea>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" value="{{ $comic->price }}" required>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
