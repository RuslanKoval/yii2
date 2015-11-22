<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 14.11.15
 * Time: 15:13
 */

namespace frontend\controllers;
use frontend\models\modelForm\AddUser;
use frontend\models\People;
use Yii;
use yii\web\Controller;
use frontend\models\modelForm\MyForm;
use yii\base\UnknownPropertyException;
use yii\web\UploadedFile;

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
        $data = AddUser::find()
            ->indexBy('id')
            ->all();
        return $this->render('all', [
            'data' => $data
        ]);
    }

    public function actionUser($id)
    {
        $data = AddUser::find()
            ->where(['id' => $id])
            ->one();
        return $this->render('user', [
            'data' => $data
        ]);
    }

    public function actionDelete($id)
    {
        AddUser::deleteAll(['id' => $id]);
        $this->redirect('/people/all',302);
    }

    public function actionAdd()
    {
        $model = new MyForm();

        if ($model->load(Yii::$app->request->post())) {
            $model->photo = UploadedFile::getInstance($model, 'photo');
            if ($model->addNewUser()) {
                    return $this->redirect('/people/all');

            }
        }
        return $this->render('add', [
            'model' => $model,
        ]);
    }

}