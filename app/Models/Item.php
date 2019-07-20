<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'sku', 'link', 'price', 'description'
    ];

    public function answer() {
        return $this->hasMany(Answer::class);
    }
}
