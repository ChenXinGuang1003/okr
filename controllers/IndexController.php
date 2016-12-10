<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/12/10
 * Time: 10:03
 */

namespace app\controllers;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}