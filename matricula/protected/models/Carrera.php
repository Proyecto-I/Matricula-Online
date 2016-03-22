<?php

/**
 * This is the model class for table "carrera".
 *
 * The followings are the available columns in table 'carrera':
 * @property string $IDCARRERA
 * @property string $CODCARRERA
 * @property string $DESCRIPCION
 * @property string $FECHAREGISTRO
 * @property string $ESTADO
 *
 * The followings are the available model relations:
 * @property Alumno[] $alumnos
 */
class Carrera extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'carrera';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DESCRIPCION, FECHAREGISTRO, ESTADO', 'required'),
			array('CODCARRERA', 'length', 'max'=>8),
			array('DESCRIPCION', 'length', 'max'=>100),
			array('ESTADO', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDCARRERA, CODCARRERA, DESCRIPCION, FECHAREGISTRO, ESTADO', 'safe', 'on'=>'search'),
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
			'alumnos' => array(self::HAS_MANY, 'Alumno', 'IDCARRERA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDCARRERA' => 'Idcarrera',
			'CODCARRERA' => 'Cod. Carrera',
			'DESCRIPCION' => 'Descripción',
			'FECHAREGISTRO' => 'Fecha Registro',
			'ESTADO' => 'Estado',
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

		$criteria->compare('IDCARRERA',$this->IDCARRERA,true);
		$criteria->compare('CODCARRERA',$this->CODCARRERA,true);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);
		$criteria->compare('FECHAREGISTRO',$this->FECHAREGISTRO,true);
		$criteria->compare('ESTADO',$this->ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Carrera the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


}
