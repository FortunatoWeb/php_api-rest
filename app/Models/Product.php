<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];

    public function getPriceAtribbute()
    {
        return $this->atribbutes['price'] / 100;
    }

    public function setPriceAtribbute($attr)
    {
        return $this->atribbutes['price'] = $attr * 100;
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
