@extends('layouts.main')
@section('container')

<title>Detail | Veflix</title>

<div class="card">
  <div class="card-header">
  Movie ID : {{ $veflix->id }}
  </div>
  <div class="card-body">
    <img class="card-img-top" src="{{ asset('app/public/image/' . $veflix->image) }}" alt="{{ $veflix->image }}">
    <h5 class="card-title">{{ $veflix->title }}</h5>
    <br>
    Synopsis :
    <p class="card-text">{{ $veflix->synopsis }}</p>
    <br>
    Duration (Minutes):
    <p class="card-text">{{ $veflix->duration }}</p>
    <br>
    Genre :
    <p class="card-text">{{ $veflix->genre }}</p>
    <br>
    Rating :
    <p class="card-text">{{ $veflix->rating }}</p>
    <br>
    <div class="d-flex justify-content-center">
    <a href="/veflix/{{ $veflix->id }}/edit" class="btn btn-warning">Edit</a> | 
      <form action="/veflix/{{ $veflix->id }}" method="POST">
          @csrf
          @method('delete')
            <input type="submit" class="btn btn-danger" value="Delete"></input>
      </form> | 
      <a href="/dashboard" class="btn btn-primary">Kembali</a>
    </div>
  </div>
</div>