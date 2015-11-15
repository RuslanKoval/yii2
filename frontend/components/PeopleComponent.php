<?php

/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 15.11.15
 * Time: 16:52
 */

namespace app\components;

use frontend\models\People;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;


class PeopleComponent extends Component
{

    public function PeopleModel(People $model)
    {
        return 'ok';
    }
}