<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 26.11.15
 * Time: 21:49
 */

namespace frontend\controllers;

use frontend\models\homeWork3\HwPosts;
use frontend\models\homeWork3\HwUser;
use frontend\models\homeWork3\Form;
use yii\web\Controller;
use Yii;
use yii\base\UnknownPropertyException;




class BlogController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $data = HwUser::find()
            ->indexBy('id')
            ->all();


//        $data2 = $data ->hwPosts;

//        $hw_user = $data->hw_posts;

        return $this->render('index', [
            'blog' => $data
        ]);
    }

    public function actionCreate()
    {
        $model = new Form();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->add()) {
                return $this->redirect('/blog');

            }
        }
        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionPost($id)
    {
        $data = HwUser::find()
            ->where(['id' => $id])
            ->one();
        $data2 = $data ->hwPosts;

        return $this->render('post', [
            'post' => $data2
        ]);
    }

    public function actionDelete($id)
    {
        HwUser::deleteAll(['id' => $id]);
        HwPosts::deleteAll(['post_id' => $id]);
        $this->redirect('/blog',302);
    }


}