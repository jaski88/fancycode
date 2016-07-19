<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class MailController extends Controller {

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionContact() {
        Yii::$app->controller->enableCsrfValidation = false;
        echo "fdsafasf";
        return true;

        // Check for empty fields
        if (empty($_POST['name']) ||
                empty($_POST['email']) ||
                empty($_POST['message']) ||
                !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "No arguments Provided!";
            return false;
        }

        $name = $_POST['name'];
        $email_address = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

// Create the email and send the message
        $to = 'biuro@fancycode.pl'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        $email_subject = "Wiadomość z formularza kontaktowego:  $name";
        $email_body = "Imię i nazwisko: $name\n\nEmail: $email_address\n\nWiadomość:\n$message";
        $headers = "From: noreply@fancycode.pl\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        $headers .= "Content-Type:text/plain;charset=charset=ISO-8859-2\n";
        $headers .= "Cc: jaski88@gmail.com\n";
        $headers .= "Reply-To: $email_address";
        mail($to, $email_subject, $email_body, $headers);
        return true;
    }

    public function actionOrder() {
        return true;
    }

}
