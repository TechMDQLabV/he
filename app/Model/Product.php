<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description'];

    public static $messages = [
        'name.required' => 'Es necesario ingresar un nombre para el producto.',
        'name.min' => 'El nombre del producto debe tener al menos 3 caracteres.',
        'description.max' => 'La descripción corta solo admite hasta 250 caracteres.'
    ];
    public static $rules = [
        'name' => 'required|min:3',
        'description' => 'max:250'
    ];
}
