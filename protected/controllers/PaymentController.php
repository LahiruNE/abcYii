<?php

class PaymentController extends Controller
{
	public $resultsArray;
	public $empty;
	public $wrong;


	public $layout='//layouts/column2';

		/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', 
				'actions'=>array('arrears'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('arrears','index'),
				'users'=>array('@'),
			),
			array('deny',  
				'actions'=>array('arrears'),
				'users'=>array('*'),
			),
		);
	}

	public function actionIndex()
	{
		if(Yii::app()->user->isGuest) {
        	$this->redirect('index?site/login');
    	} else {            
			$model=new Student();

			if(isset($_POST['Student']))
			{
				$result=$model->findByAttributes(array('stuId'=>$_POST['Student']['stuId']));			
				
				
				if($_POST['Student']['stuId'] != ''){
					if($result){				
						if((int)$result['grade']<=5){
							$termFee = 3000;
						}else{
							$termFee = 4000;
						}

						$this->resultsArray=array(
							'grade' => $result['grade'], 
							'firstName' => $result['firstName'], 
							'lastName' => $result['lastName'], 
							'stuId' => $result['stuId'], 
							'paidStatus' => $result['paidStatus'],
							'termFee' => $termFee );					
					}else{
						$this->wrong = "No matching ID!";
					}
				}else{
					$this->empty = "Enter relevant student ID before proceed!";
				}
			}


			$this->render('index',array(
				'model'=>$model,
			));
        }
		
	}

	public function actionArrears()
	{
		$model=new Student('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Student']))
			$model->attributes=$_GET['Student'];

		$this->render('arrears',array(
			'model'=>$model,
		));
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
*/
	public function actions()
	{
		// return external action classes
		return array(
			'aclist'=>array(
			'class'=>'application.extensions.EAutoCompleteAction',
			'model'=>'Student', 
			'attribute'=>'stuId',
			),
		);	
	}
	
}