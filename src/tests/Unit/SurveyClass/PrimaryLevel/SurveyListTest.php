<?php

namespace Tests\Unit\SurveyClass\PrimaryLevel\SurveyListTest;

use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\SurveyListObject;
use PHPUnit\Framework\TestCase;
class MySurveyListFakeModel
{
    public static function create() {
        return true;
    }

    public static function find() {
        return true;
    }
    public static function all() {
        return true;
    }
};

class SurveyListTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSurveyListObjectCanCreateAFake()
    {
        $given = SurveyListObject::withSurveyNameProgramSD("Test Survey", "01/01/2021");

        $injectedClass = new MySurveyListFakeModel();

        $when = $given->create($injectedClass);
        $this->assertTrue($when);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSurveyListObjectCanDisplayFake()
    {
        $given = SurveyListObject::withSurveyListId(1);

        $injectedClass = new MySurveyListFakeModel();

        $when = $given->display($injectedClass);
        $this->assertTrue($when);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSurveyListObjectCanDisplayAllFake()
    {
        $given = SurveyListObject::withSurveyListId(1);

        $injectedClass = new MySurveyListFakeModel();

        $when = $given->displayAll($injectedClass);
        $this->assertTrue($when);
    }
}