<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class FormNotices extends Model
{

    public $tittle;
    public $date;
    public $description;

    public function rules()
    {
        return [
            ['tittle', 'required', 'message' => 'Campo requerido'],
            ['description', 'required', 'message' => 'Campo requerido'],
            ['date', 'required', 'message' => 'Campo requerido'],
            ['description', 'match', 'pattern' => '/^.{3,50}$/', 'message' => 'Mínimo 3 máximo 50 caracteres'],
            ['description', 'string'],
            ['date', 'safe'],
            ['tittle', 'string', 'max' => 50],
            ];
    }
/*
    public function contact($email)
    {
        $content = "<p>Email: " . $this->email . "</p>";
        $content .= "<p>Name: " . $this->name . "</p>";
        $content .= "<p>Subject: " . $this->subject . "</p>";
        $content .= "<p>Body: " . $this->body . "</p>";
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }

*/


}