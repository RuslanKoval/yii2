<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Create new post';
?>
<div class="site-add">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'new-post', 'options' => ['enctype' => 'multipart/form-data']]); ?>

            <?= $form->field($model, 'username') ?>
            <?= $form->field($model, 'usermail') ?>
            <?= $form->field($model, 'phone') ?>
            <?= $form->field($model, 'title') ?>
            <?= $form->field($model, 'disc')->textarea() ?>

            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>