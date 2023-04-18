<head>
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <style>
    img{
      max-width: 100%;
    }
  </style>
</head>

@extends('layouts.app')

@section('content')

<div class="container mt-5">
  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  <div class="row">
    <div class="col-md-6">
      <h2>Comics</h2>
    </div>
    <div class="col-md-6 text-right">
      <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi nuovo fumetto</a>
    </div>
  </div>
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
