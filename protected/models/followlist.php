<?php

/**
 * This is the model class for table "followlist".
 *
 * The followings are the available columns in table 'followlist':
 * @property string $id
 * @property string $user_id
 * @property string $other_id
 * @property string $remark
 * @property string $create_on
 * @property string $create_by
 */
class followlist extends beforeSaveActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return followlist the static model class
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
		return 'followlist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
			array('user_id, other_id, create_by', 'length', 'max'=>10),
			array('remark, create_on', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, other_id, remark, create_on, create_by', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'other_id' => 'Other',
			'remark' => 'Remark',
			'create_on' => 'Create On',
			'create_by' => 'Create By',
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
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('other_id',$this->other_id,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('create_on',$this->create_on,true);
		$criteria->compare('create_by',$this->create_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}