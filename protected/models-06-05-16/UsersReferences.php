<?php

/**
 * This is the model class for table "users_references".
 *
 * The followings are the available columns in table 'users_references':
 * @property integer $id
 * @property integer $user_id
 * @property string $bank_name_branch
 * @property string $bank_name_branch_contact
 * @property string $bank_name_branch_phone
 * @property string $trade_reference_1
 * @property string $trade_reference_1_contact
 * @property string $trade_reference_1_phone
 * @property string $trade_reference_2
 * @property string $trade_reference_2_contact
 * @property string $trade_reference_2_phone
 * @property string $trade_reference_3
 * @property string $trade_reference_3_contact
 * @property string $trade_reference_3_phone
 */
class UsersReferences extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_references';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bank_name_branch, bank_name_branch_contact, bank_name_branch_phone, trade_reference_1, trade_reference_1_contact, trade_reference_1_phone, trade_reference_2, trade_reference_2_contact, trade_reference_2_phone, trade_reference_3, trade_reference_3_contact, trade_reference_3_phone', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('bank_name_branch, bank_name_branch_contact, bank_name_branch_phone, trade_reference_1, trade_reference_1_contact, trade_reference_1_phone, trade_reference_2, trade_reference_2_contact, trade_reference_2_phone, trade_reference_3, trade_reference_3_contact, trade_reference_3_phone', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, bank_name_branch, bank_name_branch_contact, bank_name_branch_phone, trade_reference_1, trade_reference_1_contact, trade_reference_1_phone, trade_reference_2, trade_reference_2_contact, trade_reference_2_phone, trade_reference_3, trade_reference_3_contact, trade_reference_3_phone', 'safe', 'on'=>'search'),
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
			'bank_name_branch' => 'Bank Name/Branch',
			'bank_name_branch_contact' => 'Contact',
			'bank_name_branch_phone' => 'Phone',
			'trade_reference_1' => 'Trade Reference 1',
			'trade_reference_1_contact' => 'Contact',
			'trade_reference_1_phone' => 'Phone',
			'trade_reference_2' => 'Trade Reference 2',
			'trade_reference_2_contact' => 'Contact',
			'trade_reference_2_phone' => 'Phone',
			'trade_reference_3' => 'Trade Reference 3',
			'trade_reference_3_contact' => 'Contact',
			'trade_reference_3_phone' => 'Phone',
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
		$criteria->compare('bank_name_branch',$this->bank_name_branch,true);
		$criteria->compare('bank_name_branch_contact',$this->bank_name_branch_contact,true);
		$criteria->compare('bank_name_branch_phone',$this->bank_name_branch_phone,true);
		$criteria->compare('trade_reference_1',$this->trade_reference_1,true);
		$criteria->compare('trade_reference_1_contact',$this->trade_reference_1_contact,true);
		$criteria->compare('trade_reference_1_phone',$this->trade_reference_1_phone,true);
		$criteria->compare('trade_reference_2',$this->trade_reference_2,true);
		$criteria->compare('trade_reference_2_contact',$this->trade_reference_2_contact,true);
		$criteria->compare('trade_reference_2_phone',$this->trade_reference_2_phone,true);
		$criteria->compare('trade_reference_3',$this->trade_reference_3,true);
		$criteria->compare('trade_reference_3_contact',$this->trade_reference_3_contact,true);
		$criteria->compare('trade_reference_3_phone',$this->trade_reference_3_phone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersReferences the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
