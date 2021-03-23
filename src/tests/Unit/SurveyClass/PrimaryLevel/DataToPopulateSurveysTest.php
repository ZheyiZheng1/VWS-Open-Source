<?php

namespace Tests\Unit\SurveyClass\PrimaryLevel\DataToPopulateSurveysTest;

use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\DataToPopulateSurveysObject;
use PHPUnit\Framework\TestCase;
class myFakeDataToPopulateSurveysModel
{
    public function __construct() {}
    public static function create() {
        $instance = new self();
        $instance->updated_at = "01/01/2021";
        $instance->id = 1;
        return $instance;
    }

    public static function find() {
        return true;
    }
    public static function all() {
        return true;
    }

    public static function table() {
        $instance = new self();
        return $instance;
    }

    public function where() {
        return $this;
    }

    public function get() {
        return true;
    }
};
class DataToPopulateSurveysTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAnswersObjectCanCreateAFake()
    {
        $given = DataToPopulateSurveysObject::withQuestionAnswer(1, "First Question Description", "First Answer Description");

        $injectedClass = new myFakeDataToPopulateSurveysModel();

        $AvailableSurveyStub = new class {
            public function getId() {return 1;}
        };

        $when = $given->create($AvailableSurveyStub, $injectedClass);
        $this->assertSame($when->DataToPopulateSurveysObject->updated_at, '01/01/2021');
        $this->assertSame($when->DataToPopulateSurveysObject->id, 1);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAnswersObjectCanDisplayAFake()
    {
        $given = DataToPopulateSurveysObject::withSurveyId(1);

        $injectedClass = new myFakeDataToPopulateSurveysModel();

        $AvailableSurveyStub = new class {
            public function getId() {return 1;}
        };

        $when = $given->display($injectedClass);
        $this->assertSame($when, true);
    }
}