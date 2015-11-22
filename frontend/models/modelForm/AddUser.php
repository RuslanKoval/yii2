<?php

namespace frontend\models\modelForm;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "addUser".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $phone
 * @property string $photo
 * @property string $vk
 * @property integer $role
 * @property integer $date
 * @property string $lang
 * @property string $about
 */
class AddUser extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addUser';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'surname' => Yii::t('app', 'Surname'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'photo' => Yii::t('app', 'Photo'),
            'vk' => Yii::t('app', 'Vk'),
            'role' => Yii::t('app', 'Role'),
            'date' => Yii::t('app', 'Date'),
            'lang' => Yii::t('app', 'Lang'),
            'about' => Yii::t('app', 'About'),
        ];
    }

}
