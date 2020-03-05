<?php

/**
 * This is the model class for table "users_business_info".
 *
 * The followings are the available columns in table 'users_business_info':
 * @property integer $id
 * @property integer $user_id
 * @property string $dba_name
 * @property string $legal_name
 * @property string $type_of_business
 * @property string $tax_id
 * @property string $business
 * @property string $business_address
 * @property string $full_billing_address
 * @property string $phone_at_location
 * @property string $best_phone
 * @property string $fax
 * @property string $business_email
 * @property string $website
 */
class UsersBusinessInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_business_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dba_name, legal_name, type_of_business, tax_id, business, business_address, phone_at_location', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('business_email', 'email'),
			array('dba_name, legal_name, type_of_business, tax_id, business, phone_at_location, best_phone, fax, business_email, website', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, dba_name, legal_name, type_of_business, tax_id, business, business_address, full_billing_address, phone_at_location, best_phone, fax, business_email, website', 'safe', 'on'=>'search'),
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
			'dba_name' => 'Dba Name',
			'legal_name' => 'Legal Name',
			'type_of_business' => 'Type Of Business',
			'tax_id' => 'Tax',
			'business' => 'Business',
			'business_address' => 'Business Address',
			'full_billing_address' => 'Billing Address',
			'phone_at_location' => 'Phone At Location',
			'best_phone' => 'Best Phone',
			'fax' => 'Fax',
			'business_email' => 'Business Email',
			'website' => 'Website',
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
		$criteria->compare('dba_name',$this->dba_name,true);
		$criteria->compare('legal_name',$this->legal_name,true);
		$criteria->compare('type_of_business',$this->type_of_business,true);
		$criteria->compare('tax_id',$this->tax_id,true);
		$criteria->compare('business',$this->business,true);
		$criteria->compare('business_address',$this->business_address,true);
		$criteria->compare('full_billing_address',$this->full_billing_address,true);
		$criteria->compare('phone_at_location',$this->phone_at_location,true);
		$criteria->compare('best_phone',$this->best_phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('business_email',$this->business_email,true);
		$criteria->compare('website',$this->website,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersBusinessInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
