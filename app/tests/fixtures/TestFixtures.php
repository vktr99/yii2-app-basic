<?php

namespace app\tests\fixtures;

use yii\test\ActiveFixture;

class TestFixtures extends ActiveFixture
{
    public $modelClass = \app\models\Test::class;
    public $dataFile = __DIR__ . '/../_data/fakeTest.php';
}