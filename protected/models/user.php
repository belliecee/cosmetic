<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $givenname
 * @property string $lastname
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $auth
 * @property integer $point
 * @property integer $voted
 * @property string $myimg
 * @property string $birthdate
 * @property string $registereddate
 * @property string $updatedate
 * @property string $last_time_login
 * @property string $sex
 * @property string $income
 * @property string $occupation
 * @property string $skin
 * @property string $otherskin
 * @property string $facebook
 * @property string $googleplus
 * @property string $twitter
 * @property string $pinterest
 * @property string $address
 * @property string $greeting
 * @property string $mobile
 */
class user extends beforeSaveActiveRecord
{
          public $password_repeat;
          public $newpassword;
          public $authenpassword;
          public $image;
          public $checkaccept;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return user the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('username','unique','message'=>"ชื่อนี้มีผู้ใช้งานอยู่แล้ว",'on'=>'registerpage'),
                        array('email','match','pattern'=>'/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD'),
                        array('email','unique','message'=>" Email ถูกใช้งานแล้ว",'on'=>'registerpage'),
// checkEmail is a custom validation rule Error when                         
                        array('email','checkEmail','message'=>" Email ถูกใช้งานแล้ว",'on'=>'updateinfopage'),
// Required parameters on registerpage
                        array('checkaccept,email, username, password, password_repeat','required','on'=>'registerpage'),
// Required parameters on updateinfo
                        array('email, authenpassword','required','on'=>'updateinfopage','message'=>"กรุณาใส่ข้อมูลให้ครบถ้วน"),
// password_repeat matching on registerpage      
                        array('password_repeat', 'compare', 'compareAttribute'=>'password','on'=>'registerpage', 'message'=>"Passwords don't match"),
// password_repeat matching on updateinfopage                
                        array('password_repeat', 'compare', 'compareAttribute'=>'newpassword','on'=>'updateinfopage', 'message'=>"Passwords don't match"),
// Password authentication before updating info on updateinfopage                
                        array('authenpassword', 'passwordauthentication','on'=>'updateinfopage'),                
                        array('checkaccept','compare','compareValue'=>"1",'on'=>'registerpage','message'=>"<b style='margin-left:50px;'>You must agree to the terms and conditions</b>"),
// username, email should be lower case
                        array('username,email','filter','filter'=>'strtolower'),
                        array('image', 'file','allowEmpty' => true , 'types'=>'jpeg,jpg, gif, png'),
			array('point, voted', 'numerical', 'integerOnly'=>true),
			array('givenname, lastname, email, username, password, income, occupation, skin, address', 'length', 'max'=>256),
			array('auth, otherskin', 'length', 'max'=>1024),
			array('myimg', 'length', 'max'=>512),
			array('sex, mobile', 'length', 'max'=>64),
			array('facebook, googleplus', 'length', 'max'=>128),
			array('birthdate, registereddate, updatedate, last_time_login, greeting', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, givenname, lastname, email, username, password, auth, point, voted, myimg, birthdate, registereddate, updatedate, last_time_login, sex, income, occupation, skin, otherskin, facebook, googleplus, address, greeting, mobile', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'givenname' => 'Givenname',
			'lastname' => 'Lastname',
			'email' => 'Email',
			'username' => 'Username',
			'password' => 'Password',
			'auth' => 'Auth',
			'point' => 'Point',
			'voted' => 'Voted',
			'myimg' => 'Myimg',
			'birthdate' => 'Birthdate',
			'registereddate' => 'Registereddate',
			'updatedate' => 'Updatedate',
			'last_time_login' => 'Last Time Login',
			'sex' => 'Sex',
			'income' => 'Income',
			'occupation' => 'Occupation',
			'skin' => 'Skin',
			'otherskin' => 'Otherskin',
			'facebook' => 'Facebook',
			'googleplus' => 'Googleplus',
			'address' => 'Address',
			'greeting' => 'Greeting',
			'mobile' => 'Mobile',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('givenname',$this->givenname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('auth',$this->auth,true);
		$criteria->compare('point',$this->point);
		$criteria->compare('voted',$this->voted);
		$criteria->compare('myimg',$this->myimg,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('registereddate',$this->registereddate,true);
		$criteria->compare('updatedate',$this->updatedate,true);
		$criteria->compare('last_time_login',$this->last_time_login,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('income',$this->income,true);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('skin',$this->skin,true);
		$criteria->compare('otherskin',$this->otherskin,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('googleplus',$this->googleplus,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('greeting',$this->greeting,true);
		$criteria->compare('mobile',$this->mobile,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function validatePassword($password)
        {
            
            return $this->hashPassword($password);
        }
        
        public function hashPassword($password)
        {
            return md5($password);
        }
        public function islevel($str){
               $model = user::model()->findByPk(Yii::app()->user->getId());
              
              if($str === $model->auth)
                  return true;
              else
                  return false;
              
        }
        public function getusername($userid)
        {
                $model=user::model()->findByPk($userid);
		if($model!= null){
                    return $model->username;
                }
                return null;
            
        }
        public function isCurrentuser($userid){
               if($userid == Yii::app()->user->getid()){return true;}
               else{return false;}
                   
               
        }
//Custom validtion rules         
        /**
	 * @param string the name of the attribute to be validated
	 * @param array options specified in the validation rule
	 */
	public function checkEmail($attribute,$params)
	{
                $current = user::model()->findByPk(Yii::app()->user->getId());
		$models = user::model()->findAllByAttributes(array('email' =>$this->email));
		
                
                $erroroccur = 0;
                if((count($models)>0) && ($current->email != $this->email)){
                    $erroroccur = 1;
                }
                if($erroroccur == 1){
			 $this->addError($attribute, ' Email ถูกใช้งานแล้ว');
		}
	}
        
//Custom validtion rules         
        /**
	 * @param string the name of the attribute to be validated
	 * @param array options specified in the validation rule
	 */
	public function passwordauthentication($attribute,$params)
	{
                $current = user::model()->findByPk(Yii::app()->user->getId());
		//$models = user::model()->findAllByAttributes(array('email' =>$this->email));
		
                
                $erroroccur = 0;
   
//  IF input password not equal to current password THEN ERROR OCCUR              
                if(md5($this->authenpassword)!= $current->password ){
                    $erroroccur = 1;
                }
                if($erroroccur == 1){
			 $this->addError($attribute, 'รหัสผ่านไม่ถูกต้อง');
		}
	}

        
} // End of Class 