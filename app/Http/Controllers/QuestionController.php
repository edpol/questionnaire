<?php

namespace App\Http\Controllers;

use App\Models\Heading;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_questions = Question::all();
        $results = [];
        foreach($all_questions as $questions){
            $row["id"] = $questions->id;
            $row["order"] = $questions->order;
            $row["heading_id"] = $questions->heading_id;
            $row["question"] = $questions->question;
            $row["type"] = $questions->type;
            $results[] = $row;
        }
        return response()->json([
            'results' => $results
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  $order
     * @return \Illuminate\Http\JsonResponse $results
     */
    public function show($order)
    {
        $questions = new Question();
        $question = $questions->getQuestion($order);
//        $question = Question::where("order",$order)->first();
        if(is_null($question)){
            return response()->json([
                'error' => ["Question {$order} does not exist."]
            ]);
        }
        $results = [];
        $row["id"] = $question->id;
        $row["order"] = $question->order;
        $row["heading_id"] = $question->heading_id;
        $row["question"] = $question->question;
        $row["type"] = $question->type;
//        $row["heading"] = $question->getHeading($question->id);
        $temp = $row['heading'] = $question->heading();
        $row["answers"] = $question->getAnswers($question->id);
var_dump($temp);
dd();
//$headings = Heading::find($question->heading_id);
//var_dump($headings->heading);
//dd();
//      $row['answers'] = $question->answers();
        $results[] = $row;

        return response()->json([
            'results' => $results
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
