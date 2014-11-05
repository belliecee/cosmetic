<?php

/**
 * This is the model class for table "sky1_user".
 *
 * The followings are the available columns in table 'sky1_user':
 * @property string $id
 * @property string $givenname
 * @property string $lastname
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $registereddate
 * @property string $updatedate
 * @property string $last_time_login
 * @property string $officephone
 * @property string $cellphone
 * @property string $homephone
 * @property string $profile
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $country
 * @property string $postcode
 * @property integer $capacity
 * @property integer $available_monday
 * @property integer $available_tuesday
 * @property integer $available_wednesday
 * @property integer $available_thursday
 * @property integer $available_friday
 * @property integer $available_saturday
 * @property integer $available_sunday
 */
class user extends beforeSaveActiveRecord
{
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
		return 'sky1_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('givenname, lastname, email, username, password ', 'required'),
			array('capacity, available_monday, available_tuesday, available_wednesday, available_thursday, available_friday, available_saturday, available_sunday', 'numerical', 'integerOnly'=>true),
			array('givenname, lastname, email, password, homephone, address1, address2', 'length', 'max'=>256),
			array('username, officephone, city, country', 'length', 'max'=>128),
			array('postcode', 'length', 'max'=>64),
			array('profile', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, givenname, lastname, email, username, password, registereddate, updatedate, last_time_login, officephone, cellphone, homephone, profile, address1, address2, city, country, postcode, capacity, available_monday, available_tuesday, available_wednesday, available_thursday, available_friday, available_saturday, available_sunday', 'safe', 'on'=>'search'),
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
			'registereddate' => 'Registereddate',
			'updatedate' => 'Updatedate',
			'last_time_login' => 'Last Time Login',
			'officephone' => 'Officephone',
			'cellphone' => 'Cellphone',
			'homephone' => 'Homephone',
			'profile' => 'Profile',
			'address1' => 'Address1',
			'address2' => 'Address2',
			'city' => 'City',
			'country' => 'Country',
			'postcode' => 'Postcode',
			'capacity' => 'Capacity',
			'available_monday' => 'Available Monday',
			'available_tuesday' => 'Available Tuesday',
			'available_wednesday' => 'Available Wednesday',
			'available_thursday' => 'Available Thursday',
			'available_friday' => 'Available Friday',
			'available_saturday' => 'Available Saturday',
			'available_sunday' => 'Available Sunday',
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
		$criteria->compare('registereddate',$this->registereddate,true);
		$criteria->compare('updatedate',$this->updatedate,true);
		$criteria->compare('last_time_login',$this->last_time_login,true);
		$criteria->compare('officephone',$this->officephone,true);
		$criteria->compare('cellphone',$this->cellphone,true);
		$criteria->compare('homephone',$this->homephone,true);
		$criteria->compare('profile',$this->profile,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('capacity',$this->capacity);
		$criteria->compare('available_monday',$this->available_monday);
		$criteria->compare('available_tuesday',$this->available_tuesday);
		$criteria->compare('available_wednesday',$this->available_wednesday);
		$criteria->compare('available_thursday',$this->available_thursday);
		$criteria->compare('available_friday',$this->available_friday);
		$criteria->compare('available_saturday',$this->available_saturday);
		$criteria->compare('available_sunday',$this->available_sunday);

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
}