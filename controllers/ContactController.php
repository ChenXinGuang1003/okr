<?php
namespace app\controllers;
use yii\web\Controller;

class ContactController extends Controller
{
    public function actionIndex()
    {
        return$this->render('index');
    }
}