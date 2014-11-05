<?php

class UsergroupController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','remove'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
         public function actionRemove($id)
	{
               if($id!=1 && $id!=2){
                    $model = $this->loadModel($id);
                    $model->delete();
               }
                    $this->redirect($this->createUrl('usergroup/index'));

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		//if(!isset($_GET['ajax']))
			//$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new usergroup;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['usergroup']))
		{
			$model->attributes=$_POST['usergroup'];
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['usergroup']))
		{
                     if($id == 1 or $id == 2)$this->redirect(array('index'));
			$model->attributes=$_POST['usergroup'];
                         if(isset($_POST['check1'])){if($_POST['check1'] == '1') $model->enquiry_read = 1;}  else $model->enquiry_read = 0;
                        if(isset($_POST['check2'])){if($_POST['check2'] == '1') $model->enquiry_update = 1;} else $model->enquiry_update = 0; 
                        if(isset($_POST['check3'])){if($_POST['check3'] == '1') $model->enquiry_delete = 1;}else $model->enquiry_delete = 0;
                        
                        
                        if(isset($_POST['check5'])){if($_POST['check5'] == '1') $model->vendorprocess_read = 1;} else $model->vendorprocess_read = 0; 
                        if(isset($_POST['check6'])){if($_POST['check6'] == '1') $model->vendorprocess_update = 1;} else $model->vendorprocess_update = 0; 
                        if(isset($_POST['check7'])){if($_POST['check7'] == '1') $model->vendorprocess_delete = 1;}else $model->vendorprocess_delete = 0;
                        
                        if(isset($_POST['check9'])){if($_POST['check9'] == '1') $model->quoh_read = 1;}  else $model->quoh_read = 0;
                        if(isset($_POST['check10'])){if($_POST['check10'] == '1') $model->quoh_update = 1;} else $model->quoh_update = 0; 
                        if(isset($_POST['check11'])){if($_POST['check11'] == '1') $model->quoh_delete = 1;}else $model->quoh_delete = 0;
                        
  
                        if(isset($_POST['check13'])){if($_POST['check13'] == '1') $model->poh_read = 1; }else $model->poh_read = 0;
                        if(isset($_POST['check14'])){if($_POST['check14'] == '1') $model->poh_update = 1;} else $model->poh_update = 0;
                        if(isset($_POST['check15'])){if($_POST['check15'] == '1') $model->poh_delete = 1;}else $model->poh_delete = 0;
                        
                        if(isset($_POST['check17'])){if($_POST['check17'] == '1') $model->deposit_read = 1;  }else $model->deposit_read = 0;
                        if(isset($_POST['check18'])){if($_POST['check18'] == '1') $model->deposit_update = 1; } else $model->deposit_update = 0;
                        if(isset($_POST['check19'])){if($_POST['check19'] == '1') $model->deposit_delete = 1;}else $model->deposit_delete = 0;
                        
                        if(isset($_POST['check21'])){if($_POST['check21'] == '1') $model->potovendor_read = 1;  }else $model->potovendor_read = 0;
                        if(isset($_POST['check22'])){if($_POST['check22'] == '1') $model->potovendor_update = 1; } else $model->potovendor_update = 0;
                        if(isset($_POST['check23'])){if($_POST['check23'] == '1') $model->potovendor_delete = 1;}else $model->potovendor_delete = 0;
                       
                        
                        if(isset($_POST['check25'])){if($_POST['check25'] == '1') $model->delivery_read = 1; } else $model->delivery_read = 0;
                        if(isset($_POST['check26'])){if($_POST['check26'] == '1') $model->delivery_update = 1;} else $model->delivery_update = 0;
                        if(isset($_POST['check27'])){if($_POST['check27'] == '1') $model->delivery_delete = 1;}else $model->delivery_delete = 0;
                        
                        if(isset($_POST['check29'])){if($_POST['check29'] == '1') $model->payment_read = 1; }else $model->payment_read = 0;
                        if(isset($_POST['check30'])){if($_POST['check30'] == '1') $model->payment_update = 1; } else $model->payment_update = 0;
                        if(isset($_POST['check31'])){if($_POST['check31'] == '1') $model->payment_delete = 1; }else $model->payment_delete = 0;
                         
                      
                         
                        
                        
			if($model->save())
				$this->redirect(array('index'));
		}
               

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('usergroup');
                $model = new usergroup();
                
                if(isset($_POST['usergroup']))
		{
			$model->attributes=$_POST['usergroup'];
                        if(isset($_POST['check1'])){if($_POST['check1'] == '1') $model->enquiry_read = 1;}  else $model->enquiry_read = 0;
                        if(isset($_POST['check2'])){if($_POST['check2'] == '1') $model->enquiry_update = 1;}   else $model->enquiry_update = 0;
                        if(isset($_POST['check3'])){if($_POST['check3'] == '1') $model->enquiry_delete = 1;} else $model->enquiry_delete = 0;
                        
                        
                        if(isset($_POST['check5'])){if($_POST['check5'] == '1') $model->vendorprocess_read = 1;} else $model->vendorprocess_read = 0; 
                        if(isset($_POST['check6'])){if($_POST['check6'] == '1') $model->vendorprocess_update = 1;}  else $model->vendorprocess_update = 0; 
                        if(isset($_POST['check7'])){if($_POST['check7'] == '1') $model->vendorprocess_delete = 1;}else $model->vendorprocess_delete = 0; 
                        
                        if(isset($_POST['check9'])){if($_POST['check9'] == '1') $model->quoh_read = 1;}  else $model->quoh_read = 0; 
                        if(isset($_POST['check10'])){if($_POST['check10'] == '1') $model->quoh_update = 1;}  else $model->quoh_update = 0; 
                        if(isset($_POST['check11'])){if($_POST['check11'] == '1') $model->quoh_delete = 1;}else $model->quoh_delete = 0; 
                        
  
                        if(isset($_POST['check13'])){if($_POST['check13'] == '1') $model->poh_read = 1; } else $model->poh_read = 0; 
                        if(isset($_POST['check14'])){if($_POST['check14'] == '1') $model->poh_update = 1;}  else $model->poh_update = 0; 
                        if(isset($_POST['check15'])){if($_POST['check15'] == '1') $model->poh_delete = 1;} else $model->poh_delete = 0; 
                        
                        if(isset($_POST['check17'])){if($_POST['check17'] == '1') $model->deposit_read = 1;  }  else $model->deposit_read = 0; 
                        if(isset($_POST['check18'])){if($_POST['check18'] == '1') $model->deposit_update = 1; }  else $model->deposit_update = 0; 
                        if(isset($_POST['check19'])){if($_POST['check19'] == '1') $model->deposit_delete = 1;}    else $model->deposit_delete = 0; 
                        
                        if(isset($_POST['check21'])){if($_POST['check21'] == '1') $model->potovendor_read = 1;  } else $model->potovendor_read = 0; 
                        if(isset($_POST['check22'])){if($_POST['check22'] == '1') $model->potovendor_update = 1; }  else $model->potovendor_update = 0; 
                        if(isset($_POST['check23'])){if($_POST['check23'] == '1') $model->potovendor_delete = 1;}   else $model->potovendor_delete = 0; 
                       
                        
                        if(isset($_POST['check25'])){if($_POST['check25'] == '1') $model->delivery_read = 1; }  else $model->delivery_read = 0; 
                        if(isset($_POST['check26'])){if($_POST['check26'] == '1') $model->delivery_update = 1;}  else $model->delivery_update = 0;  
                        if(isset($_POST['check27'])){if($_POST['check27'] == '1') $model->delivery_delete = 1;}   else $model->delivery_delete = 0; 
                        
                        if(isset($_POST['check29'])){if($_POST['check29'] == '1') $model->payment_read = 1; } else $model->payment_read = 0; 
                        if(isset($_POST['check30'])){if($_POST['check30'] == '1') $model->payment_update = 1; } else $model->payment_update = 0; 
                        if(isset($_POST['check31'])){if($_POST['check31'] == '1') $model->payment_delete = 1; }else $model->payment_delete = 0; 
                         
                      
                         
                         
			if($model->save()){
                            $this->redirect(array('index'));
                        };
				
		}
		$this->render('index',array('model'=>$model,
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new usergroup('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['usergroup']))
			$model->attributes=$_GET['usergroup'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=usergroup::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usergroup-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
