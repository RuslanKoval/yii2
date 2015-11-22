<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 19.11.15
 * Time: 21:21
 */

namespace frontend\models\modelForm;
use yii\base\ErrorException;
use frontend\models\modelForm\AddUser;
use yii\base\Model;
use Yii;
use yii\web\UploadedFile;

class MyForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $photo;

    public $name;
    public $surname;
    public $email;
    public $phone;
    public $vk;
    public $role;
    public $date;
    public $lang;
    public $about;

    public function rules()
    {
        return [
            [['about'], 'required', 'message' => 'Вы ничего не ввели'],
            [['role'], 'integer'],
            [['name', 'surname', 'email', 'vk', 'lang'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 13],
            [['about'], 'string', 'max' => 255],
            [['lang'], 'required', 'message' => 'Пожайлуста виберете язык!'],
            [['name'], 'required', 'message' => 'Пожайлуста введите свое Имя!'],
            [['surname'], 'required', 'message' => 'Пожайлуста введите свою фамилию'],
            [['email'], 'email', 'message' => 'Пожайлуста введите свой E-mail'],
            [['email'], 'required', 'message' => 'Пожайлуста введите свой E-mail'],
            [['phone'], 'required', 'message' => 'Пожайлуста введите свой номер'],
            [['role'], 'required', 'message' => 'Пожайлуста виберете роль'],
            [['vk'], 'url', 'defaultScheme' => 'http', 'message' => 'Пожайлуста введите ссилку'],
            [['vk'], 'required', 'message' => 'Пожайлуста введите ссилку'],
            [['photo'], 'file', 'skipOnEmpty' => false, 'extensions' => ['png', 'jpg', 'gif'], 'maxSize' => 500*300],
        ];
    }

    public function addNewUser()
    {
        if ($this->validate()) {
            $uploadPath = Yii::getAlias('@frontend').'/web/img/';
            $fileName = 'photo-'.time(). '.' . $this->photo->extension;

            $this->photo->saveAs($uploadPath .$fileName );
            $user = new AddUser();
            $user->name = $this->name;
            $user->surname = $this->surname;
            $user->email = $this->email;
            $user->phone = $this->phone;
            $user->photo = $fileName;
            $user->vk = $this->vk;
            $user->role = $this->role;
            $user->date = time();
            $user->lang = $this->lang;
            $user->about = $this->about;
            if ($user->save()) {
                return true;
            }
        }


        return null;
    }
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Введите свое Имя'),
            'surname' => Yii::t('app', 'Введите свою фамилию'),
            'email' => Yii::t('app', 'Введите свой Email'),
            'phone' => Yii::t('app', 'Введите свой телефон'),
            'photo' => Yii::t('app', 'Ваше Фото'),
            'vk' => Yii::t('app', 'Ссилка на страничку Вконтакте'),
            'role' => Yii::t('app', 'Роль'),
            'lang' => Yii::t('app', 'Знание языков'),
            'about' => Yii::t('app', 'Коментарий'),
        ];
    }

}