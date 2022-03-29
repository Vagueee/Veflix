@extends('layouts.main')
@section('container')

<x-app-layout>
@foreach ($veflix as $movies)
<div class="d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('/storage/image/' . $movies->image)}}" alt="{{ $movies->image }}" max-width="600" max-height="400">
        <div class="card-body">
            <h5 class="card-title">{{ $movies->title }}</h5>
            <p class="card-text">{{ $movies->synopsis }}</p>
            <a href="/veflix/{{ $movies->id }}/detail" class="btn btn-primary">Detail</a>
        </div>
    </div>
</div>
<br>
@endforeach
</x-app-layout>

@endsection
