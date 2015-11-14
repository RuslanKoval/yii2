<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "people".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property integer $age
 * @property string $comments
 * @property integer $date
 */
class People extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'age', 'date'], 'required'],
            [['age', 'date'], 'integer'],
            [['comments'], 'string'],
            [['name', 'surname'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'age' => 'Age',
            'comments' => 'Comments',
            'date' => 'Date',
        ];
    }

    public function add(){
        $this->name = 'Ryslan';
        $this->surname = 'Koval';
        $this->age = 12;
        $this->date = time();
        $this->comments = 'Ryslan Koval';
        $this->save();
        if ($this->save())
        {
            echo 'ID of new people'.$this->id;
        } else
        {
            echo 'Create new people failed';
        }
    }


}
