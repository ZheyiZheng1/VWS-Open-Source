<?php

namespace App\Http\Controllers\Surveys\SurveyClass;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\AvailableSurveysObject;
use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\DataToPopulateSurveysObject;
use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\SurveyUserListObject;

use App\Models\AvailableSurveys;
use App\Models\Answers;
use App\Models\DataToPopulateSurvey;
use App\Models\SurveyUserList;

class SurveyCreator
{
    private $request = null;
    private $PopulateSurveysAggregate;
    private $SurveyUserListObject;
    private $AvailableSurveysObject;

    public function __construct(Request $request)
    {

        $this->SurveyName = $request->surveyName;
        $this->DeliveryFreq = $request->deliveryfrequency;
        $this->programStartDate = $request->programstartdate;
        $this->chooseSurvey = $request->chooseSurvey;

        $this->questionDescriptions = [$request->questionOne, $request->questionTwo, $request->questionThree,
            $request->questionFour, $request->questionFive, $request->questionSix, $request->questionSeven,
            $request->questionEight, $request->questionNine];

        $this->answerDescriptions = [$request->questionOneLikert, $request->questionTwoLikert, $request->questionThreeLikert,
            $request->questionFourLikert, $request->questionFiveLikert, $request->questionSixLikert, $request->questionSevenLikert,
            $request->questionEightLikert, $request->questionNineLikert];

        $this->participants = [$request->participantOne,
            $request->participantTwo,
            $request->participantThree,
            $request->participantFour,
            $request->participantFive
        ];
    }

    public function createSurvey(
        Object $modelAvailableSurveys = null,
        Object $modelDataToPopulateSurvey = null,
        Object $modelSurveyUserList = null
        ) {
        [$modelAvailableSurveys, $modelDataToPopulateSurvey, $modelSurveyUserList] = $this->validateCreateAggregate($modelAvailableSurveys,
            $modelDataToPopulateSurvey, $modelSurveyUserList);

        $this->AvailableSurveysObject = new AvailableSurveysObject($this->SurveyName, $this->DeliveryFreq, $this->programStartDate);
        $this->AvailableSurveysObject->create($modelAvailableSurveys);

        $authId = Auth::id();
        $this->SurveyUserListObject = new SurveyUserListObject($authId, $this->AvailableSurveysObject->getId(), $this->programStartDate);
        $modelSurveyUserList = new SurveyUserList();
        $this->SurveyUserListObject->create($modelSurveyUserList);

        for ($i = 0; $i < 9; $i++) {
            $this->DataToPopulateSurveyDTO[$i] = DataToPopulateSurveysObject::withQuestionAnswer($i, $this->questionDescriptions[$i], $this->answerDescriptions[$i]);
            $this->DataToPopulateSurveyDTO[$i]->create($this->AvailableSurveysObject, $modelDataToPopulateSurvey);
        }

        return $this;

    }

    public function validateCreateAggregate(
        Object $modelAvailableSurveys = null,
        Object $modelDataToPopulateSurvey = null,
        Object $modelSurveyUserList = null
        ) {

        if($modelAvailableSurveys === null)
            $modelAvailableSurveys = new AvailableSurveys();

        if($modelDataToPopulateSurvey === null)
            $modelDataToPopulateSurvey = new DataToPopulateSurvey();

        if($modelSurveyUserList === null)
            $modelSurveyUserList = new SurveyUserList();
        return [$modelAvailableSurveys, $modelDataToPopulateSurvey, $modelSurveyUserList];
    }

}
