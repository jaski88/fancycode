<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class OrderForm extends Model {

    public $name;
    public $email;
    public $body;
    public $template;
    public $www;
    public $cms;
    public $domain;
    public $hosting;
    public $stats;
    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules() {
        return [
            // name, email, subject and body are required
            [['name','cms','domain','hosting','stats' , 'email', 'body', 'template' ], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            ['www', 'safe'],
                // verifyCode needs to be entered correctly
//            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels() {
        return [
            'verifyCode' => 'Verification Code',
            'name' => 'Imię i nazwisko',
            'email' => 'Adres email',
            'body' => 'Treść wiadomości',
            'www' => 'Adres Twojej strony (jeżeli już istnieje)',
            'template' => 'Nazwa szablonu',
            'cms' => 'System zarządzania treścią strony (CMS)',
            'hosting' => 'Hosting (Do każdej strony przez pół roku gratis )',
            'domain' => 'Rejestracja domeny internetowej (Gratis przy zamówieniu strony z CMS)',
            'stats' => 'System statystyk odwiedzin strony',
        ];
    }
    
    private static function b2str( $bool )
    {
        return $bool ? "Tak" : "Nie";
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email) {
        if ($this->validate()) {

//            var_dump($this->cms);exit;
            $body = 'Imię i nazwisko: ' . $this->name . ' <br /> ';
            $body .= 'Szablon: ' . $this->template . ' <br /> ';
            $body .= 'Adres www: ' . $this->www . ' <br /> ';
            $body .= 'Domena: ' . self::b2str($this->domain) . ' <br /> ';
            $body .= 'Cms: ' . self::b2str($this->cms) . ' <br /> ';
            $body .= 'Hosting: ' . self::b2str($this->hosting) . ' <br /> ';
            $body .= 'Stats: ' . self::b2str($this->stats) . ' <br /> ';
            $body .= 'Treść: <br />' . $this->body . ' <br /> ';

            Yii::$app->mailer->compose()
                    ->setTo($email)
                    ->setFrom([$this->email => $this->name])
                    ->setSubject('Wiadomość od ' . $this->name)
                    ->setHtmlBody($body)
                    ->send();

            return true;
        }
        return false;
    }
    


}
