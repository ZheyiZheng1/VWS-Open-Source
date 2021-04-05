<?php

namespace App\Http\Controllers\Surveys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Not sure which database to use
use App\Models\AppendixS;

class AppendixSController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index($id)
    {
        $questions = ['Are you currently employed (working for pay)?',
                    'The next questions are about the past seven days, not including today.  During the past seven days, how many hours did you miss from work because of health problems?  Include hours you missed on sick days, times you went in late, left early, etc.  Do not include time you missed to participate in this study.',
                    'During the past seven days, how many hours did you miss from work because of any other reason, such as vacation, holidays, time off to participate in this study?',
                    'During the past seven days, how many hours did you actually work?',
                    'During the past seven days, how much did health problems affect your productivity while you were working?  Think about days you were limited in the amount or kind of work you could do, days you accomplished less than you would like, or days you could not do your work as carefully as usual.  On a scale from 0 to 10, with 0 meaning health problems had no effect on work, and 10 meaning health problems completely prevented you from working, how much did health problems affect your productivity while you were working? If health problems affected your work only a little, choose a low number.  Choose a high number if health problems affected your work a great deal.  What number do you choose?',
                    '<p>Now I’d like to ask you about your regular daily activities, (other than your job). By this I mean the usual activities that you do every day, such as work around the house, shopping, child care, exercising, etc.</p>
                    <p>During the past seven days, not including today, how much did health problems affect your ability to do your regular daily activities?  Think about times you were limited in the amount or kind of activities you could do, times you accomplished less than you would like or times you could not do your regular activities as carefully as usual. On a scale from 0 to 10, with 0 meaning health problems had no effect on your regular activities, and 10 meaning health problems completely prevented you from doing your regular activities, how much did health problems affect your regular activities?</p>
                    <p>If health problems affected your activities only a little, choose a low number.  Choose a high number if health problems affected your activities a great deal. What number do you choose?</p>'
                ];
        return view('dashboard/appendixS', compact('questions'));
    }

    public function store(Request $req) {
        //take data that upload from user and update to database.
        $req->dd();
        $data = User::find($req->id);
        $data->questionOne=$req->questionOne;
        $data->questionTwo=$req->questionTwo;
        $data->questionThree=$req->questionThree;
        $data->questionFour=$req->questionFour;
        $data->questionFive=$req->questionFive;
        $data->questionSix=$req->questionSix;
        $data->save();
        //redirect need to rewrite after the list is done.
        return redirect('surveylistpage');
    }
}
