<?php
namespace app\controllers;
use yii\web\Controller;
class OrderController extends Controller
{
	public function actionIndex()
	{
		$this->layout = false;
		return $this->render('index');
	}

	public function actionCheck()
	{
		$this->layout = 'layout1';
		return $this->render('check');
	}
}