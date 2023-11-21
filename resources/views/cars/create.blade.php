@extends('layouts.home')

@section('title', 'Create Car')

@section('content')
  <form method="POST" action="{{ route('cars.store') }}">
    @csrf
    <h1>Insert a New Car</h1>
    <label for="model">Car model:</label>
    <input type="text" name="model" id="model" value="{{ old('model') }}">
    @error('model')
      <mark>{{ $message }}</mark>
    @enderror
    <label for="year_made">Model year:</label>
    <input type="number" name="year_made" id="year_made" value="{{ old('year_made') }}">
    @error('year_made')
      <mark>{{ $message }}</mark>
    @enderror
    <label for="brand">Car brand:</label>
    <input type="text" name="brand" id="brand" value="{{ old('brand') }}">
    @error('brand')
      <mark>{{ $message }}</mark>
    @enderror
    <button type="submit" class="contrast">Submit</button>
  </form>
@endsection
