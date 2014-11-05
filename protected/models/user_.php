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
 * @property string $address
 * @property string $greeting
 * @property string $mobile
 */
class user extends beforeSaveActiveRecord
{
        public $password_repeat;
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
                      
                        array('email','required'),
                        array('username','required'),
			array('point', 'numerical', 'integerOnly'=>true),
			array('givenname, lastname, email, username, password, income, occupation, skin, address', 'length', 'max'=>256),
			array('auth, otherskin', 'length', 'max'=>1024),
			array('sex, mobile', 'length', 'max'=>64),
			array('facebook, googleplus', 'length', 'max'=>128),
			array('birthdate, registereddate, updatedate, last_time_login, greeting', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, givenname, lastname, email, username, password, auth, point, birthdate, registereddate, updatedate, last_time_login, sex, income, occupation, skin, otherskin, facebook, googleplus, address, greeting, mobile', 'safe', 'on'=>'search'),
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
}