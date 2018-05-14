<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.05.2018
 * Time: 14:18
 */

namespace console\controllers;


use yii\console\Controller;

class StatusController extends Controller
{
    public function actionTest()
    {
        echo "Test status";
        die;
    }
}