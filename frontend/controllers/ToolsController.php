<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.05.2018
 * Time: 15:49
 */


namespace frontend\controllers;


use Yii;
use yii\base\Controller;

class ToolsController extends Controller
{
    public function actionMail()
    {
        $resultSend = Yii::$app->mailer->compose()
//            ->setFrom('dev2.sofona@gmail.com')
            ->setTo('asdasdasd@mailforspam.com')
            ->setSubject('ASdasd  sdsd')
            ->setTextBody('ZXzx zx zx')
            ->setHtmlBody('<b>Hello world!</b>')
            ->send();

        return $this->render('afterSend', ['resultSend' => $resultSend]);
    }
}