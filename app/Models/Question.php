<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'heading_id', 'question', 'type'
    ];

    public function getAnswers($id)
    {
        return Answer::where('question_id',$id)->get();
    }

    public function getQuestion($order)
    {
        return Question::where("order",$order)->first();
    }

    public function getHeading($id)
    {
        return Heading::find($id);
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function heading() {
        return $this->belongsTo(Heading::class, 'heading_id');
    }

}
