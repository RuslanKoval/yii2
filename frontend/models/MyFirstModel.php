<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 11.11.15
 * Time: 20:29
 */

namespace frontend\models;

use Yii;
use yii\base\Model;

class MyFirstModel extends Model
{

    public function show()
    {

        return [
            'name' => 'Ruslan',
            'surname' => 'Koval'
        ];
    }

}
