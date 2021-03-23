<?php

namespace App\Http\Controllers\Surveys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppendixRController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $questions = ['Went to see your family physician?',
                    'Went to see a specialist',
                    'Went to see another healthcare provider',
                    'Please list the other healthcare providers that you have seen：',
                    'Went to a walk in clinic?',
                    'If yes, how many times?',
                    'Went to the emergency room?',
                    'If yes, how many times?',
                    'Were admitted to the hospital?',
                    'If yes, how many times?',
                    'Spent the night in the hospital?',
                    'If yes, how many nights?'
                ];
        return view('dashboard/appendixR' compact('questions'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'inputPhysician' => 'required|max:255',
            'inputSpecialist' => 'required|max:255',
            'inputHealthcare' => 'required|max:255',
            'otherHealthcare' => 'required|max:255',
            'questionFive' => 'required|in:Yes,No',
            'walkInTimes'=>'required_if:questionFive,Yes|max:255',
            'questionSeven' => 'required|in:Yes,No',
            'emergencyRoomTimes'=>'required_if:questionSeven,Yes|max:255',
            'questionNine' => 'required|in:Yes,No',
            'hospitalTimes'=>'required_if:questionNine,Yes|max:255',
            'questionEleven' => 'required|in:Yes,No',
            'nightHospitalTimes'=>'required_if:questionEleven,Yes|max:255'
        ]);


        $name = Auth::user()->name;

        $request->user()->appendixR()->create([ //chains the users post to a user
            'question1' => $request->inputPhysician,
            'question2' => $request->inputSpecialist,
            'question3' => $request->inputHealthcare,
            'question4' => $request->otherHealthcare,
            'question5' => $request->questionFive,
            'question6' => $request->walkInTimes,
            'question7' => $request->questionSeven,
            'question8' => $request->emergencyRoomTimes,
            'question9' => $request->questionNine,
            'question10' => $request->hospitalTimes,
            'question11' => $request->questionEleven,
            'question12' => $request->nightHospitalTimes,
            'name'=> $name
            ]);

        return redirect()->route('dashboard');
    }
}
