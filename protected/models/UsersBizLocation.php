<?php

/**
 * This is the model class for table "users_biz_location".
 *
 * The followings are the available columns in table 'users_biz_location':
 * @property integer $id
 * @property integer $user_id
 * @property string $business_home_based
 * @property string $location
 * @property string $lease_term
 * @property string $monthly_rent
 * @property string $landlord_mortgage_co
 * @property string $landlord_mortgage_co_contact
 * @property string $landlord_mortgage_co_contact_phone
 * @property string $landlord_mortgage_co_contact_cell
 * @property string $landlord_mortgage_co_contact_email
 */
class UsersBizLocation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_biz_location';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('business_home_based, location', 'required'),
			array('landlord_mortgage_co_contact_email', 'email'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('business_home_based, location, lease_term, monthly_rent, landlord_mortgage_co, landlord_mortgage_co_contact, landlord_mortgage_co_contact_phone, landlord_mortgage_co_contact_cell, landlord_mortgage_co_contact_email', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, business_home_based, location, lease_term, monthly_rent, landlord_mortgage_co, landlord_mortgage_co_contact, landlord_mortgage_co_contact_phone, landlord_mortgage_co_contact_cell, landlord_mortgage_co_contact_email', 'safe', 'on'=>'search'),
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
			'business_home_based' => 'Business Home Based',
			'location' => 'Business Location',
			'lease_term' => 'Remaining Lease Term',
			'monthly_rent' => 'Monthly Rent',
			'landlord_mortgage_co' => 'Landlord / Mortgage Co.',
			'landlord_mortgage_co_contact' => 'Landlord / Mortgage Co. Contact',
			'landlord_mortgage_co_contact_phone' => 'Landlord / Mortgage Co. Contact Phone',
			'landlord_mortgage_co_contact_cell' => 'Landlord / Mortgage Co. Contact Cell',
			'landlord_mortgage_co_contact_email' => 'Landlord / Mortgage Co. Contact Email',
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
		$criteria->compare('business_home_based',$this->business_home_based,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('lease_term',$this->lease_term,true);
		$criteria->compare('monthly_rent',$this->monthly_rent,true);
		$criteria->compare('landlord_mortgage_co',$this->landlord_mortgage_co,true);
		$criteria->compare('landlord_mortgage_co_contact',$this->landlord_mortgage_co_contact,true);
		$criteria->compare('landlord_mortgage_co_contact_phone',$this->landlord_mortgage_co_contact_phone,true);
		$criteria->compare('landlord_mortgage_co_contact_cell',$this->landlord_mortgage_co_contact_cell,true);
		$criteria->compare('landlord_mortgage_co_contact_email',$this->landlord_mortgage_co_contact_email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersBizLocation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
