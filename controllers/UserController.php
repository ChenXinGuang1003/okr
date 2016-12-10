<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/12/10
 * Time: 11:53
 */

namespace app\controllers;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        $this->layout=false;
        return $this->renderPartial('index');
    }
}