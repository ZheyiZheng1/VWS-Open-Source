<?php

namespace App\Http\Controllers\Surveys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppendixTController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $questions = ['Feeling nervous, anxious, or on edge?',
                    'Not being able to stop or control worrying?',
                    'Worrying too much about different things?',
                    'Trouble relaxing?',
                    'Being so restless that it is hard to sit still?',
                    'Becoming easily annoyed or irritable?',
                    'Feeling afraid, as if something awful might happen?',
                    'If you checked any problems, how difficult have they made it for you to do your work, take care of things at home, or get along with other people?'
                ];
        return view('dashboard/appendixT', compact('questions'));
    }

    public function store(Request $req) {
        //take data that upload from user and update to database.
        $req->dd();
        
        //redirect need to rewrite after the list is done.
        return redirect('surveylistpage');
    }
}
