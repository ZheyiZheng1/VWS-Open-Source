<?php

namespace App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Questions;

class QuestionsObject
{
    private $request = null;
    private $QuestionsObject = null;
    private $QuestionDescription;
    private $SurveyListDTO;

    public function __construct(String $QuestionDescription, $SurveyListDTO)
    {
        $this->QuestionDescription = $QuestionDescription;
        $this->SurveyListDTO = $SurveyListDTO;
    }
    public function create(Object $Questions) {

        $now = date('Y-m-d H:i:s') . '';

        $this->QuestionsObject = $Questions::create([
            'updated_at' => $now,
            'Description' => $this->QuestionDescription,
            'isAnsweredRepeatedly' => false,
            'survey_lists_id' => $this->SurveyListDTO->getId()
        ]);
        return $this->QuestionsObject;
    }

    public function getUpdatedAt() {
        return $this->QuestionsObject->updated_at;
    }

    public function getId() {
        return $this->QuestionsObject->id;
    }
}
