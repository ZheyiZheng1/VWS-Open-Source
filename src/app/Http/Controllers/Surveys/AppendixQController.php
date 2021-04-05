<?php

namespace App\Http\Controllers\Surveys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Surveys\SurveyClass\SurveyRetriever;

class AppendixQController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $questions = ['How confident do you feel that you can keep the fatigue caused by your disease from interfering with the things you want to do?',
                    'How confident do you feel that you can keep the physical discomfort or pain of your disease from interfering with the things you want to do?',
                    'How confident do you feel that you can keep the emotional distress caused by your disease from interfering with the things you want to do?',
                    'How confident do you feel that you can keep any other symptoms or health problems you have from interfering with the things you want to do?',
                    'How confident do you feel that you can the different tasks and activities needed to manage your health condition so as to reduce your need to see a doctor?',
                    'How confident do you feel that you can do things other than just taking medication to reduce how much your illness affects your everyday life?'
                    ];
        return view('dashboard/appendixQ', compact('questions'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'question1' => 'required|integer',
            'question2' => 'required|integer',
            'question3' => 'required|integer',
            'question4' => 'required|integer',
            'question5' => 'required|integer',
            'question6' => 'required|integer'
        ]);

        $name = Auth::user()->name;

        $request->user()->appendixQ()->create([ //chains the users post to a user
            'question1' => $request->question1,
            'question2' => $request->question2,
            'question3' => $request->question3,
            'question4' => $request->question4,
            'question5' => $request->question5,
            'question6' => $request->question6,
            'name'=> $name
            ]);

            return redirect()->route('dashboard');
    }
}
