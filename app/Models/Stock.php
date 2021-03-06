<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'name', 'sku', 'link', 'price', 'description'
    ];
    protected $table = 'stock';

    public function item() {
        return $this->hasMany(Item::class);
    }
}
