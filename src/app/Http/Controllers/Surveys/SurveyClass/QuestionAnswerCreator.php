<?php

namespace App\Http\Controllers\Surveys\SurveyClass;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\SurveyListObject;
use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\QuestionsObject;
use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\AnswersObject;

use App\Models\Questions;
use App\Models\Answers;
use App\Models\SurveyList;

interface IDTO {
    public function create();
}

class QuestionAnswerCreator
{
    private $request = null;
    private $DataToPopulateSurveysDTO = null;
    private $SurveyListObject;
    private $QuestionsArray = Array();
    public $questionDescriptions;
    public $answerDescriptions;

    public function __construct($request)
    {
        $this->surveyName = $request->surveyName;
        $this->DeliveryFreq = $request->deliveryFrequency;
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
        Object $modelSurveyList = null,
        Object $modelSurveyUserList = null,
        Object $modelQuestions = null,
        Object $modelAnswers = null
        ) {

        if($modelSurveyList === null)
            $modelSurveyList = new SurveyList();
        if($modelQuestions === null)
            $modelQuestions = new Questions();
        if($modelAnswers === null)
            $modelAnswers = new Answers();

        $this->SurveyListObject = SurveyListObject::withSurveyNameProgramSD($this->surveyName, $this->programStartDate);
        $this->SurveyListObject->create($modelSurveyList);

        foreach ($this->participants as $participant) {
            $idx = 0;
            foreach ($this->questionDescriptions as $QuestionDescription) {
                $newQuestionDTO = new QuestionsObject($QuestionDescription, $this->SurveyListObject);
                $this->QuestionsArray[$idx] = $newQuestionDTO;

                $this->QuestionsArray[$idx]->create($modelQuestions);
                $newAnswerDTO = new AnswersObject($participant, $this->QuestionsArray[$idx]);
                $this->AnswersObject[$idx] = $newAnswerDTO;
                $this->AnswersObject[$idx] = $this->AnswersObject[$idx]->create($modelAnswers);
                $idx++;
            }
        }
        return $this->DataToPopulateSurveysDTO;
    }

}
