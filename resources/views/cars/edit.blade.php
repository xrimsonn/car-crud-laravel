@extends('layouts.home')

@section('title', 'Edit Car')

@section('content')
  <form method="POST" action="{{ route('cars.update', ['car' => $car->id]) }}">
    @csrf
    @method('PUT')
    <h1>Edit an Existing Car</h1>
    <label for="model">Car model:</label>
    <input type="text" name="model" id="model" value="{{ $car->model }}">
    @error('model')
      <mark>{{ $message }}</mark>
    @enderror
    <label for="year_made">Model year:</label>
    <input type="number" name="year_made" id="year_made" value="{{ $car->year_made }}">
    @error('year_made')
      <mark>{{ $message }}</mark>
    @enderror
    <label for="brand">Car brand:</label>
    <input type="text" name="brand" id="brand" value="{{ $car->brand }}">
    @error('brand')
      <mark>{{ $message }}</mark>
    @enderror
    <button type="submit" class="contrast">Submit</button>
    <a href="{{ route('cars.show', $car->id) }}" class="secondary" role="button" style="width: 100%">Cancel</a>
  </form>
@endsection
