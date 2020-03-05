<?php

/**
 * This is the model class for table "users_financials".
 *
 * The followings are the available columns in table 'users_financials':
 * @property integer $id
 * @property integer $user_id
 * @property double $gross_annual_sales
 * @property string $cash_advance
 * @property string $cash_advance_with
 * @property double $balance
 * @property string $current_credit_card_processor
 * @property double $avg_processing_volume
 * @property double $last_month_vol
 * @property double $second_month_vol
 * @property double $third_month_vol
 * @property double $fourth_month_vol
 */
class UsersFinancials extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_financials';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('gross_annual_sales, cash_advance, current_credit_card_processor, avg_processing_volume, last_month_vol, second_month_vol, third_month_vol, fourth_month_vol', 'required'),
			array('gross_annual_sales, cash_advance, current_credit_card_processor, avg_processing_volume', 'required'),
			//array('', 'numerical', 'integerOnly'=>true),
			//array('gross_annual_sales, balance, avg_processing_volume, last_month_vol, second_month_vol, third_month_vol, fourth_month_vol', 'numerical'),
			array('cash_advance, cash_advance_with, current_credit_card_processor', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, gross_annual_sales, cash_advance, cash_advance_with, balance, current_credit_card_processor, avg_processing_volume, last_month_vol, second_month_vol, third_month_vol, fourth_month_vol', 'safe'),
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
			'user_id' => 'User',
			'gross_annual_sales' => 'Gross Annual Sales',
			'cash_advance' => 'Cash Advance',
			'cash_advance_with' => 'Cash Advance With Whom?',
			'balance' => 'Cash Advance Balance',
			'current_credit_card_processor' => 'Current Credit Card Processor',
			'avg_processing_volume' => 'Avg Processing Volume',
			'last_month_vol' => 'Last Month Vol',
			'second_month_vol' => 'Second Month Vol',
			'third_month_vol' => 'Third Month Vol',
			'fourth_month_vol' => 'Fourth Month Vol',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('gross_annual_sales',$this->gross_annual_sales);
		$criteria->compare('cash_advance',$this->cash_advance,true);
		$criteria->compare('cash_advance_with',$this->cash_advance_with,true);
		$criteria->compare('balance',$this->balance);
		$criteria->compare('current_credit_card_processor',$this->current_credit_card_processor,true);
		$criteria->compare('avg_processing_volume',$this->avg_processing_volume);
		$criteria->compare('last_month_vol',$this->last_month_vol);
		$criteria->compare('second_month_vol',$this->second_month_vol);
		$criteria->compare('third_month_vol',$this->third_month_vol);
		$criteria->compare('fourth_month_vol',$this->fourth_month_vol);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersFinancials the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
