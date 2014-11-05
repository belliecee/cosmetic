<?php

class CategoryController extends Controller
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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','list'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('savewish','update','admin','updatetype','remove','savefield','savefieldUnique','autocomplete'),
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
        public function actionSavewish($id){
               
               $wishlist = new wishlist;
               $wishlist->item_id = $id;
               $wishlist->user_id = Yii::app()->user->getId();
               $wishlist->id = null;
               $wishlist->save();
               
               Yii::app()->end();
        }
	public function actionView($id)
	{
                $this->removePagination();
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
        public function actionIndex()
	{
                $this->removePagination();
		$this->render('index');
	}
        public function actionList($id)
	{
               
                
                $searchbybrand = ""; 
                $searchbyname = "";
                
// Ranking Product Items      
                item::model()->rankingByCategory($id);        
// End of Ranking Product Items                
                if(isset($_POST['searchbybrand'])){ $searchbybrand = $_POST['searchbybrand'];Yii::app()->session['searchbybrand'] = $searchbybrand;  }
                if(isset($_POST['searchbyname'])){ $searchbyname = $_POST['searchbyname']; Yii::app()->session['searchbyname'] = $searchbyname; }
                
                if(Yii::app()->session['searchbybrand'] != ""){
                      $searchbybrand  = Yii::app()->session['searchbybrand'];
                 }
                 if(Yii::app()->session['searchbyname'] != ""){
                      $searchbyname  = Yii::app()->session['searchbyname'];
                 }
                $searchbyname_low = strtolower($searchbyname);
                $item_model = item::model()->findAll("LOWER(name) LIKE :name",array(":name"=>"$searchbyname_low%"));
                $initem = array();
                if($item_model != null)
                {    
                      foreach($item_model as $_item){
                           $initem[] = $_item->id;
                      }

                }
// Re-rank Item                 
                
               $cri = new CDbCriteria;
               $cri->compare('category', $id);
               $cri->compare('brand', $searchbybrand);
               if($searchbyname != ""){
                    $cri->addInCondition('id',$initem);
               }
               

        
                  
                $dataProvider=new CActiveDataProvider('item',array(
                        'sort'=>array(
                                'defaultOrder'=>'currentRanking ASC',
                         ),

                        'criteria'=>$cri,


                    )    
                );
                
                
                
		$this->render('list',array(
			'dataProvider'=>$dataProvider,'searchbybrand'=>$searchbybrand,'searchbyname'=>$searchbyname,
		));
	}
        
       public function actionAutocomplete($inputtext,$table){
  
        // Query with 
              
           //$qtxt ="SELECT $table.majorcategory FROM $table WHERE $table.majorcategory LIKE '$inputtext%';";
           //$rows =Yii::app()->db->createCommand($qtxt)->queryAll();
           
           //$model = new $table;
           //$row = $model->findAll("",array());
           
          
         // Append the query result to array
            $res = array();
            /*
            foreach($rows as $row)
            {
                $res[] = $row['majorcategory'];
            }
             * 
             */
     
     
            echo CJSON::encode(array('res'=>$res));

            Yii::app()->end();
 
 }
        
       /*   Need to Fix :
        *   1. STATIC MODEL : Edit name of model 
       */
       public function actionSavefieldUnique($id,$fieldname,$fieldvalue){
  
 // Query with 
                  $cri = new CDbCriteria();
                  $cri->condition = "$fieldname =:fieldname and id !=:id";
                  $cri->params    = array(":fieldname"=>$fieldvalue,":id"=>$id);
                  $findmodel = null;
// STATIC MODEL                  
                  $findmodel = category::model()->find($cri);
// Load model by PK                 
                  $model=$this->loadModel($id);
     
                  $unique = true; $updateon = null;  $updateby = null;
                  if($fieldvalue == null || $fieldvalue==""){
                         $value =  $fieldvalue;
                         $model->setAttributes(array($fieldname=>$fieldvalue));
                          $model->save();
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
                  }else{
// Check existing or not   
                        if($findmodel == null){ //&& ($fieldvalue!=null || $fieldvalue!="")){
// If not exist then using the newvalue and save                      
                                $value =  $fieldvalue;
                                $model->setAttributes(array($fieldname=>$fieldvalue));
                                $model->save();

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
                        }else{
// Not save                       
                                $value =  $model->getAttribute($fieldname);
                                $unique = false;
                       
                        }
                  }

                  echo CJSON::encode(array('unique'=>$unique,'oldvalue'=>$value,'updateon'=>$updateon,'updateby'=>$updateby));
                  Yii::app()->end();

         }
         
       public function actionSavefield($id,$fieldname,$fieldvalue){
  

// Load model by PK                 
                  $model=$this->loadModel($id);
                  $updateon = null;  $updateby = null;
//Put the newvalue and save                      
                 
                    $model->setAttributes(array($fieldname=>$fieldvalue));
                    $model->save();
              
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
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($addnum)
	{
            
           
            $model = array(10);
            if($addnum>=1)    {$model[1]= new category;  $model[1]->name = null;   $model[1]->save();}
            if($addnum>=2)    {$model[2]= new category;  $model[2]->name = null;   $model[2]->save();}
            if($addnum>=3)    {$model[3]= new category;  $model[3]->name = null;   $model[3]->save();}
            if($addnum>=4)    {$model[4]= new category;  $model[4]->name = null;   $model[4]->save();}
            if($addnum>=5)    {$model[5]= new category;  $model[5]->name = null;   $model[5]->save();}
            if($addnum>=6)    {$model[6]= new category;  $model[6]->name = null;   $model[6]->save();}
            if($addnum>=7)    {$model[7]= new category;  $model[7]->name = null;   $model[7]->save();}
            if($addnum>=8)    {$model[8]= new category;  $model[8]->name = null;   $model[8]->save();}
            if($addnum>=9)    {$model[9]= new category;  $model[9]->name = null;   $model[9]->save();}
            if($addnum>=10)   {$model[10]= new category; $model[10]->name = null;  $model[10]->save();}
                
            
           
          
            
                $this->render('index',array('model'=>$model,));
/*  * 
 */
    /*            
                //$es = new EditableSaver('category');
              
                  $es->onBeforeUpdate = function($event) {
                    $event->sender->setAttribute('update_on', date('Y-m-d H:i:s'));
                    $event->sender->setAttribute('update_by', Yii::app()->user->getId());
                    
                };
               
             * 
            
            //    $es->update();
                
            
                $model = new category;
                $model->name = null;
                $model->save();
                $category_model = category::model()->findAll();
                 $this->renderPartial('_gridView',array('model'=>$category_model,'modelname'=>'category','path'=>$this->createUrl('category/updatetype'),
                                               // 'tableStyle'=>'table_view1', 'tablewidth' => '800px',  
                                                'gridColumn'=>array(array('editable'=>true,'header'=>'Name','name'=>'name','type'=>'text'),
                                                                    array('editable'=>true,'header'=>'Description','colwidth'=>'150px','name'=>'description','type'=>'textarea'),
                                                                    array('editable'=>false,'header'=>'Update on','colwidth'=>'100px','name'=>'update_on','type'=>'date',),
                                                                    array('editable'=>false,'header'=>'Update By','colwidth'=>'50px','name'=>'update_by','type'=>'text','relation'=>'user'),
                                                ),true,false
                                              )
                                                 
                       );
           
 
                Yii::app()->end();
  */
	}
        public function actionRemove($id)
	{
		$model=$this->loadModel($id);
                $model->delete();
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		Yii::app()->end();
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
                $this->removePagination();
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['category'])) {
			$model->attributes=$_POST['category'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
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
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}
		} else {
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		}
	}

	/**
	 * Lists all models.
	 */
	

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
                 $this->removePagination();
		$model=new category('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['category'])) {
			$model->attributes=$_GET['category'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return category the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
                 $this->removePagination();
		$model=category::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param category $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='category-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        private function removePagination(){
            unset(Yii::app()->session['searchbycategory']);
            unset(Yii::app()->session['searchbybrand']);
            unset(Yii::app()->session['searchbyname']);
            
        }
}