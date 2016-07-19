<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\OrderForm;

class SiteController extends Controller {

    public function __init__() {
//        $this->title[] = Yii::$app->params['title']; //'Fancycode.pl';
    }

    public function beforeAction($action) {
//        $this->title[] = Yii::$app->params['title'];
        return parent::beforeAction($action);
    }

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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

    public function actionIndex() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh('#kontakt');
        }

        $modelOrder = new OrderForm();
        if ($modelOrder->load(Yii::$app->request->post()) && $modelOrder->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('orderFormSubmitted');

            return $this->refresh('#zamowienie');
        }

        return $this->render('index', [
                    'model' => $model,
                    'modelOrder' => $modelOrder,
        ]);
    }

    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
                    'model' => $model,
        ]);
    }

    public function actionAbout() {
        return $this->render('about');
    }

    public function actionOffer() {
        return $this->render('offer');
    }

    public function actionOrder() {
        return $this->render('order');
    }

    public function actionPrice() {
        return $this->render('price');
    }

    public function actionPage($view) {
        return $this->render($view);
    }

}
