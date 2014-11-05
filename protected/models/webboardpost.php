<?php

/**
 * This is the model class for table "webboardpost".
 *
 * The followings are the available columns in table 'webboardpost':
 * @property string $id
 * @property string $topic
 * @property string $detail
 * @property string $posting_datetime
 * @property string $type
 * @property string $link_id
 * @property string $status
 * @property integer $voteNum
 * @property integer $fblike
 * @property integer $googleplus
 * @property integer $tweet
 * @property string $update_on
 * @property string $update_by
 * @property integer $category
 */
class webboardpost extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return webboardpost the static model class
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
		return 'webboardpost';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('voteNum, fblike, googleplus, tweet, category', 'numerical', 'integerOnly'=>true),
			array('type, link_id, update_by', 'length', 'max'=>10),
			array('status', 'length', 'max'=>64),
			array('topic, detail, posting_datetime, update_on', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, topic, detail, posting_datetime, type, link_id, status, voteNum, fblike, googleplus, tweet, update_on, update_by, category', 'safe', 'on'=>'search'),
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
			'topic' => 'Topic',
			'detail' => 'Detail',
			'posting_datetime' => 'Posting Datetime',
			'type' => 'Type',
			'link_id' => 'Link',
			'status' => 'Status',
			'voteNum' => 'Vote Num',
			'fblike' => 'Fblike',
			'googleplus' => 'Googleplus',
			'tweet' => 'Tweet',
			'update_on' => 'Update On',
			'update_by' => 'Update By',
			'category' => 'Category',
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
		$criteria->compare('topic',$this->topic,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('posting_datetime',$this->posting_datetime,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('link_id',$this->link_id,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('voteNum',$this->voteNum);
		$criteria->compare('fblike',$this->fblike);
		$criteria->compare('googleplus',$this->googleplus);
		$criteria->compare('tweet',$this->tweet);
		$criteria->compare('update_on',$this->update_on,true);
		$criteria->compare('update_by',$this->update_by,true);
		$criteria->compare('category',$this->category);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}