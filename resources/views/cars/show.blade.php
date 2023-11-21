@extends('layouts.home')

@section('title', 'Cars')

@section('content')
  <section>
    <h1>Car by ID</h1>
    <hgroup>
      <h3>{{ $car['model'] }} - {{ $car['year_made'] }}</h3>
      <p>{{ $car['brand'] }}</p>
    </hgroup>
  </section>
@endsection
