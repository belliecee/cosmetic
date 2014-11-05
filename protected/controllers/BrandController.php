<?php

class BrandController extends Controller
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
				'actions'=>array('adminsearch','index','view','list','admin','create','update','updatetype','remove','savefield','savefieldUnique'),
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

        
        public function actionAdminsearch($searchtext)
	{
              $cri = new CDbCriteria();
              $searchtext_low = strtolower($searchtext);
              $cri->condition = "LOWER(name) LIKE :name or LOWER(description) LIKE :description";
              $cri->params= array(":name"=>"$searchtext_low%",":description"=>"$searchtext_low%");
              $cri->order = 'update_on DESC';
              
            $model       =  brand::model()->findAll($cri); 
            $modelname   =  'brand';
            $updateurl   =  'brand/updatetype';
            $tableStyle = 'table_view_graywhite';
            $tablewidth = '850px';
            $gridColumn  =  array(
                            array('editable'=>false,'header'=>'Img','colwidth'=>'200px','name'=>'brand_img','type'=>'image','setunique'=>true),
                            array('editable'=>true,'header'=>'Name','colwidth'=>'200px','name'=>'name','type'=>'text','setunique'=>true),
                            array('editable'=>true,'header'=>'Description','colwidth'=>'200px','name'=>'description','type'=>'textarea'),
                            array('editable'=>false,'header'=>'Update on','colwidth'=>'150px','name'=>'update_on','type'=>'date',),
                            array('editable'=>false,'header'=>'Update By','colwidth'=>'150px','name'=>'update_by','type'=>'text','relation'=>'user'),
                                 );
            $this->renderPartial('_gridView',array('model'=>$model,'modelname'=>$modelname,'path'=>$updateurl,
                                             'tableStyle'=>$tableStyle, 'tablewidth' => $tablewidth,  
                                              'gridColumn'=>$gridColumn
                                            )
                                                 
                       );
              Yii::app()->end();
        }
        
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
        public function actionList($id)
	{
            
                $searchbycategory = "";
                $searchbyname = "";
                
                
               
                if(isset($_POST['searchbycategory'])){ $searchbycategory = $_POST['searchbycategory']; Yii::app()->session['searchbycategory'] = $searchbycategory; }
                if(isset($_POST['searchbyname'])){ $searchbyname = $_POST['searchbyname']; Yii::app()->session['searchbyname'] = $searchbyname;}
                
                if(Yii::app()->session['searchbycategory'] != ""){
                      $searchbycategory  = Yii::app()->session['searchbycategory'];
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
                
               $cri = new CDbCriteria;
               $cri->compare('brand', $id);
               $cri->compare('category', $searchbycategory);
               if($searchbyname != ""){
                    $cri->addInCondition('id',$initem);
               }
            
		$dataProvider=new CActiveDataProvider('item',array(
                        'sort'=>array(
                                'defaultOrder'=>'avgVote DESC',
                         ),

                        'criteria'=>$cri,


                    )    
                );
                
                
                
		$this->render('list',array(
			'dataProvider'=>$dataProvider,'searchbycategory'=>$searchbycategory,'searchbyname'=>$searchbyname,
		));
	}
	public function actionView($id)
	{
                $this->removePagination();
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
        
         public function actionUpdatetype()
        {
            $this->removePagination();
            $es = new EditableSaver('brand');
            $es->onBeforeUpdate = function($event) {
                    //$event->sender->setAttribute('update_on', date('Y-m-d H:i:s'));
                    //$event->sender->setAttribute('update_by', Yii::app()->user->getId());
                    
            };
               
            $es->update();
       
            
              
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
                  $findmodel = brand::model()->find($cri);
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
        

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($addnum){
		 
            $model = array(10);
            if($addnum>=1)    {$model[1]= new brand;  $model[1]->name = null;   $model[1]->save();}
            if($addnum>=2)    {$model[2]= new brand;  $model[2]->name = null;   $model[2]->save();}
            if($addnum>=3)    {$model[3]= new brand;  $model[3]->name = null;   $model[3]->save();}
            if($addnum>=4)    {$model[4]= new brand;  $model[4]->name = null;   $model[4]->save();}
            if($addnum>=5)    {$model[5]= new brand;  $model[5]->name = null;   $model[5]->save();}
            if($addnum>=6)    {$model[6]= new brand;  $model[6]->name = null;   $model[6]->save();}
            if($addnum>=7)    {$model[7]= new brand;  $model[7]->name = null;   $model[7]->save();}
            if($addnum>=8)    {$model[8]= new brand;  $model[8]->name = null;   $model[8]->save();}
            if($addnum>=9)    {$model[9]= new brand;  $model[9]->name = null;   $model[9]->save();}
            if($addnum>=10)   {$model[10]= new brand; $model[10]->name = null;  $model[10]->save();}

                $this->render('index',array('model'=>$model,));
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

		if(isset($_POST['brand']))
		{
			$model->attributes=$_POST['brand'];
			if($model->save()){
                                if($this->brandimgUpload($model->id)){
                                  $this->redirect(array("admin"));
                                }  
                               
				$this->redirect(array("admin"));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
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
	 * Lists all models.
	 */
	public function actionIndex()
	{
                $this->removePagination();
		
		$this->render('index');
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
                $this->removePagination();
		$model=new brand('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['brand']))
			$model->attributes=$_GET['brand'];

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
		$model=brand::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='brand-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        private function brandimgUpload($id){
            
//CONFIG PARAMETERS            
            $filepath = "brandimgs";
           
            $img_property = "brand_img"; 
            
            $model = brand::model()->findByPk($id);
            if(isset($_POST['brand']))
            {
                 
                       
                        $dir = dirname(__FILE__)."/../../$filepath";
                     
                        
                       
// Check before upload image                        
                        if(CUploadedFile::getInstance($model,$img_property) != null ){
                                 $model->image = CUploadedFile::getInstance($model,$img_property);
                                 $model->image->reset();
                          
                                  $filtype =  explode('/',$model->image->type);
                                   $updaloadnow = new DateTime('now');
//Create image name by combining >> USERNAME-DATETIME                                   
                                  $updaloaddatetime = $updaloadnow->format('Y').$updaloadnow->format('m').$updaloadnow->format('d').$updaloadnow->format('H').$updaloadnow->format('i').$updaloadnow->format('s');
// The file that have been uploaded                                  
                                  $uploadedfilename = $model->name.'-'.$updaloaddatetime;
                 
                                  $model->image->saveAs($dir.'/'.$uploadedfilename.'.'.$filtype[1]);
                                  $model->brand_img = $uploadedfilename.'.'.$filtype[1];
                                  if($model->saveAttributes(array('brand_img')))return true;
                            
                        }
                     
            }
            return false;
        }
        
         private function removePagination(){
            unset(Yii::app()->session['searchbycategory']);
            unset(Yii::app()->session['searchbybrand']);
            unset(Yii::app()->session['searchbyname']);
            
        }
}
