<?php

/**
 * This is the model class for table "users_personal_info".
 *
 * The followings are the available columns in table 'users_personal_info':
 * @property integer $id
 * @property integer $user_id
 * @property string $owner_1_name
 * @property string $owner_1_title
 * @property string $owner_1_dob
 * @property string $owner_1_ssn
 * @property string $owner_1_home_address
 * @property string $owner_1_home_phone
 * @property string $owner_1_cell_phone
 * @property string $owner_1_email
 * @property string $owner_1_own_or_rent
 * @property double $owner_1_payment
 * @property string $owner_1_years_there
 * @property string $owner_1_drivers_license
 * @property string $owner_1_drivers_license_state
 * @property string $owner_2_name
 * @property string $owner_2_title
 * @property string $owner_2_dOB
 * @property string $owner_2_ssn
 * @property string $owner_2_home_address
 * @property string $owner_2_home_phone
 * @property string $owner_2_cell_phone
 * @property string $owner_2_email
 * @property string $owner_2_own_or_rent
 * @property double $owner_2_payment
 * @property string $owner_2_years_there
 * @property string $owner_2_drivers_license
 * @property string $owner_2_drivers_license_State
 */
class UsersPersonalInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_personal_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('owner_1_name, owner_1_title, owner_1_dob, owner_1_ssn, owner_1_home_address, owner_1_home_phone, owner_1_cell_phone', 'required'),
			array('id, user_id', 'numerical', 'integerOnly'=>true),
			//array('owner_1_payment, owner_2_payment', 'numerical'),
			array('owner_1_email, owner_2_email', 'email'),
			array('owner_1_name, owner_1_title, owner_1_ssn, owner_1_home_address, owner_1_home_phone, owner_1_cell_phone, owner_1_email, owner_1_own_or_rent, owner_1_years_there, owner_1_drivers_license, owner_1_drivers_license_state, owner_2_name, owner_2_title, owner_2_ssn, owner_2_home_address, owner_2_home_phone, owner_2_cell_phone, owner_2_email, owner_2_own_or_rent, owner_2_years_there, owner_2_drivers_license, owner_2_drivers_license_State', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, owner_1_name, owner_1_title, owner_1_dob, owner_1_ssn, owner_1_home_address, owner_1_home_phone, owner_1_cell_phone, owner_1_email, owner_1_own_or_rent, owner_1_payment, owner_1_years_there, owner_1_drivers_license, owner_1_drivers_license_state, owner_2_name, owner_2_title, owner_2_dob, owner_2_ssn, owner_2_home_address, owner_2_home_phone, owner_2_cell_phone, owner_2_email, owner_2_own_or_rent, owner_2_payment, owner_2_years_there, owner_2_drivers_license, owner_2_drivers_license_State', 'safe', 'on'=>'search'),
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
			'owner_1_name' => 'Owner',
			'owner_1_title' => 'Owner Title',
			'owner_1_dob' => 'Owner Dob',
			'owner_1_ssn' => 'Owner Ssn',
			'owner_1_home_address' => 'Owner Home Address',
			'owner_1_home_phone' => 'Owner Home Phone',
			'owner_1_cell_phone' => 'Owner Mobile Phone',
			'owner_1_email' => 'Owner Email',
			'owner_1_own_or_rent' => 'Owner Own Or Rent',
			'owner_1_payment' => 'Owner Payment',
			'owner_1_years_there' => 'Owner Years There',
			'owner_1_drivers_license' => 'Owner Drivers License',
			'owner_1_drivers_license_state' => 'Owner Drivers License State',
			'owner_2_name' => 'Owner 2 Name',
			'owner_2_title' => 'Owner 2 Title',
			'owner_2_dob' => 'Owner 2 Dob',
			'owner_2_ssn' => 'Owner 2 Ssn',
			'owner_2_home_address' => 'Owner 2 Home Address',
			'owner_2_home_phone' => 'Owner 2 Home Phone',
			'owner_2_cell_phone' => 'Owner 2 Mobile Phone',
			'owner_2_email' => 'Owner 2 Email',
			'owner_2_own_or_rent' => 'Owner 2 Own Or Rent',
			'owner_2_payment' => 'Owner 2 Payment',
			'owner_2_years_there' => 'Owner 2 Years There',
			'owner_2_drivers_license' => 'Owner 2 Drivers License',
			'owner_2_drivers_license_State' => 'Owner 2 Drivers License State',
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
		$criteria->compare('owner_1_name',$this->owner_1_name,true);
		$criteria->compare('owner_1_title',$this->owner_1_title,true);
		$criteria->compare('owner_1_dob',$this->owner_1_dob,true);
		$criteria->compare('owner_1_ssn',$this->owner_1_ssn,true);
		$criteria->compare('owner_1_home_address',$this->owner_1_home_address,true);
		$criteria->compare('owner_1_home_phone',$this->owner_1_home_phone,true);
		$criteria->compare('owner_1_cell_phone',$this->owner_1_cell_phone,true);
		$criteria->compare('owner_1_email',$this->owner_1_email,true);
		$criteria->compare('owner_1_own_or_rent',$this->owner_1_own_or_rent,true);
		$criteria->compare('owner_1_payment',$this->owner_1_payment);
		$criteria->compare('owner_1_years_there',$this->owner_1_years_there,true);
		$criteria->compare('owner_1_drivers_license',$this->owner_1_drivers_license,true);
		$criteria->compare('owner_1_drivers_license_state',$this->owner_1_drivers_license_state,true);
		$criteria->compare('owner_2_name',$this->owner_2_name,true);
		$criteria->compare('owner_2_title',$this->owner_2_title,true);
		$criteria->compare('owner_2_dob',$this->owner_2_dob,true);
		$criteria->compare('owner_2_ssn',$this->owner_2_ssn,true);
		$criteria->compare('owner_2_home_address',$this->owner_2_home_address,true);
		$criteria->compare('owner_2_home_phone',$this->owner_2_home_phone,true);
		$criteria->compare('owner_2_cell_phone',$this->owner_2_cell_phone,true);
		$criteria->compare('owner_2_email',$this->owner_2_email,true);
		$criteria->compare('owner_2_own_or_rent',$this->owner_2_own_or_rent,true);
		$criteria->compare('owner_2_payment',$this->owner_2_payment);
		$criteria->compare('owner_2_years_there',$this->owner_2_years_there,true);
		$criteria->compare('owner_2_drivers_license',$this->owner_2_drivers_license,true);
		$criteria->compare('owner_2_drivers_license_State',$this->owner_2_drivers_license_State,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersPersonalInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
