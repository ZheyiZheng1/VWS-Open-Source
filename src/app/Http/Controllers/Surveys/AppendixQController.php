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
