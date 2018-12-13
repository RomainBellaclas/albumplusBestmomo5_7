<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class TypeCameraRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        $id = $this->typecamera ? ',' . $this->typecamera->id : '';
        return $rules = [
            'name' => 'required|string|max:255|unique:typecamera,name' . $id,
        ];
    }
}
