<?php

/**
 * This is the model class for table "webboardcomment".
 *
 * The followings are the available columns in table 'webboardcomment':
 * @property string $id
 * @property string $detail
 * @property string $comment_datetime
 * @property string $type
 * @property string $link_id
 * @property string $post_id
 * @property integer $voteNum
 * @property string $status
 * @property integer $fblike
 * @property integer $googleplus
 * @property integer $tweet
 * @property string $update_on
 * @property string $update_by
 */
class webboardcomment extends beforeSaveActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return webboardcomment the static model class
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
		return 'webboardcomment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('voteNum, fblike, googleplus, tweet', 'numerical', 'integerOnly'=>true),
			array('type, link_id, post_id, update_by', 'length', 'max'=>10),
			array('status', 'length', 'max'=>64),
			array('detail, comment_datetime, update_on', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, detail, comment_datetime, type, link_id, post_id, voteNum, status, fblike, googleplus, tweet, update_on, update_by', 'safe', 'on'=>'search'),
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
			'detail' => 'Detail',
			'comment_datetime' => 'Comment Datetime',
			'type' => 'Type',
			'link_id' => 'Link',
			'post_id' => 'Post',
			'voteNum' => 'Vote Num',
			'status' => 'Status',
			'fblike' => 'Fblike',
			'googleplus' => 'Googleplus',
			'tweet' => 'Tweet',
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
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('comment_datetime',$this->comment_datetime,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('link_id',$this->link_id,true);
		$criteria->compare('post_id',$this->post_id,true);
		$criteria->compare('voteNum',$this->voteNum);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('fblike',$this->fblike);
		$criteria->compare('googleplus',$this->googleplus);
		$criteria->compare('tweet',$this->tweet);
		$criteria->compare('update_on',$this->update_on,true);
		$criteria->compare('update_by',$this->update_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}