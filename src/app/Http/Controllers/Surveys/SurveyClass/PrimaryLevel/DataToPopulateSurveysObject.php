<?php

namespace App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataToPopulateSurveysObject
{
    private $request = null;
    private $PopulateSurveysAggregate;
    private $QuestionDescription;
    private $QuestionNum;
    private $AnswerDescription;

    public function __construct() {}

    //Constructors
    public static function withQuestionAnswer(Int $QuestionNum, String $QuestionDescription, String $AnswerDescription)
    {
        $instance = new self();
        $instance->QuestionNum = $QuestionNum;
        $instance->QuestionDescription = $QuestionDescription;
        $instance->AnswerDescription = $AnswerDescription;
        return $instance;
    }

    public static function withSurveyId(Int $SurveyId) {
        $instance = new self();
        $instance->SurveyId = $SurveyId;
        return $instance;
    }

    public function display($DataToPopulateSurvey) {
        $this->DataToPopulateSurveysObject = $DataToPopulateSurvey::table('data_to_populate_surveys')->where([
                'survey_id' => $this->SurveyId
            ])->get();

        return $this->DataToPopulateSurveysObject;
    }

    public function create($AvailableSurveysDTO, $DataToPopulateSurvey) {

        $now = date('Y-m-d H:i:s') . '';
        $this->DataToPopulateSurveysObject = $DataToPopulateSurvey::create([
            'updated_at' => $now,
            'QuestionNum' => $this->QuestionNum,
            'QuestionDescription' => $this->QuestionDescription,
            'AnswerNum' => 1,
            'AnswerDescription' => 'Likert ' . $this->AnswerDescription,
            'survey_id' => $AvailableSurveysDTO->getId()
        ]);

        return $this;

    }
}
