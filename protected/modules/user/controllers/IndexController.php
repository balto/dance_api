<?php

class IndexController extends Controller
{
	public function actionIndex()
	{
		$result = User::model()->findAll();
		
		$users = array();
		
		foreach ($result as $value) {
			$users[] = array(
				'name' => $value->username,
				'id' => $value->id,
			);
		}
		
		$response = array('success' => true, 'data' => array('users' => $users));
		
		$this->renderText(json_encode($response));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}