<?php

/**
 * This is the model class for table "item".
 *
 * The followings are the available columns in table 'item':
 * @property string $id
 * @property string $name
 * @property string $image
 * @property string $brand
 * @property string $category
 * @property string $reviewNum
 * @property double $avgVote
 * @property string $create_on
 * @property integer $resultVote
 * @property double $marketPrice
 * @property string $maker
 * @property string $makerComment
 * @property string $howtouse
 * @property string $volume
 * @property string $ingredient
 * @property string $remark
 * @property string $currentRanking
 * @property string $previousRanking
 * @property integer $facebookLike
 * @property integer $tweet
 * @property integer $googlePlus
 * @property string $create_by
 * @property string $update_on
 * @property string $update_by
 */

//Chage super class
class item extends beforeSaveActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return item the static model class
	 */
// ADD an attribute for file uploaded
        public $imgfile;
      
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
// ADD the rule for file uploaded  array('imgfile', 'file','allowEmpty' => true , 'types'=>'jpg, gif, png'),
                        array('imgfile', 'file','allowEmpty' => true , 'types'=>'jpg, gif, png'),
			array('resultVote, facebookLike, tweet, googlePlus', 'numerical', 'integerOnly'=>true),
			array('avgVote, marketPrice', 'numerical'),
			array('name, maker, volume', 'length', 'max'=>128),
			array('image', 'length', 'max'=>256),
			array('brand, category, reviewNum, create_by, update_by', 'length', 'max'=>10),
			array('create_on, makerComment, howtouse, ingredient, remark, update_on', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, image, brand, category, reviewNum, avgVote, create_on, resultVote, marketPrice, maker, makerComment, howtouse, volume, ingredient, remark, facebookLike, tweet, googlePlus, create_by, update_on, update_by', 'safe', 'on'=>'search'),
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
			'image' => 'Image',
			'brand' => 'Brand',
			'category' => 'Category',
			'reviewNum' => 'Review Num',
			'avgVote' => 'Avg Vote',
			'create_on' => 'Create On',
			'resultVote' => 'Result Vote',
			'marketPrice' => 'Market Price',
			'maker' => 'Maker',
			'makerComment' => 'Maker Comment',
			'howtouse' => 'Howtouse',
			'volume' => 'Volume',
			'ingredient' => 'Ingredient',
			'remark' => 'Remark',
			'facebookLike' => 'Facebook Like',
			'tweet' => 'Tweet',
			'googlePlus' => 'Google Plus',
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
		$criteria->compare('image',$this->image,true);
		$criteria->compare('brand',$this->brand,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('reviewNum',$this->reviewNum,true);
		$criteria->compare('avgVote',$this->avgVote);
		$criteria->compare('create_on',$this->create_on,true);
		$criteria->compare('resultVote',$this->resultVote);
		$criteria->compare('marketPrice',$this->marketPrice);
		$criteria->compare('maker',$this->maker,true);
		$criteria->compare('makerComment',$this->makerComment,true);
		$criteria->compare('howtouse',$this->howtouse,true);
		$criteria->compare('volume',$this->volume,true);
		$criteria->compare('ingredient',$this->ingredient,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('facebookLike',$this->facebookLike);
		$criteria->compare('tweet',$this->tweet);
		$criteria->compare('googlePlus',$this->googlePlus);
		$criteria->compare('create_by',$this->create_by,true);
		$criteria->compare('update_on',$this->update_on,true);
		$criteria->compare('update_by',$this->update_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function rankingByCategory($id){
                $rankingCri = new CDbCriteria();
                $rankingCri->condition = "category=:category";
                $rankingCri->params = array(":category"=>$id);
                $rankingCri->order = "avgVote DESC, resultVote DESC";
                $itemList = item::model()->findAll($rankingCri);
                if($itemList != null){
                        $order = 0;
                        foreach ($itemList as $item){
                            $item->saveAttributes(array("currentRanking"=>(++$order)));
                        }
                }
                
        }
        
}