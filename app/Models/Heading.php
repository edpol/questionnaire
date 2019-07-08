<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Heading extends Model
{
    protected $fillable = [
        'heading'
    ];

    public function question() {
        return $this->hasMany(Question::class);
    }

}
