<?php

/**
 * This is the model class for table "sky1_pod".
 *
 * The followings are the available columns in table 'sky1_pod':
 * @property string $id
 * @property string $PONo
 * @property string $poh_id
 * @property string $lineNo
 * @property string $vendor_id
 * @property string $product_id
 * @property string $qty
 * @property double $unitPrice
 * @property string $lineTotal
 * @property string $remark
 * @property string $receivedQty
 * @property string $deliveredQty
 * @property double $balance
 */
class pod extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return pod the static model class
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
		return 'sky1_pod';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		
			array('unitPrice, balance', 'numerical'),
			array('PONo', 'length', 'max'=>64),
			array('poh_id, lineNo, vendor_id, product_id, qty, lineTotal, receivedQty, deliveredQty', 'length', 'max'=>10),
			array('remark', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, PONo, poh_id, lineNo, vendor_id, product_id, qty, unitPrice, lineTotal, remark, receivedQty, deliveredQty, balance', 'safe', 'on'=>'search'),
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
			'PONo' => 'Pono',
			'poh_id' => 'Poh',
			'lineNo' => 'Line No',
			'vendor_id' => 'Vendor',
			'product_id' => 'Product',
			'qty' => 'Qty',
			'unitPrice' => 'Unit Price',
			'lineTotal' => 'Line Total',
			'remark' => 'Remark',
			'receivedQty' => 'Received Qty',
			'deliveredQty' => 'Delivered Qty',
			'balance' => 'Balance',
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
		$criteria->compare('PONo',$this->PONo,true);
		$criteria->compare('poh_id',$this->poh_id,true);
		$criteria->compare('lineNo',$this->lineNo,true);
		$criteria->compare('vendor_id',$this->vendor_id,true);
		$criteria->compare('product_id',$this->product_id,true);
		$criteria->compare('qty',$this->qty,true);
		$criteria->compare('unitPrice',$this->unitPrice);
		$criteria->compare('lineTotal',$this->lineTotal,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('receivedQty',$this->receivedQty,true);
		$criteria->compare('deliveredQty',$this->deliveredQty,true);
		$criteria->compare('balance',$this->balance);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}