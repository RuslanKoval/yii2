<?php

namespace frontend\models\homeWork3;

use common\models\User;
use Yii;

/**
 * This is the model class for table "hw_user".
 *
 * @property integer $id
 * @property string $username
 * @property string $usermail
 * @property string $phone
 */
class HwUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hw_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'usermail', 'phone'], 'required'],
            [['username'], 'string', 'max' => 16],
            [['usermail'], 'string', 'max' => 30],
            [['phone'], 'string', 'max' => 13]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'usermail' => Yii::t('app', 'Usermail'),
            'phone' => Yii::t('app', 'Phone'),
        ];
    }
    public function getHwPosts()
    {
        return $this->hasMany(HwPosts::className(), ['post_id' => 'id']);
    }

}
