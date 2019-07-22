<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'answer_id', 'stock_id', 'add'
    ];

    public function answer() {
        return $this->belongsTo(Answer::class);
    }

    public function stock() {
        return $this->belongsTo(Stock::class);
    }
}
