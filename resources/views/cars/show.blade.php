@extends('layouts.home')

@section('title', 'Car Details')

@section('content')
  <section>
    <h1>Car by ID</h1>
    <hgroup>
      <h3>{{ $car['model'] }} - {{ $car['year_made'] }}</h3>
      <p>{{ $car['brand'] }}</p>
    </hgroup>
</section>
<a href="{{ route('cars.edit', $car->id) }}" class="contrast" role="button" style="width: 49%">Edit</a>
<a href="{{ route('cars.index') }}" class="secondary" role="button" style="width: 49%">Go back</a>
<form action="{{ route('cars.destroy', $car->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="outline" style="margin-top:1rem; width: 99%;">Delete</button>
</form>
@endsection
