<?php

namespace App\Http\Controllers\Surveys;

use App\Models\Survey;

use App\Models\AppendixO;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Surveys\SurveyClass\SurveyRetriever;
use App\Models\SurveyList;

class SurveyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(Request $request)
    {

        $SurveyRetriever = new SurveyRetriever($request['SurveyList']);
        $retrievedSurveyInfo = $SurveyRetriever->displaySurvey();

        for ($idx = 0; $idx < count($retrievedSurveyInfo); $idx++) {
            // dd($retrievedSurveyInfo[$idx]);
            $questions[$idx] = $retrievedSurveyInfo[$idx]->QuestionDescription;
        }


        return view('participantPortal/appendixS', ['questions' => $questions]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'inputAge' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'inputHeight' => 'required|max:255',
            'inputWeight' => 'required|max:255',
            'inputOccupation' => 'required|max:255',
            'inputEmployment' => 'required|max:255',
            'chronic' => 'required|max:255'
        ]);

        AppendixO::create([
            'age' => $request->inputAge,
            'gender' => $request->gender,
            'height' => $request->inputHeight,
            'weight' => $request->inputWeight,
            'occupation' => $request->inputOccupation,
            'employment' => $request->inputEmployment,
            'chronic_conditions' => $request->chronic,
        ]);

        return redirect()->route('dashboard');
    }
    public function researchSurvey(Request $request)
    {
        $SurveyRetriever = new SurveyRetriever(1);
        $retrievedSurveyInfo = $SurveyRetriever->displaySurveyList();
        return view("dashboard.researchSurvey", ['SurveysAvailable' => $retrievedSurveyInfo]);
    }

    public function availableSurveys(Request $request)
    {

        //List of all possible surveys
        $SurveyRetriever = new SurveyRetriever($request['SurveyList']);
        $retrievedSurveyInfo = $SurveyRetriever->displaySurveyList();

        //TODO: Get the list of surveys completed for this user, something like:
        // $SurveyRetriever = new SurveyRetriever::withUser(auth::user()->id);
        // $completedSurveys = $SurveyRetriever->displaySurveyComplete();
        // Loop through to determine the surveys they haven't done, and save that in $incompleteSurveys
        // and produce both on the page.

        return view('participantPortal/availableSurveys', ['SurveysAvailable' => $retrievedSurveyInfo]);
    }

    public function showDistributeSurvey() {
        return view('dashboard.distributeSurvey');
    }

    public function DistributeSurveyStore(Request $request) {

        //Validate the data
        $this->validateSurveyStore($request);

        $DistributionSurvey = new DistributeSurvey($request);

        //Create the DistributionList for the survey
        $DistributionSurvey->create();

        return redirect()->route('dashboard');
    }

    private function validateSurveyStore($request) {
        //TODO: add more questions (they should go up to 9 for current default values)
        $this->validate($request, [
            'surveyName' => 'required|max:255',
            'deliveryfrequency' => 'required|max:255',
            'programstartdate' => 'required|date',
            'chooseSurvey' => 'required|max:255',
            'participantOne' => 'required|max:255',
            'participantTwo' => 'required|max:255',
            'participantThree' => 'required|max:255',
            'participantFour' => 'required|max:255',
            'participantFive' => 'required|max:255',
            'questionOne' => 'required|max:255',
            'questionTwo' => 'required|max:255',
            'questionThree' => 'required|max:255',
            'questionFour' => 'required|max:255',
            'questionFive' => 'required|max:255',
            'questionOneLikert' => 'required|max:255',
            'questionTwoLikert' => 'required|max:255',
            'questionThreeLikert' => 'required|max:255',
            'questionFourLikert' => 'required|max:255',
            'questionFiveLikert' => 'required|max:255'
        ]);

        return true;
    }

    public function createSurvey()
    {
        return view('survey.createSurvey');
    }

    public function surveyStore(Request $request)
    {
        $data= request()->validate([
            'surveyName'=> 'required',
            'programdate'=> 'required|date'
        ]);
            //dd($data);

        $survey= SurveyList::create([
            'SurveyName' => $data['surveyName'],
            'DeliveryDate' => $data['programdate'],
        ]);

        return redirect('/surveys/'.$survey->id);
    }

    public function show(Survey $survey)
    {
        return view('survey.show',compact('survey'));
    }

}
