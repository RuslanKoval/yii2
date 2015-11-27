<?php

namespace frontend\models\homeWork3;

use Yii;
use \yii\db\ActiveRecord;

/**
 * This is the model class for table "hw_posts".
 *
 * @property integer $id
 * @property string $title
 * @property string $disc
 * @property string $date
 * @property integer $post_id
 */
class HwPosts extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hw_posts}}';
    }

    /**
     * @inheritdoc
     */
//    public function rules()
//    {
//        return [
//            [['title', 'disc', 'date'], 'required'],
//            [['disc'], 'string'],
//            [['title'], 'string', 'max' => 255],
//            [['date'], 'string', 'max' => 50]
//        ];
//    }


    public function getHwUser()
    {
        return $this->hasOne(HwUser::className(), ['post_id' => 'id']);
    }

}
