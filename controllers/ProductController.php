<?php
namespace app\controllers;

use yii\web\Controller;
class ProductController extends Controller 
{
	public function actionIndex()
	{
		$this->layout = 'layout2';
		// $class = new \ReflectionClass($this);
		// $methods = $class->getmethods();
		// var_dump($methods);
		// exit;
		//\yii2\base\View.php
		return $this->render('index');
	}

	public function actionDetail()
	{
		$this->layout = 'layout2';
		return $this->render('detail');
	}
}