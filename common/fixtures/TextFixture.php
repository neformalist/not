<?php

namespace common\fixtures;

use yii\test\ActiveFixture;

class TextFixture extends ActiveFixture
{
    public $modelClass = 'common\models\Text';
    public $dataFile = '@common/fixtures/data/text.php';
}
