@extends('layouts.home')

@section('title', 'Cars')

@section('content')
  <section>
    <h1>List of Cars</h1>
    @if (count($cars) > 0)

      @foreach ($cars as $car)
        <hgroup>
          <h3>
            <a href="{{ route('cars.show', ['car' => $car['id']]) }}">
              {{ $car['model'] }}
            </a>
          </h3>
          <p>{{ $car['brand'] }}</p>
        </hgroup>
      @endforeach
    @else
      <hgroup>
        <h3>Sorry :(</h3>
        <p>There is no cars to display.</p>
      </hgroup>
    @endif
  </section>
@endsection
