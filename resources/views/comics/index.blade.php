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

  <table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Show</th>
    </tr>
    @foreach ($comics as $comic)
        <tr>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->price }}</td>
            <td><a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Show</a></td>
        </tr>
    @endforeach
  </table>
@endsection