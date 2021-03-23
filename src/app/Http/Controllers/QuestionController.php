<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Survey $survey)
    {
        return view('survey.question.create',compact('survey'));
    }

    public function store(Survey $survey)
    {

        //dd(request());
        $data = request()->validate([
            'question.question'=>'required',
            'question.type'=>'required',
            'answer.answerValue'=>'required',
            'answers.*.answerValue'=>'required'
        ]);
        dd($data);
        $type= $data['question']['type'];
        $singleAnswer= $data['answer']['answerValue'];
        if($type === 'radio')
        {
            $question = $survey->questions()->create($data['question']); //question is created in db
            $question->answers()->createMany($data['answers']);
        }
        if($singleAnswer !== 'null')
        {
            $question = $survey->questions()->create($data['question']); //question is created in db
            $question->answers()->create($data['answer']);
        }


        return redirect('/surveys/'.$survey->id); //redirect back to the survey
    }
}
