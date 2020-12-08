<?php
namespace models;

use app\models\Test;
use app\tests\fixtures\TestFixtures;
use yii\base\Exception;


class SomeFeatureTest extends \Codeception\Test\Unit
{

    public function _fixtures()
    {
        return [
            'test' => [
                'class' => TestFixtures::class,
            ],
        ];
    }

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests

    public function testDbConnection()
    {
        /** @var Test $model */
        $model = $this->tester->grabFixture('test', 'first');
        self::assertEquals('first', $model->value);
    }

    /**
//     * @skip Test skip Exception test
     * @throws Exception
     */
    public function testSomeFeature()
    {
        throw new Exception('alala');
    }
}