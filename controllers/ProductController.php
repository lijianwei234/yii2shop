<?php
namespace app\controllers;

use yii\web\Controller;
class ProductController extends Controller 
{
	public function actionIndex()
	{
		$this->layout = false;
		// $class = new \ReflectionClass($this);
		// $methods = $class->getmethods();
		// var_dump($methods);
		// exit;
		//\yii2\base\View.php
		return $this->render('index');
	}

	public function actionDetail()
	{
		$this->layout = false;
		return $this->render('detail');
	}
}