<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Request $request)
    {
        // dd($request);
        $survey = Survey::where('id', request()->surveyId)->first();

        return view('survey.question.create',compact('survey'));
    }
    public function store(Survey $survey, Request $request)
    {
        // dd($request->answers);
        $survey = Survey::where('id', request()->surveyId)->first();
        // $data = request()->validate([
        //     'question.question'=>'required',
        //     'question.type'=>'required',
        //     'answer.answerValue'=>'required',
        //     'answers.*.answerValue'=>'required'
        // ]);
        // dd($data);
        $type= $request->questionType;
        // dd($type)
        $singleAnswer= $request->likertScaleAnswer;
        // dd($survey->questions());
        $question = $survey->questions()->create([
            'question' => $request->question,
            'type' => $request->questionType
        ]); //question is created in db
        if($type === 'radio')
        {
            $question->answers()->createMany([['answerValue' => $request->choiceOne], ['answerValue' => $request->choiceTwo]]);
        }
        if($type === 'range')
        {
            $answerValue = $request->likertScaleAnswer;
            $question->answers()->create(['answerValue' => $answerValue]);
        }
        if($type === 'text')
        {
            $question->answers()->create(['answerValue' => $request->textChoice]);
        }


        return redirect('surveys/'.$request->surveyId); //redirect back to the survey
    }
}
