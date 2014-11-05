<?php

/**
 * This is the model class for table "pointmanagement".
 *
 * The followings are the available columns in table 'pointmanagement':
 * @property string $id
 * @property string $user_id
 * @property integer $point
 * @property string $status
 *    0 : Pending
 *    1 : Approved
 *    2 : Canceled 

 * @property string $reason
 * @property string $written_date
 * @property string $review_id
 * @property string $update_on
 * @property string $update_by
 */
class pointmanagement extends beforeSaveActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return pointmanagement the static model class
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
		return 'pointmanagement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('user_id, point, status, reason, review_id', 'required'),
			array('point', 'numerical', 'integerOnly'=>true),
			array('user_id, review_id, update_by', 'length', 'max'=>10),
			array('status', 'length', 'max'=>512),
			array('written_date, update_on', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, point, status, reason, written_date, review_id, update_on, update_by', 'safe', 'on'=>'search'),
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
			'point' => 'Point',
			'status' => 'Status',
			'reason' => 'Reason',
			'written_date' => 'Written Date',
			'review_id' => 'Review',
			'update_on' => 'Update On',
			'update_by' => 'Update By',
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
		$criteria->compare('point',$this->point);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('reason',$this->reason,true);
		$criteria->compare('written_date',$this->written_date,true);
		$criteria->compare('review_id',$this->review_id,true);
		$criteria->compare('update_on',$this->update_on,true);
		$criteria->compare('update_by',$this->update_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}