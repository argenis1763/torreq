<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller {

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

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionLogin() {
        if (!\Yii::$app->user->isGuest) {
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

    public function actionOffices() {
        $url = NULL;
        if (isset($_GET['floor'])) {
            $url = 'floor/_p' . $_GET['floor'];
        } else {
            $url = '_offices';
        }

        return $this->renderPartial($url);
    }

    public function actionEmail() {
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();
            $mail = Yii::$app->mailer->compose();
            $mail->setTo(Yii::$app->params['adminEmail']);
            $mail->setFrom($data['mail'], 'Torre Q');
            $mail->setSubject('Torre Q - Solicitud de Información');
            $mail->setHtmlBody($data['message']);
            return $mail->send();
        } else {
            return FALSE;
        }
    }

}
