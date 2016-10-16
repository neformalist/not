<?php

namespace common\fixtures;

use yii\test\ActiveFixture;

class MetaFixture extends ActiveFixture
{
    public $modelClass = 'common\models\Meta';
    public $dataFile = '@common/fixtures/data/meta.php';
}

