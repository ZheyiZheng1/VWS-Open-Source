<?php

namespace App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AvailableSurveys;

use App\Http\Controllers\Surveys\SurveyClass\IDTO;
class AvailableSurveysObject //implements IDTO
{
    private $AvailableSurveysObject = null;

    public function __construct(String $SurveyName, String $DeliveryFreq, String $programStartDate)
    {
        $now = date('Y-m-d H:i:s') . '';
        $this->updated_at = $now;
        $this->SurveyName = $SurveyName;
        $this->DeliveryFreq = $DeliveryFreq;
        $this->programStartDate = $programStartDate;
    }

    public function create($AvailableSurveys) {

        $this->AvailableSurveysObject = $AvailableSurveys::create([
            'updated_at' => $this->updated_at,
            'SurveyName' => $this->SurveyName,
            'DeliveryFreq' => $this->DeliveryFreq,
            'ProgramStartDate' => $this->programStartDate
        ]);

        return $this->AvailableSurveysObject;
    }

    public function getId() {
        return $this->AvailableSurveysObject->id;
    }

}
