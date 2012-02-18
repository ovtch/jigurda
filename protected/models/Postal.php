<?php

/**
 * This is the model class for table "postal".
 *
 * The followings are the available columns in table 'postal':
 * @property string $id
 * @property string $okr
 * @property string $obl
 * @property string $reg
 * @property string $city1
 * @property string $city2
 */
class Postal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Postal the static model class
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
		return 'postal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('okr, obl, reg, city1, city2', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, okr, obl, reg, city1, city2', 'safe', 'on'=>'search'),
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
			'okr' => 'Okr',
			'obl' => 'Obl',
			'reg' => 'Reg',
			'city1' => 'City1',
			'city2' => 'City2',
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
		$criteria->compare('okr',$this->okr,true);
		$criteria->compare('obl',$this->obl,true);
		$criteria->compare('reg',$this->reg,true);
		$criteria->compare('city1',$this->city1,true);
		$criteria->compare('city2',$this->city2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}