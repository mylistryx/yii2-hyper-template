<?php

namespace app\controllers;

use app\components\controllers\WebController;
use Yii;
use yii\captcha\CaptchaAction;
use yii\web\ErrorAction;
use yii\web\Response;


class SiteController extends WebController
{

    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
            'captcha' => [
                'class' => CaptchaAction::class,
            ],
        ];
    }

    public function actionIndex(): Response
    {
        return $this->render('index');
    }
}
