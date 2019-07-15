<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'heading_id', 'question', 'type'
    ];

    public function getQuestion($order) {
        return Question::where("order",$order)->first();
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function heading() {
        return $this->belongsTo(Heading::class);
    }

}
