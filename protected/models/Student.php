<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property string $stuId
 * @property string $firstName
 * @property string $lastName
 * @property integer $grade
 * @property string $address
 * @property string $dob
 * @property integer $contactNo
 * @property string $regDate
 * @property integer $paidStatus
 */
class Student extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stuId, firstName, lastName, grade, address, dob, contactNo, regDate', 'required'),
			array('grade, contactNo, paidStatus', 'numerical', 'integerOnly'=>true),
			array('stuId', 'length', 'max'=>255),
			array('firstName, lastName', 'length', 'max'=>1024),
			array('address', 'length', 'max'=>2048),
			array('contactNo', 'length', 'max'=>13),
			array('regDate, dob', 'date', 'format'=>'yyyy-M-d'),
			array('contactNo', 'match', 'pattern'=>'/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('stuId, firstName, lastName, grade, address, dob, contactNo, regDate, paidStatus', 'safe', 'on'=>'search'),
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
			'stuId' => 'Student ID',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
			'grade' => 'Grade',
			'address' => 'Address',
			'dob' => 'Date of Birth',
			'contactNo' => 'Contact Number',
			'regDate' => 'Registration Date',
			'paidStatus' => 'Term Fees',
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

		$criteria->compare('stuId',$this->stuId,true);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('grade',$this->grade);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('contactNo',$this->contactNo);
		$criteria->compare('regDate',$this->regDate,true);
		$criteria->compare('paidStatus',$this->paidStatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function arrearsSearch()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('stuId',$this->stuId,true);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('grade',$this->grade);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('contactNo',$this->contactNo);
		$criteria->compare('regDate',$this->regDate,true);
		$criteria->compare('paidStatus',$this->paidStatus);
		$criteria->compare('paidStatus', 0);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Student the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
