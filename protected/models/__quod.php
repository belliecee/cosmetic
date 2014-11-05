<?php

/**
 * This is the model class for table "sky1_quod".
 *
 * The followings are the available columns in table 'sky1_quod':
 * @property string $id
 * @property string $quoteNo
 * @property string $enquiryDate
 * @property string $lineNo
 * @property string $quoH_id
 * @property string $product_id
 * @property string $qty
 * @property double $unitPrice
 * @property string $lineTotal
 * @property string $remark
 */
class quod extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return quod the static model class
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
		return 'sky1_quod';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
			array('unitPrice', 'numerical'),
			array('quoteNo', 'length', 'max'=>64),
			array('lineNo, quoH_id, product_id, qty, lineTotal', 'length', 'max'=>10),
			array('enquiryDate, remark', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, quoteNo, enquiryDate, lineNo, quoH_id, product_id, qty, unitPrice, lineTotal, remark', 'safe', 'on'=>'search'),
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
			'quoteNo' => 'Quote No',
			'enquiryDate' => 'Enquiry Date',
			'lineNo' => 'Line No',
			'quoH_id' => 'Quo H',
			'product_id' => 'Product',
			'qty' => 'Qty',
			'unitPrice' => 'Unit Price',
			'lineTotal' => 'Line Total',
			'remark' => 'Remark',
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
		$criteria->compare('quoteNo',$this->quoteNo,true);
		$criteria->compare('enquiryDate',$this->enquiryDate,true);
		$criteria->compare('lineNo',$this->lineNo,true);
		$criteria->compare('quoH_id',$this->quoH_id,true);
		$criteria->compare('product_id',$this->product_id,true);
		$criteria->compare('qty',$this->qty,true);
		$criteria->compare('unitPrice',$this->unitPrice);
		$criteria->compare('lineTotal',$this->lineTotal,true);
		$criteria->compare('remark',$this->remark,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchInThisQuoh($quoh_id)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('quoteNo',$this->quoteNo,true);
		$criteria->compare('enquiryDate',$this->enquiryDate,true);
		$criteria->compare('lineNo',$this->lineNo,true);
		$criteria->compare('quoH_id',$quoh_id,true);
		$criteria->compare('product_id',$this->product_id,true);
		$criteria->compare('qty',$this->qty,true);
		$criteria->compare('unitPrice',$this->unitPrice);
		$criteria->compare('lineTotal',$this->lineTotal,true);
		$criteria->compare('remark',$this->remark,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}


