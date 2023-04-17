<head>
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Create New Comic</h1>

    <form action="{{ route('comics.store') }}" method="POST">
      @csrf

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label for="image">Image URL</label>
        <input type="text" name="image" id="image" class="form-control">
      </div>

      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" id="price" class="form-control" step="0.01">
      </div>

      <div class="form-group">
        <label for="series">Series</label>
        <input type="text" name="series" id="series" class="form-control">
      </div>

      <div class="form-group">
        <label for="sale_date">Sale Date</label>
        <input type="date" name="sale_date" id="sale_date" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>

  <div class="container mt-5">
    <h2>Comics</h2>
    <div class="row">
      @foreach ($comics as $comic)
      <div class="col-md-6">
        <div class="card mb-3">
          <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }} thumbnail">
          <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">{{ $comic->description }}</p>
            <p class="card-text"><small class="text-muted">Price: {{ $comic->price }}</small></p>
            <a href="{{ route('comics.edit', ['id' => $comic->id]) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('comics.show', ['id' => $comic->id]) }}" class="btn btn-secondary">Show</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection
