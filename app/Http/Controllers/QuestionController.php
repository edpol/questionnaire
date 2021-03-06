<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
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
     * @return JsonResponse $results
     */
    public function show($order)
    {
        $questions = new Question();
        $question = $questions->getQuestion($order);
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
        $row['heading'] = $question->heading;
        $row['answers'] = $question->answers;
        $results[] = $row;

        $answers = [];
        foreach($question->answers as $a) {
            $items = $a->item;
            $items_for_answer = [];
            foreach($items as $i ){
                $s = $i->stock;
                $items_for_answer[] = ['name' => $s->name, 'sku' => $i->sku, 'price' => $i->price, 'add' => $i->add, 'link' => $s->link, 'description' => $s->description];
            }
            $answers[] = [
                "answer" => $a->answer,
                "items"  => $items_for_answer
            ];
        }

        return response()->json([
            'id' => $question->id,
            'order' => $question->order,
            'heading_id' => $question->heading_id,
            'heading' => $question->heading->heading,
            'question' => $question->question,
            'type' => $question->type,
            'answers' => $answers,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Question $question
     * @return void
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Question $question
     * @return void
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Question $question
     * @return void
     */
    public function destroy(Question $question)
    {
        //
    }
}
