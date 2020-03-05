<?php

/**
 * This is the model class for table "category".
 *
 * The followings are the available columns in table 'category':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $meta_id
 * @property string $is_active
 * @property string $is_deleted
 * @property integer $sort_order
 * @property integer $created
 * @property integer $modified
 *
 * The followings are the available model relations:
 * @property MetaData $meta
 */
class Pages extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $slug;
	public function tableName()
	{
		return 'pages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title,description', 'required'),
			array('title', 'unique'),
			array('meta_id, created, modified', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('is_active', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, meta_id, meta.slug, is_active,created, modified', 'safe', 'on'=>'search'),
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
			'meta' => array(self::BELONGS_TO, 'MetaData', 'meta_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'description' => 'Description',
			'meta_id' => 'Meta',
			'is_active' => 'Is Active',			
			'created' => 'Created',
			'modified' => 'Modified',
		);
	}
	
	
	public function beforeSave(){
		if($this->isNewRecord){
			$this->created = time();
			$this->is_active = '1';
		}
		$this->modified = time();
		return true;
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		//$criteria->compare('meta_id',$this->meta_id);
		$criteria->compare('is_active',$this->is_active,true);		
		$criteria->compare('created',$this->created);
		$criteria->compare('modified',$this->modified);
		//$criteria->with = array('meta');
		if(!intval($this->meta_id) && is_string($this->meta_id) && strlen($this->meta_id) > 0) {
			$criteria->with[] = 'meta';
			$criteria->addSearchCondition('meta.slug',$this->meta_id,true);
		} else {
			$criteria->compare('meta_id',$this->meta_id);		
		}
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>100, // or another reasonable high value...
			),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
}
