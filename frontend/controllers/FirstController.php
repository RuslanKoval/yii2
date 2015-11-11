<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 11.11.15
 * Time: 20:14
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\MyFirstModel;


class FirstController extends Controller
{

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    public function actionShow()
    {
        $test = new MyFirstModel();
        $testText = $test->show();
        return $this->render('first', [
            'testText' => $testText,
        ]);
    }

}