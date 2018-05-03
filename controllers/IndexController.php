<?php
namespace app\controllers;

use yii\web\Controller;
class IndexController extends Controller 
{
	public function actionIndex (){
		$this->layout = 'layout1';
		return $this->render("index");
	}
}