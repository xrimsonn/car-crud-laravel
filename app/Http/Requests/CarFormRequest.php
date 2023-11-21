<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarFormRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'model' => 'required',
      'year_made' => ['required', 'integer'],
      'brand' => 'required',
    ];
  }

  protected function prepareForValidation()
  {
    $this->merge([
      'model' => strip_tags($this->model),
      'year_made' => strip_tags($this->year_made),
      'brand' => strip_tags($this->brand),
    ]);
  }
}
