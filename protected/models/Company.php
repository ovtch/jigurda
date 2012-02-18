<?php

/**
 * This is the model class for table "companies".
 *
 * The followings are the available columns in table 'companies':
 * @property string $id
 * @property string $sn
 * @property string $fn
 * @property integer $region
 * @property string $postal
 * @property string $inn
 * @property string $ogrn
 * @property string $okpo
 * @property string $adress
 * @property string $tel
 * @property string $fax
 * @property string $okved
 * @property string $oid
 * @property integer $hits
 * @property integer $st
 * @property string $alias
 * @property string $alias2
 * @property string $alias3
 */
class Company extends CActiveRecord
{

	public static function model($className=__CLASS__)
	{
		return parent::model($className);


}



	public function tableName()
	{
		return 'companies';
	}


//public function primaryKey()
//{
//        return 'alias';
//}
//
//    public function init()
//  {
//    $this->getMetaData()->tableSchema->primaryKey = 'alias';
//  }
//

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('region, hits, st', 'numerical', 'integerOnly'=>true),
			array('sn, alias, alias2, alias3', 'length', 'max'=>255),
			array('fn, adress', 'length', 'max'=>500),
			array('postal', 'length', 'max'=>6),
			array('inn, ogrn, okpo', 'length', 'max'=>13),
			array('tel, fax', 'length', 'max'=>30),
			array('oid', 'length', 'max'=>11),
			array('okved', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sn, fn, region, postal, inn, ogrn, okpo, adress, tel, fax, okved, oid, hits, st, alias, alias2, alias3', 'safe', 'on'=>'search'),
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
			'sn' => 'Компания',
			'fn' => 'Название компании',
			'region' => 'Регион',
			'postal' => 'Почтовый индекс',
			'inn' => 'ИНН',
			'ogrn' => 'ОГРН',
			'okpo' => 'ОКПО',
			'adress' => 'Адрес',
			'tel' => 'Телефон',
			'fax' => 'Факс',
			'okved' => 'ОКВЭД',
			'oid' => 'Oid',
			'hits' => 'Hits',
			'st' => 'St',
			'alias' => 'Alias',
			'alias2' => 'Alias2',
			'alias3' => 'Alias3',
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
		$criteria->compare('sn',$this->sn,true);
		$criteria->compare('fn',$this->fn,true);
		$criteria->compare('region',$this->region);
		$criteria->compare('postal',$this->postal,true);
		$criteria->compare('inn',$this->inn,true);
		$criteria->compare('ogrn',$this->ogrn,true);
		$criteria->compare('okpo',$this->okpo,true);
		$criteria->compare('adress',$this->adress,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('okved',$this->okved,true);
		$criteria->compare('oid',$this->oid,true);
		$criteria->compare('hits',$this->hits);
		$criteria->compare('st',$this->st);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('alias2',$this->alias2,true);
		$criteria->compare('alias3',$this->alias3,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}