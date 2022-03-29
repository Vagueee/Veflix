@extends('layouts.main')
@section('container')

<style>
img{
  max-width: 200px;
  max-height: 400px;

}
</style>

<title>Detail | Veflix</title>

<div class="card">
  <div class="card-header">
  Movie ID : {{ $veflix->id }}
  </div>
  <div class="card-body">
    <img style="align-items: center;"src="{{ asset('/storage/image/' . $veflix->image)}}" alt="{{ $veflix->image }}">
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
          @method("DELETE")
            <input type="submit" class="btn btn-danger" value="Delete"></input>
      </form> | 
      <a href="/dashboard" class="btn btn-primary">Kembali</a>
    </div>
  </div>
</div>