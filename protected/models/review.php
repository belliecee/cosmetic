<?php

/**
 * This is the model class for table "review".
 *
 * The followings are the available columns in table 'review':
 * @property string $id
 * @property string $item_id
 * @property integer $user_id
 * @property string $comment
 * @property integer $vote
  * @property integer $status
 *    0 : Not yet to be changed before
 *    1 : Pending : Voted by Admin
 *    2 : Pending : Voted by 20 users
 *    3 : Already approved
 *    4 : Canceled
 * @property string $buyfrom
 * @property integer $reviewvote
 * @property string $result
 * @property integer $fblike
 * @property integer $googleplus
 * @property string $update_on
 * @property string $update_by
 * @property string $create_on
 * @property string $create_by
 */
class review extends beforeSaveActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return review the static model class
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
		return 'review';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
			array('user_id, vote, status, reviewvote, fblike, googleplus', 'numerical', 'integerOnly'=>true),
			array('item_id, update_by', 'length', 'max'=>10),
			array('buyfrom, result', 'length', 'max'=>256),
			array('create_by', 'length', 'max'=>11),
			array('comment, update_on, create_on', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, item_id, user_id, comment, vote, status, buyfrom, reviewvote, result, fblike, googleplus, update_on, update_by, create_on, create_by', 'safe', 'on'=>'search'),
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
			'item_id' => 'Item',
			'user_id' => 'User',
			'comment' => 'Comment',
			'vote' => 'Vote',
			'status' => 'Status',
			'buyfrom' => 'Buyfrom',
			'reviewvote' => 'Reviewvote',
			'result' => 'Result',
			'fblike' => 'Fblike',
			'googleplus' => 'Googleplus',
			'update_on' => 'Update On',
			'update_by' => 'Update By',
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
		$criteria->compare('item_id',$this->item_id,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('vote',$this->vote);
		$criteria->compare('status',$this->status);
		$criteria->compare('buyfrom',$this->buyfrom,true);
		$criteria->compare('reviewvote',$this->reviewvote);
		$criteria->compare('result',$this->result,true);
		$criteria->compare('fblike',$this->fblike);
		$criteria->compare('googleplus',$this->googleplus);
		$criteria->compare('update_on',$this->update_on,true);
		$criteria->compare('update_by',$this->update_by,true);
		$criteria->compare('create_on',$this->create_on,true);
		$criteria->compare('create_by',$this->create_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}