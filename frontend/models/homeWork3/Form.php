<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 26.11.15
 * Time: 22:23
 */

namespace frontend\models\homeWork3;


use yii\base\Model;
use Yii;
use frontend\models\homeWork3\HwPosts;
use frontend\models\homeWork3\HwUser;

class Form extends Model
{
    private $phoneValidator  = '/^[0-9]{10}$/';

    public  $username;
    public  $usermail;
    public  $phone;
    public  $title;
    public  $disc;
    public  $date;
    public  $post_id;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'disc', 'date', 'username', 'usermail', 'phone'], 'required'],
            [['disc'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['date'], 'string', 'max' => 50],
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
            'username' => Yii::t('app', 'Username'),
            'usermail' => Yii::t('app', 'Usermail'),
            'phone' => Yii::t('app', 'Phone'),
            'title' => Yii::t('app', 'Title'),
            'disc' => Yii::t('app', 'Disctinct'),
        ];
    }

    public function add()
    {
        $user = new HwUser();
        $post =new HwPosts();

        $user->username = $this->username;
        $user->usermail = $this->usermail;
        $user->phone = $this->phone;
        $user->save();

        $post->post_id = $user->id;
        $post->title = $this->title;
        $post->disc = $this->disc;
        $post->date = time();

        if($post->save())
        {
            return true;
        }

    }
}