<?php

namespace Tests\Unit\SurveyClass\PrimaryLevel\QuestionsObjectModelTest;

use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\QuestionsObject;
use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\SurveyListObject;
use PHPUnit\Framework\TestCase;
class myFakeQuestionsObjectModel
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
class QuestionsObjectTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testQuestionsObjectCanCreateAFake()
    {
        $givenSurveyListObject = SurveyListObject::withSurveyNameProgramSD('Survey Name', '01/01/2021');
        $given = new QuestionsObject("First Question Description", $givenSurveyListObject);

        $injectedClass = new myFakeQuestionsObjectModel();

        $whenSurveyListObject = $givenSurveyListObject->create($injectedClass);
        $when = $given->create($injectedClass);
        $this->assertSame($when->updated_at, '01/01/2021');
        $this->assertSame($when->id, 1);
    }
}