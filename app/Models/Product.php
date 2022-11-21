<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'category',
        'description'
    ];

    public function rules(): array
    {
        return [
            'name' => 'required|max:30',
            'image' => 'required|file|mimes:png',
            'category' => 'required|max:30',
            'description' => 'required|max:100',
        ];
    }
}
