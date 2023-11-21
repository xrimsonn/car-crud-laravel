<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\CarFormRequest;

class CarsController extends Controller
{
  public function index()
  {
    return view('cars.index', [
      'cars' => Car::all()
    ]);
  }

  public function create()
  {
    return view('cars.create');
  }

  public function store(CarFormRequest $request)
  {
    $data = $request->validated();
    Car::create($data);
    return redirect()->route('cars.index');
  }

  public function show(Car $car)
  {
    return view('cars.show', [
      'car' => $car
    ]);
  }

  public function edit(Car $car)
  {
    return view('cars.edit', [
      'car' => $car
    ]);
  }

  public function update(CarFormRequest $request, Car $car)
  {
    $data = $request->validated();
    $car->update($data);

    return redirect()->route('cars.show', $car->id);
  }

  public function destroy(Car $car)
  {
    $car->delete();
    return redirect()->route('cars.index');
  }
}
