<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout ='//layouts/column2';

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
				'actions'=>array('create','editinfo','checkcreate','completecreate'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('editableview','updateinfo','follower','addfollow','unfollow','followlist','deletepic','wishlist','member','latestreview','review','complete','view','update','delete','remove','changepassword'),
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
        
        public function actionEditableview($membername)
	{
// Check user ID 
               $this->removePagination();
               $member = user::model()->findByAttributes(array("username"=>$membername));
               $currentuser = user::model()->findbyPk(Yii::app()->user->getId());
//               $reviewmodel = review::model()->findAll("user_id=:user_id",array(":user_id"=>Yii::app()->user->getId()));
//               $followlist = followlist::model()->findAll("user_id=:user_id",array(":user_id"=>Yii::app()->user->getId()));
//               if($this->userdisplayUpload($currentuser)){
//                   $this->redirect(array('view'));
//               }
                 $reviewmodel = review::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                $followlist = followlist::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                if($member->isCurrentuser($member->id)){if($this->userdisplayUpload()){$this->redirect(array("view",'membername'=>$membername));}}
                
// Try to get greeting form
                if(isset($_POST['greeting']) || isset($_POST['facebook']) || isset($_POST['googleplus']) || isset($_POST['twitter']) || isset($_POST['instagram']) || isset($_POST['pinterest']) || isset($_POST['youtube']) )
                {
                
                        if(isset($_POST['greeting']))
                        {             
                                $currentuser->greeting= $_POST['greeting'];
                                $currentuser->saveAttributes(array("greeting"));
                        }
                        if(isset($_POST['facebook']))
                        {             
                                $currentuser->facebook= $_POST['facebook'];
                                $currentuser->saveAttributes(array("facebook"));
                        }
                        if(isset($_POST['googleplus']))
                        {             
                                $currentuser->googleplus= $_POST['googleplus'];
                                $currentuser->saveAttributes(array("googleplus"));
                        }
                        if(isset($_POST['twitter']))
                        {             
                                $currentuser->twitter= $_POST['twitter'];
                                $currentuser->saveAttributes(array("twitter"));
                        }
                        if(isset($_POST['instagram']))
                        {             
                                $currentuser->instagram= $_POST['instagram'];
                                $currentuser->saveAttributes(array("instagram"));
                        }
                        if(isset($_POST['pinterest']))
                        {             
                                $currentuser->pinterest= $_POST['pinterest'];
                                $currentuser->saveAttributes(array("pinterest"));
                        }
                         if(isset($_POST['youtube']))
                        {             
                                $currentuser->youtube= $_POST['youtube'];
                                $currentuser->saveAttributes(array("youtube"));
                        }
                        $this->redirect(array('view','membername'=>$currentuser->username));
                }
                $this->render('editableview',array('model'=>$currentuser,'reviewmodel'=>$reviewmodel,'followlist'=>$followlist));
                
                      
	}
   
         public function actionUpdateinfo($membername){

                $premodel = $this->loadModel(Yii::app()->user->getId());
                $member = user::model()->findByAttributes(array("username"=>$membername));
                $reviewmodel = review::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                
                $model =new user('updateinfopage');
// Transfer information from MODEL to NEWMODEL
                $model->attributes = $premodel->attributes;
                
                if(isset($_POST['user']))
		{   
                        
			$model->attributes = $_POST['user'];
                        $model->username = $member->username;
                       
// It must be had some input 
                        if( $_POST['user']['newpassword'] != null || $_POST['user']['newpassword'] != ""){
                            $model->password = md5($_POST['user']['newpassword']);
                        }
                        $model->newpassword = $_POST['user']['newpassword'];
                       
                        if(isset($_POST['myDropDown'])){
                            $model->auth = $_POST['myDropDown'];
                        }
                        if(isset($_POST['chk_group'])){
                             $optionArray = $_POST['chk_group'];
                             $other = "";
                             foreach($optionArray as $option){
                                 if($other=="")
                                    $other = $option;
                                 else
                                    $other = $other.",".$option;
                             }
                             $model->otherskin = $other;

                        }
                    
                        if($model->validate()){
                            $premodel->attributes = $model->attributes;
                            if($premodel->save()){
                                    $this->redirect(array("user/view",'membername'=>$member->username));
                            }
                        }else{
                            $model->newpassword = null;
                            $model->password_repeat = null;
                            
                        }
                        
            }

		$this->render('updateinfo',array(
			'model'=>$premodel,'reviewmodel'=>$reviewmodel,
		));
        }
       public function actionAddfollow($other){
           
           $follow = new followlist;
           $follow->user_id = Yii::app()->user->getId();
           $follow->other_id = $other;
           $follow->save();
           Yii::app()->end();
       }
       public function actionUnfollow($user_id,$other_id){
           
           $criteria = new CDbCriteria;
           $criteria->condition = "user_id=:user_id and other_id=:other_id";
           $criteria->params = array(":user_id"=>$user_id,":other_id"=>$other_id);
           
           followlist::model()->deleteAll($criteria);
                   
          
           
           Yii::app()->end();
       }
        
        public function actionFollowlist($membername){
               $this->removePagination();
               $searchbyname = "";
              
            
                $member = user::model()->findByAttributes(array("username"=>  strtolower($membername)));
                
                
                if($member != null){
                        $reviewmodel = review::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                        $reviewlist = $reviewmodel;
                        if($member->isCurrentuser($member->id)){if($this->userdisplayUpload()){$this->redirect(array("followlist",'membername'=>$membername));}}
                }else{
                       $me = user::model()->findByPk(Yii::app()->user->getId());
                       $this->redirect(array('followerlist','membername'=>$me->username));
                }
              
                if(isset($_POST["follower_name"]))
                {
                    $searchbyname = $_POST["follower_name"];
                    
                    
                }    
        // Let the given searching words lower case 
                              $searchbyname_low = strtolower($searchbyname);
      
                              $user_model = user::model()->findAll("LOWER(username) LIKE :username",array(":username"=>"%$searchbyname_low%"));
                              $inuser = array();
                              if($user_model != null)
                              {    
                                    foreach($user_model as $_user){
                                         $inuser[] = $_user->id;
                                    }
                                   
                              }
        
                               //$followlist = followlist::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                               
                               $cri = new CDbCriteria;
                               $cri->condition = "user_id=:user_id";
                               $cri->params = array(":user_id"=>$member->id);
                               $cri->addInCondition('other_id',$inuser);
                              
                                
           
                       
                              $dataProvider=new CActiveDataProvider('followlist',array(
                                                                        'sort'=>array(
                                                                                'defaultOrder'=>'id ASC',
                                                                         ),

                                                                        'criteria'=>$cri,
                                    
                                                                        'pagination'=>array(
                                                                            'pageSize'=>9,
                                                                        ),


                                                                      )    
                                );
  
                
                //$currentuser = user::model()->findByAttributes(array('username'=>$currentuser->username));
                $this->render('followlist',array('dataProvider'=>$dataProvider,'model'=>$member,'reviewmodel'=>$reviewmodel,/*'followlist'=>$followlist,*/'searchbyname'=>$searchbyname));
                   
                   
            
      }
      
      public function actionFollower($membername){
               $this->removePagination();
               $searchbyname = "";
              
            
                $member = user::model()->findByAttributes(array("username"=>  strtolower($membername)));
                
                
                if($member != null){
                        $reviewmodel = review::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                        $reviewlist = $reviewmodel;
                        if($member->isCurrentuser($member->id)){if($this->userdisplayUpload()){$this->redirect(array("followlist",'membername'=>$membername));}}
                }
//   In case there is no username then redirect to              
                else{
                    
                       $me = user::model()->findByPk(Yii::app()->user->getId());
                       $this->redirect(array('follower','membername'=>$me->username));
                
                }
              
                if(isset($_POST["follower_name"]))
                {
                    $searchbyname = $_POST["follower_name"];
                    
                    
                }    
        // Let the given searching words lower case 
                              $searchbyname_low = strtolower($searchbyname);
      
                              $user_model = user::model()->findAll("LOWER(username) LIKE :username",array(":username"=>"%$searchbyname_low%"));
                              $inuser = array();
                              if($user_model != null)
                              {    
                                    foreach($user_model as $_user){
                                         $inuser[] = $_user->id;
                                    }
                                   
                              }
        
                            
      // Display Conditions                         
                               
                               $cri = new CDbCriteria;
                               $cri->condition = "other_id=:other_id";
                               $cri->params = array(":other_id"=>$member->id);
                               $cri->addInCondition('other_id',$inuser);
                              
                                
           
                       
                              $dataProvider=new CActiveDataProvider('followlist',array(
                                                                        'sort'=>array(
                                                                                'defaultOrder'=>'id ASC',
                                                                         ),

                                                                        'criteria'=>$cri,
                                    
                                                                        'pagination'=>array(
                                                                            'pageSize'=>9,
                                                                        ),


                                                                      )    
                                );
  
                
                //$currentuser = user::model()->findByAttributes(array('username'=>$currentuser->username));
                $this->render('follower',array('dataProvider'=>$dataProvider,'model'=>$member,'reviewmodel'=>$reviewmodel,'searchbyname'=>$searchbyname));
                   
                   
            
      }
      
       public function actionWishlist($membername){
               $this->removePagination();
               $searchbybrand = "";
               $searchbyscore = "";
               $reviewlist = array();
            
                $member = user::model()->findByAttributes(array("username"=>$membername));
                
                
                if($member != null){
                        $reviewmodel = review::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                        $reviewlist = $reviewmodel;
                        if($member->isCurrentuser($member->id)){if($this->userdisplayUpload()){$this->redirect(array("wishlist",'membername'=>$membername));}}
                }
                
 /*               
                if(isset($_POST["searchbybrand"]))
                {
                    $searchbybrand = $_POST["searchbybrand"];
                    foreach($reviewmodel as $_review){
//Try to find item's brand
                            $item = item::model()->findByPk($_review->item_id); // Item reviewed by this user

                            $searchbybrand_model = brand::model()->findByAttributes(array("name"=>$searchbybrand));
// If found matched Name                                         
                            if($searchbybrand_model!=null && $item!=null){
                                if($searchbybrand_model->id == $item->brand){
                                     $reviewlist = array($reviewlist,$_review);
                                }
                            }
                    }
                    
                }    
                    
                    
                    
                 if(isset($_POST["searchbyscore"])){
                     $searchbyscore = $_POST["searchbyscore"];
                     Yii::app()->session['searchbyscore'] = $searchbyscore;
                 }
                    
           * 
  */                
                
                               $followlist = followlist::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                                $thecondition = "";
                                $theparams = array();
                                
                                $thecondition = "user_id=:user_id";
                                $theparams[':user_id']    = $member->id ;
                          
                                if(Yii::app()->session['searchbyscore'] != ""){
                                     $thecondition = "$thecondition and vote=:vote";
                                     $theparams[':vote']    = Yii::app()->session['searchbyscore'];
                                }
                                        
                         //$userid = Yii::app()->user->getId();
                                $dataProvider=new CActiveDataProvider('wishlist',array(
                                                                        'sort'=>array(
                                                                                'defaultOrder'=>'create_on ASC',
                                                                         ),

                                                                        'criteria'=>array(
                                                                            'condition'=>$thecondition,
                                                                            'params'=>$theparams,
                                                                        ),
                                                                        'pagination'=>array(
                                                                            'pageSize'=>9,
                                                                        ),


                                                                      )    
                                );
  
                
                //$currentuser = user::model()->findByAttributes(array('username'=>$currentuser->username));
                $this->render('wishlist',array('dataProvider'=>$dataProvider,'model'=>$member,'reviewmodel'=>$reviewmodel,'followlist'=>$followlist,'givingscore'=>$searchbyscore,'selectedbrand'=>$searchbybrand));
                   
            
                }

        
        
        public function actionReview($itemid)
	{
// Check user ID 
               $this->removePagination();
               $model = $this->loadModel(Yii::app()->user->getId());
                $reviewmodel = review::model()->findAll("user_id=:user_id",array(":user_id"=>Yii::app()->user->getId()));
               
// Check          
		$this->render('review',array('reviewmodel'=>$reviewmodel,'itemid'=>$itemid,'model'=>$model));
	}
        public function actionLatestreview($membername)
	{
               $searchbybrand = "";
               $searchbyscore = "";
               $reviewlist = array();
            
                $member = user::model()->findByAttributes(array("username"=>$membername));
                
                
                if($member != null){
                        $reviewmodel = review::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                        $reviewlist = $reviewmodel;
                        if($member->isCurrentuser($member->id)){if($this->userdisplayUpload()){$this->redirect(array("wishlist",'membername'=>$membername));}}
                }
                
                
                if(isset($_POST["searchbybrand"]))
                {
                    $searchbybrand = $_POST["searchbybrand"];
                    foreach($reviewmodel as $_review){
//Try to find item's brand
                            $item = item::model()->findByPk($_review->item_id); // Item reviewed by this user

                            $searchbybrand_model = brand::model()->findByAttributes(array("name"=>$searchbybrand));
// If found matched Name                                         
                            if($searchbybrand_model!=null && $item!=null){
                                if($searchbybrand_model->id == $item->brand){
                                     $reviewlist = array($reviewlist,$_review);
                                }
                            }
                    }
                    
                }    
                    
                    
                    
                 if(isset($_POST["searchbyscore"])){
                     $searchbyscore = $_POST["searchbyscore"];
                     Yii::app()->session['searchbyscore'] = $searchbyscore;
                 }
                    
                    
                
                               $followlist = followlist::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                                $thecondition = "";
                                $theparams = array();
                                $thecondition = "user_id=:user_id";
                                $theparams[':user_id']    = $member->id ;
                                if(Yii::app()->session['searchbyscore'] != ""){
                                     $thecondition = "$thecondition and vote=:vote";
                                     $theparams[':vote']    = Yii::app()->session['searchbyscore'];
                                }
                                        
                                //$userid = Yii::app()->user->getId();
                                $dataProvider=new CActiveDataProvider('review',array(
                                                                        'sort'=>array(
                                                                                'defaultOrder'=>'update_on DESC',
                                                                         ),

                                                                        'criteria'=>array(
                                                                            'condition'=>$thecondition,
                                                                            'params'=>$theparams,
                                                                        ),


                                                                      )    
                                );
                
                //$currentuser = user::model()->findByAttributes(array('username'=>$currentuser->username));
                $this->render('latestreview',array('dataProvider'=>$dataProvider,'model'=>$member,'reviewmodel'=>$reviewmodel,'followlist'=>$followlist,'givingscore'=>$searchbyscore,'selectedbrand'=>$searchbybrand));
                   
            
                }

              
                    
                


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($membername)
	{
// Check user ID 
               $this->removePagination();
               $member = user::model()->findByAttributes(array("username"=>$membername));
               $currentuser = user::model()->findbyPk(Yii::app()->user->getId());
//               $reviewmodel = review::model()->findAll("user_id=:user_id",array(":user_id"=>Yii::app()->user->getId()));
//               $followlist = followlist::model()->findAll("user_id=:user_id",array(":user_id"=>Yii::app()->user->getId()));
//               if($this->userdisplayUpload($currentuser)){
//                   $this->redirect(array('view'));
//               }
             
               if($member != null){
                        $reviewmodel = review::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                        $followlist = followlist::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                        if($member->isCurrentuser($member->id)){if($this->userdisplayUpload()){$this->redirect(array("view",'membername'=>$membername));}}
//                      $currentuser = user::model()->findByAttributes(array('username'=>$currentuser->username));
                        $this->render('view',array('model'=>$currentuser,'reviewmodel'=>$reviewmodel,'followlist'=>$followlist));
                         
               }else{
                      
                   $this->render('view',array('model'=>$currentuser,'reviewmodel'=>$reviewmodel,'followlist'=>$followlist));
               }
                      
	}
        public function actionMember($membername)
	{
// Check user ID 
            
               $member = user::model()->findByAttributes(array("username"=>$membername));
               
              
               if($member != null){
                        $reviewmodel = review::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                        $followlist = followlist::model()->findAll("user_id=:user_id",array(":user_id"=>$member->id));
                        //$currentuser = user::model()->findByAttributes(array('username'=>$currentuser->username));
                        $this->render('member',array('model'=>$member,'reviewmodel'=>$reviewmodel,'followlist'=>$followlist));
               }else{
                      
                   $this->render('member',array('model'=>$member,'reviewmodel'=>$reviewmodel,'followlist'=>$followlist));
               }
                      
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
// 
                if(!Yii::app()->user->isGuest)
                {   
                    $this->redirect(array("view",'membername'=>user::model()->getusername(Yii::app()->user->getid())));
                } 
                $this->removePagination();
               
                $model=new user('registerpage');
                
		

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['user']))
		{
			$model->attributes=$_POST['user'];
// Specific somethings 
                        $model->username = strtolower($model->username);
//                        if(isset($_POST['user']['password']) && $_POST['user']['password']!= ""){
//                            $model->password= md5($_POST['user']['password']);
//                            $model->password_repeat = md5($_POST['user']['password_repeat']);
//                        }
                        if(isset($_POST['myDropDown'])){
                            $model->auth = $_POST['myDropDown'];
                        }
                        if(isset($_POST['chk_group'])){
                             $optionArray = $_POST['chk_group'];
                             $other = "";
                             foreach($optionArray as $option){
                                 if($other=="")
                                    $other = $option;
                                 else
                                    $other = $other.",".$option;
                             }
                             $model->otherskin = $other;

                        }
                        
                        $model->point = 50;
			if($model->validate()){
                            Yii::app()->session['userinfo'] = $model;
                            $this->redirect(array('checkcreate'));
                            
                        }else{
                            $model->password = null;
                            $model->password_repeat = null;
                        }
                        
            }

		$this->render('create',array(
			'model'=>$model,
		));
	}
        
         public function actionCheckcreate(){
                if(Yii::app()->session['userinfo']){
                    $model = Yii::app()->session['userinfo'] ;
                }else{
                    $model = new user;
                }
                $this->render('checkcreate',array(
			'model'=>$model,
		));
        }
        public function actionEditinfo(){
// Redirect to user page if already been member
                if(!Yii::app()->user->isGuest)
                {   
                    $this->redirect(array("view",'membername'=>user::model()->getusername(Yii::app()->user->getid())));
                } 
               if(Yii::app()->session['userinfo']){
                    $model = Yii::app()->session['userinfo'] ;
                }else{
                    $model = new user;
                }
             
                if(isset($_POST['user']))
		{
			$model->attributes=$_POST['user'];
//                        if(isset($_POST['user']['password']) && $_POST['user']['password']!= ""){
//                            $model->password= md5($_POST['user']['password']);
//                            $model->password_repeat = md5($_POST['user']['password_repeat']);
//                        }
                        if(isset($_POST['myDropDown'])){
                            $model->auth = $_POST['myDropDown'];
                        }
                        if(isset($_POST['chk_group'])){
                             $optionArray = $_POST['chk_group'];
                             $other = "";
                             foreach($optionArray as $option){
                                 if($other=="")
                                    $other = $option;
                                 else
                                    $other = $other.",".$option;
                             }
                             $model->otherskin = $other;

                        }
                        
                        $model->point = 50;
			if($model->validate()){
                            Yii::app()->session['userinfo'] = $model;
                            $this->redirect(array('checkcreate'));
                            
                        }else{
                            $model->password = null;
                            $model->password_repeat = null;
                        }
                        
            }

		$this->render('create',array(
			'model'=>$model,
		));
        }
        public function actionCompletecreate(){
// Redirect to user page if already been memeber
                if(!Yii::app()->user->isGuest)
                {   
                    $this->redirect(array("view",'membername'=>user::model()->getusername(Yii::app()->user->getid())));
                } 
               if(Yii::app()->session['userinfo']){
                    $model = Yii::app()->session['userinfo'] ;
                  
                    $model->password= md5($model->password);
                     $model->password_repeat= md5($model->password_repeat);
                   
               }
                else{
                    $this->redirect(array('create'));
                }
                if($model->save()){
                    unset(Yii::app()->session['userinfo']);
                }
                $this->render('completecreate',array(
			'model'=>$model,
		));
        }
        
       
        
        public function actionChangepassword($id)
	{
                removePagination();
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['user']))
		{
			$model->attributes=$_POST['user'];
                        if(isset($_POST['user']['password']) && $_POST['user']['password']!= "")
                            $model->password= md5($_POST['user']['password']);
                            $model->password_repeat = md5($_POST['user']['password_repeat']);
			if($model->save())
                            $this->redirect(Yii::app()->homeUrl);
				//$this->redirect(array('index','id'=>$model->id));
		}

		$this->render('changepassword',array('model'=>$model));
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

		if(isset($_POST['user']))
		{
			$model->attributes=$_POST['user'];
                      
                        if(isset($_POST['myDropDown'])){
                            $model->auth = $_POST['myDropDown'];
                        }
                        if(isset($_POST['chk_group'])){
                             $optionArray = $_POST['chk_group'];
                             $other = "";
                             foreach($optionArray as $option){
                                 if($other=="")
                                    $other = $option;
                                 else
                                    $other = $other.",".$option;
                             }
                             $model->otherskin = $other;

                        }
			if($model->save()){
                            $this->redirect(array('index'));
                                 
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
        
        public function actionDeletepic($id)
	{
                $model = item::model()->findByPk($id);
                
		if($model!=null){
                    $model->image = null;
                    $model->save();
                }
                        
                Yii::app()->end();
        }

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
                $this->removePagination();
		$dataProvider=new CActiveDataProvider('user');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
                $this->removePagination();
		$model=new user('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['user']))
			$model->attributes=$_GET['user'];

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
		$model=user::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionRemove($id){
		//$this->render('remove');
                $model=$this->loadModel($id);
                $model->delete();
                $this->redirect(array('user/index'));
	}
        
        private function removePagination(){
            unset(Yii::app()->session['searchbyscore']);
            unset(Yii::app()->session['searchbybrand']);
            
        }
        
        private function userdisplayUpload(){
          
            $model = user::model()->findByPk(Yii::app()->user->getId());
            if(isset($_POST['user']))
            {
                        
                        
                       // $dir =  Yii::app()->baseUrl."/dispics";  // dirname(__FILE__).'/../../dispics';
                       
                        $dir = dirname(__FILE__).'/../../userdispics';
                     
                        
                       
// Check before upload image                        
                        if(CUploadedFile::getInstance($model,'image') != null ){
                                 $model->image = CUploadedFile::getInstance($model,'image');
                                 $model->image->reset();
                          
                                  $filtype =  explode('/',$model->image->type);
                                   $updaloadnow = new DateTime('now');
//Create image name by combining >> USERNAME-DATETIME                                   
                                  $updaloaddatetime = $updaloadnow->format('Y').$updaloadnow->format('m').$updaloadnow->format('d').$updaloadnow->format('H').$updaloadnow->format('i').$updaloadnow->format('s');
// The file that have been uploaded                                  
                                  $uploadedfilename = $model->username.'-'.$updaloaddatetime;
                 
                                  $model->image->saveAs($dir.'/'.$uploadedfilename.'.'.$filtype[1]);
                                  $model->myimg = $uploadedfilename.'.'.$filtype[1];
                                  if($model->saveAttributes(array('myimg')))return true;
                            
                        }
                     
            }
            return false;
        }
        
       
        
        
}
