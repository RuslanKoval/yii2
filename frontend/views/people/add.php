<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Добавление нового пользователя';
?>
<div class="site-add">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожайлуста введите свои данные</p>


    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-add', 'options' => ['enctype' => 'multipart/form-data']]); ?>

            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'surname') ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'phone') ?>
            <?= $form->field($model, 'vk') ?>
            <?= $form->field($model, 'role')->radioList(['1' => 'Адмиристратор', '2' => 'Модератор', '3' => 'Гость'])?>
            <?= $form->field($model, 'lang')->radioList(['English' => 'English', 'Українська' => 'Українська', 'Русский' => 'Русский'])?>
            <?= $form->field($model, 'photo')->fileInput()?>
            <?= $form->field($model, 'about')->textarea() ?>
            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>