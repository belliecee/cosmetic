<?php

class PointmanagementController extends Controller
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
				'actions'=>array('approve','index','view','list','create','update','admin','updatetype','remove','savefield','savefieldUnique','autocomplete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
     
        
             public function actionApprove($id,$fieldname,$fieldvalue){
  

// Load up model by PK                 
                  $model=$this->loadModel($id);
                  $updateon = null;  $updateby = null;
// Change pointmanagement status                   
                  $model->status = "approved";
                  $model->save();
// Change review status to "approved"
                    $review = review::model()->findByPk($model->review_id);
                    $review->status = 3; 
                    $review->save();
// User obtain point after approving                     
                    $user = user::model()->findByPk($model->user_id);
                    $user->point = $user->point + $model->point;
                    $user->save();
                    
                  
              
 // Update who and when editing data                  
                  if($model->hasAttribute("update_on")){
                             $updateon = $model->getAttribute("update_on");
                  }
                  if($model->hasAttribute("update_by")){
                      if(user::model()->findByPk($model->getAttribute("update_by")) != null){
                          $updateby = user::model()->findByPk($model->getAttribute("update_by"))->username;
                      }else{
                          $updateby = null;
                      }
                          
                 }

                  echo CJSON::encode(array('updateon'=>$updateon,'updateby'=>$updateby));
                  Yii::app()->end();

         }
        
        public function actionUpdatetype() {
           
            $es = new EditableSaver('category');
            $es->onBeforeUpdate = function($event) {
                    $event->sender->setAttribute('update_on', date('Y-m-d H:i:s'));
                    $event->sender->setAttribute('update_by', Yii::app()->user->getId());
                    
            };
               
            $es->update();
       
            
              
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
	public function actionCreate($addnum)
	{
            
           
            $model = array(10);
            if($addnum>=1)    {$model[1]= new pointmanagement;  $model[1]->name = null;   $model[1]->save();}
            if($addnum>=2)    {$model[2]= new pointmanagement;  $model[2]->name = null;   $model[2]->save();}
            if($addnum>=3)    {$model[3]= new pointmanagement;  $model[3]->name = null;   $model[3]->save();}
            if($addnum>=4)    {$model[4]= new pointmanagement;  $model[4]->name = null;   $model[4]->save();}
            if($addnum>=5)    {$model[5]= new pointmanagement;  $model[5]->name = null;   $model[5]->save();}
            if($addnum>=6)    {$model[6]= new pointmanagement;  $model[6]->name = null;   $model[6]->save();}
            if($addnum>=7)    {$model[7]= new pointmanagement;  $model[7]->name = null;   $model[7]->save();}
            if($addnum>=8)    {$model[8]= new pointmanagement;  $model[8]->name = null;   $model[8]->save();}
            if($addnum>=9)    {$model[9]= new pointmanagement;  $model[9]->name = null;   $model[9]->save();}
            if($addnum>=10)   {$model[10]= new pointmanagement; $model[10]->name = null;  $model[10]->save();}
                
            
           
          
            
                $this->render('index',array('model'=>$model,));

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

		if(isset($_POST['pointmanagement']))
		{
			$model->attributes=$_POST['pointmanagement'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('pointmanagement');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new pointmanagement('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['pointmanagement']))
			$model->attributes=$_GET['pointmanagement'];

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
		$model=pointmanagement::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='pointmanagement-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
