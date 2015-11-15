<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 14.11.15
 * Time: 15:13
 */

namespace frontend\controllers;
use frontend\models\People;
use Yii;
use yii\web\Controller;

class PeopleController extends Controller
{

    /**
     * @return string
     */
    public function actionIndex()
    {
        $people = new People();

        return $this->render('people', [
            'people' => $people,
            'PeopleModel' => Yii::$app->peopleComponent->PeopleModel($people)
        ]);
    }

    public function actionAll()
    {
        $data = People::find()
            ->indexBy('id')
            ->all();
        return $this->render('all', [
            'data' => $data
        ]);
    }

    public function actionUser($id)
    {
        $data = People::find()
            ->where(['id' => $id])
            ->one();
        return $this->render('user', [
            'data' => $data
        ]);
    }

    public function actionDelete($id)
    {
        People::deleteAll(['id' => $id]);
        $this->redirect('/people/all',302);
    }


}