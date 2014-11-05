<?php

class ReviewController extends Controller
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
				'actions'=>array('updatevote','index','view','list','create','update','admin','updatetype','remove','savefield','savefieldUnique','autocomplete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
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
	public function actionCreate($itemid,$userid)
	{
		$model=new review;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
               
		if(isset($_POST['review']))
		{
                       
                       
                        $model = new review;
			$model->attributes=$_POST['review'];
                        $model->item_id = $itemid;
                        $model->user_id = $userid;
                        
                        
                        $item = item::model()->findByPk($itemid);
                        if($item !=null){
// Add review number
                            if($item->reviewNum == null ) $item->reviewNum = 0; 
                            $item->reviewNum++;
// Plus vote score                            
                            if($item->resultVote == null ) $item->resultVote = 0; 
                            $item->resultVote = $item->resultVote + $model->vote;
                            
// Calculate average score for ITEM
// MUST NOT Divide by zero
                            if($item->reviewNum != 0){
                                $setNumber = number_format($item->resultVote/$item->reviewNum,2,'.', ',');
                                $item->avgVote = $setNumber;
                            }else
                                $item->avgVote = 0;
                            
                            $item->save();
                        }
                          
                            
                        $usern = user::model()->getusername($userid);
			if($model->save())
				$this->redirect(array('user/latestreview','membername'=>$usern));
		}

		$this->render('create',array('itemid'=>$itemid,'userid'=>$userid));
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

		if(isset($_POST['review']))
		{
			$model->attributes=$_POST['review'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
        
         public function actionUpdatevote($id,$fieldname,$fieldvalue){

// Check who voted 
                  //$whovote = whovotereview::model()->find("user_id=:user_id and review_id=:review_id",array(":user_id"=>Yii::app()->user->getId(),":review_id"=>$id));
// Load model by PK                   
                  $model = $this->loadModel($id);

//Put the newvalue and save                      
                    $score = $model->getAttribute($fieldname);
                    $score = $score + $fieldvalue;
                   
                    
                    
                    $model->setAttributes(array($fieldname=>$score));
                    if($model->save()){
                          $whovote = new whovotereview;
                          $whovote->user_id = Yii::app()->user->getId();                        
                          $user = user::model()->findByPk(Yii::app()->user->getId());
// *** if admin voted then give point                            
                          if($user->auth == "admin" && $model->status == 0){
// Change review status wait for approve (Voted by admin)                             
                              $model->status = 1;
                              $model->status = 1;
                              $model->save();
                              
                              $point = new pointmanagement;
                              $point->user_id = Yii::app()->user->getId();
                              $point->review_id = $id;
                              $point->point = 20;
                              $point->status = "pending";      // Status has 2 states 1) pending 2) approved 
                              $point->reason = "Voted by Admin";
                              $point->save();
                          }
                          $whovote->review_id = $id;
                          $whovote->save();
                    }

              //    echo CJSON::encode(array('updateon'=>$updateon,'updateby'=>$updateby));
                  Yii::app()->end();

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
		$dataProvider=new CActiveDataProvider('review');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new review('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['review']))
			$model->attributes=$_GET['review'];

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
		$model=review::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='review-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
