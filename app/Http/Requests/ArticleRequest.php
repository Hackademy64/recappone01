<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:4|max:50', 
            'brand' => 'required|min:4|max:50', 
            'model' => 'required|min:4|max:50', 
            'body' => 'required|min:10|max:5000', 
        ];
    }


    public function messages(){
        return [ 
        'title.required' => "Il titolo è obbligatorio",
        'brand.required' => "Il marchio è obbligatorio",
        'model.required' => "Il modello è obbligatorio",
        'body.required' => "E scrivile due righe dai!",
        'title.min' => "Il titolo è troppo  corto, deve essere almeno 10 caratteri",
        'brand.min' => "Il marchio è troppo  corto, deve essere almeno 10 caratteri",
        'model.min' => "Il modello è troppo  corto, deve essere almeno 10 caratteri",
        'body.min' => "E scrivile altre due righe dai!",
        'title.max' => "Il titolo è troppo  lungo, deve essere massimo 50 caratteri",
        'brand.max' => "Il marchio è troppo  lungo, deve essere massimo 50 caratteri",
        'model.max' => "Il modello è troppo  lungo, deve essere massimo 50 caratteri",
        'body.max' => "Datti una regolata zio, hai scritto troppo!",      
    ];
        }



}
