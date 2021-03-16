<?php

namespace Tests\Unit;

use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\SurveyUserListObject;
use PHPUnit\Framework\TestCase;
class MyFakeCreateFindAllModel
{
    public static function create() {
        return true;
    }
};

class SurveyUserListTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSurveyUserListObjectCanCreateAFake()
    {
        $given = new SurveyUserListObject(1, 1, "01/01/2021");

        $injectedClass = new MyFakeCreateFindAllModel();

        $when = $given->create($injectedClass);
        $this->assertTrue($when);
    }
}