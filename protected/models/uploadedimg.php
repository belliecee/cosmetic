<?php

/**
 * This is the model class for table "uploadedimg".
 *
 * The followings are the available columns in table 'uploadedimg':
 * @property string $id
 * @property string $name
 * @property string $imgtype
 * @property string $imgcategory
 * @property string $description
 * @property string $create_on
 * @property string $create_by
 * @property string $update_on
 * @property string $update_by
 */
class uploadedimg extends beforeSaveActiveRecord
{
    
        public $imgfile;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return uploadedimg the static model class
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
		return 'uploadedimg';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('imgfile', 'file', 'types'=>'jpg,png,gif'),
			array('name, imgtype, imgcategory', 'length', 'max'=>128),
			array('create_by, update_by', 'length', 'max'=>10),
			array('description, create_on, update_on', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, imgtype, imgcategory, description, create_on, create_by, update_on, update_by', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'imgtype' => 'Imgtype',
			'imgcategory' => 'Imgcategory',
			'description' => 'Description',
			'create_on' => 'Create On',
			'create_by' => 'Create By',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('imgtype',$this->imgtype,true);
		$criteria->compare('imgcategory',$this->imgcategory,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('create_on',$this->create_on,true);
		$criteria->compare('create_by',$this->create_by,true);
		$criteria->compare('update_on',$this->update_on,true);
		$criteria->compare('update_by',$this->update_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}