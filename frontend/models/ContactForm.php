<?php

namespace frontend\models;

use backend\models\Contacts;
use common\models\Telegram;
use himiklab\yii2\recaptcha\ReCaptchaValidator2;
use Yii;
use yii\base\Model;

class ContactForm extends Model
{
    public $name;
    public $phone;
    public $body;
    public $reCaptcha;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name','phone','body'], 'required'],
            // verifyCode needs to be entered correctly
            [['reCaptcha'], ReCaptchaValidator2::class, 'uncheckedMessage' => Yii::t('app', 'Пожалуйста, подтвердите, что вы не бот.')],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Номер телефона',
            'text' => 'Текст сообщения',
            'verifyCode' => 'Verification Code',
        ];
    }

    public function save()
    {
        $contact = new Contacts();
        $contact->username = $this->name;
        $contact->mobile = $this->phone;
        $contact->text = $this->body;
        $contact->save();

        $text = "<b>New messeng</b> \n" .
            "<b>Name</b>:" . $this->name. "\n" .
            "<b>Text</b>: " . $this->body . "\n" .
            "<b>Phone.number</b>: ".$this->phone. "\n";
        (new Telegram($text))->sendMessage();
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }

    public function sendTg()
    {

    }

}