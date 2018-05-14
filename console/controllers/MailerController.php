<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.05.2018
 * Time: 13:38
 */

namespace console\controllers;

use Yii;
use yii\console\Controller;

class MailerController extends Controller
{
    public function actionSend()
    {
        $result = Yii::$app->mail->compose()
            ->setTo(['sblazze@gmail.com'])
            ->setSubject('Asd asdasd')
            ->setTextBody('DSa adasdasd')
            ->send();

        var_dump($result);
        die;
    }

    public function actionTest()
    {
        echo "Test";
        die;
    }
}