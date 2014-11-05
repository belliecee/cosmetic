<?php

/**
 * This is the model class for table "sky1_usergroup".
 *
 * The followings are the available columns in table 'sky1_usergroup':
 * @property string $id
 * @property string $name
 * @property integer $enquiry_create
 * @property integer $enquiry_read
 * @property integer $enquiry_update
 * @property integer $enquiry_delete
 * @property integer $vendorprocess_create
 * @property integer $vendorprocess_read
 * @property integer $vendorprocess_update
 * @property integer $vendorprocess_delete
 * @property integer $quoh_create
 * @property integer $quoh_read
 * @property integer $quoh_update
 * @property integer $quoh_delete
 * @property integer $poh_create
 * @property integer $poh_read
 * @property integer $poh_update
 * @property integer $poh_delete
 * @property integer $deposit_create
 * @property integer $deposit_read
 * @property integer $deposit_update
 * @property integer $deposit_delete
 * @property integer $potovendor_create
 * @property integer $potovendor_read
 * @property integer $potovendor_update
 * @property integer $potovendor_delete
 * @property integer $delivery_create
 * @property integer $delivery_read
 * @property integer $delivery_update
 * @property integer $delivery_delete
 * @property integer $payment_create
 * @property integer $payment_read
 * @property integer $payment_update
 * @property integer $payment_delete
 */
class usergroup extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return usergroup the static model class
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
		return 'sky1_usergroup';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('name', 'unique'),
			array('enquiry_create, enquiry_read, enquiry_update, enquiry_delete, vendorprocess_create, vendorprocess_read, vendorprocess_update, vendorprocess_delete, quoh_create, quoh_read, quoh_update, quoh_delete, poh_create, poh_read, poh_update, poh_delete, deposit_create, deposit_read, deposit_update, deposit_delete, potovendor_create, potovendor_read, potovendor_update, potovendor_delete, delivery_create, delivery_read, delivery_update, delivery_delete, payment_create, payment_read, payment_update, payment_delete', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, enquiry_create, enquiry_read, enquiry_update, enquiry_delete, vendorprocess_create, vendorprocess_read, vendorprocess_update, vendorprocess_delete, quoh_create, quoh_read, quoh_update, quoh_delete, poh_create, poh_read, poh_update, poh_delete, deposit_create, deposit_read, deposit_update, deposit_delete, potovendor_create, potovendor_read, potovendor_update, potovendor_delete, delivery_create, delivery_read, delivery_update, delivery_delete, payment_create, payment_read, payment_update, payment_delete', 'safe', 'on'=>'search'),
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
			'enquiry_create' => 'Enquiry Create',
			'enquiry_read' => 'Enquiry Read',
			'enquiry_update' => 'Enquiry Update',
			'enquiry_delete' => 'Enquiry Delete',
			'vendorprocess_create' => 'Vendorprocess Create',
			'vendorprocess_read' => 'Vendorprocess Read',
			'vendorprocess_update' => 'Vendorprocess Update',
			'vendorprocess_delete' => 'Vendorprocess Delete',
			'quoh_create' => 'Quoh Create',
			'quoh_read' => 'Quoh Read',
			'quoh_update' => 'Quoh Update',
			'quoh_delete' => 'Quoh Delete',
			'poh_create' => 'Poh Create',
			'poh_read' => 'Poh Read',
			'poh_update' => 'Poh Update',
			'poh_delete' => 'Poh Delete',
			'deposit_create' => 'Deposit Create',
			'deposit_read' => 'Deposit Read',
			'deposit_update' => 'Deposit Update',
			'deposit_delete' => 'Deposit Delete',
			'potovendor_create' => 'Potovendor Create',
			'potovendor_read' => 'Potovendor Read',
			'potovendor_update' => 'Potovendor Update',
			'potovendor_delete' => 'Potovendor Delete',
			'delivery_create' => 'Delivery Create',
			'delivery_read' => 'Delivery Read',
			'delivery_update' => 'Delivery Update',
			'delivery_delete' => 'Delivery Delete',
			'payment_create' => 'Payment Create',
			'payment_read' => 'Payment Read',
			'payment_update' => 'Payment Update',
			'payment_delete' => 'Payment Delete',
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
		$criteria->compare('enquiry_create',$this->enquiry_create);
		$criteria->compare('enquiry_read',$this->enquiry_read);
		$criteria->compare('enquiry_update',$this->enquiry_update);
		$criteria->compare('enquiry_delete',$this->enquiry_delete);
		$criteria->compare('vendorprocess_create',$this->vendorprocess_create);
		$criteria->compare('vendorprocess_read',$this->vendorprocess_read);
		$criteria->compare('vendorprocess_update',$this->vendorprocess_update);
		$criteria->compare('vendorprocess_delete',$this->vendorprocess_delete);
		$criteria->compare('quoh_create',$this->quoh_create);
		$criteria->compare('quoh_read',$this->quoh_read);
		$criteria->compare('quoh_update',$this->quoh_update);
		$criteria->compare('quoh_delete',$this->quoh_delete);
		$criteria->compare('poh_create',$this->poh_create);
		$criteria->compare('poh_read',$this->poh_read);
		$criteria->compare('poh_update',$this->poh_update);
		$criteria->compare('poh_delete',$this->poh_delete);
		$criteria->compare('deposit_create',$this->deposit_create);
		$criteria->compare('deposit_read',$this->deposit_read);
		$criteria->compare('deposit_update',$this->deposit_update);
		$criteria->compare('deposit_delete',$this->deposit_delete);
		$criteria->compare('potovendor_create',$this->potovendor_create);
		$criteria->compare('potovendor_read',$this->potovendor_read);
		$criteria->compare('potovendor_update',$this->potovendor_update);
		$criteria->compare('potovendor_delete',$this->potovendor_delete);
		$criteria->compare('delivery_create',$this->delivery_create);
		$criteria->compare('delivery_read',$this->delivery_read);
		$criteria->compare('delivery_update',$this->delivery_update);
		$criteria->compare('delivery_delete',$this->delivery_delete);
		$criteria->compare('payment_create',$this->payment_create);
		$criteria->compare('payment_read',$this->payment_read);
		$criteria->compare('payment_update',$this->payment_update);
		$criteria->compare('payment_delete',$this->payment_delete);
                
              
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}