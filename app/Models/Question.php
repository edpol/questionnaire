<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'heading_id', 'question', 'type'
    ];

    public function answersList($question_id)
    {
        return Answer::where('question_id',$question_id)->get();
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function headings() {
        return $this->belongsTo(Heading::class);
    }

}
