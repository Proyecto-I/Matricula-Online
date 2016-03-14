<?php

/**
 * This is the model class for table "alumno".
 *
 * The followings are the available columns in table 'alumno':
 * @property string $IDALUMNO
 * @property string $IDCARRERA
 * @property string $IDROL
 * @property string $CODALUMNO
 * @property string $APEPATERNO
 * @property string $APEMATERNO
 * @property string $NOMBRES
 * @property string $DNI
 * @property string $DIRECCION
 * @property string $TELEFONO
 * @property string $EMAIL
 * @property string $CLAVE
 * @property string $FECHAREGISTRO
 * @property string $ESTADO
 *
 * The followings are the available model relations:
 * @property Carrera $iDCARRERA
 * @property Rol $iDROL
 * @property Matricula[] $matriculas
 */
class Alumno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDCARRERA, IDROL, CODALUMNO, APEPATERNO, APEMATERNO, NOMBRES, DNI, EMAIL, CLAVE, FECHAREGISTRO, ESTADO', 'required'),
			array('IDCARRERA, IDROL, DNI', 'length', 'max'=>10),
			array('CODALUMNO', 'length', 'max'=>8),
			array('APEPATERNO, APEMATERNO, NOMBRES, EMAIL', 'length', 'max'=>50),
			array('DIRECCION', 'length', 'max'=>100),
			array('TELEFONO, CLAVE', 'length', 'max'=>20),
			array('ESTADO', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDALUMNO, IDCARRERA, IDROL, CODALUMNO, APEPATERNO, APEMATERNO, NOMBRES, DNI, DIRECCION, TELEFONO, EMAIL, CLAVE, FECHAREGISTRO, ESTADO', 'safe', 'on'=>'search'),
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
			'iDCARRERA' => array(self::BELONGS_TO, 'Carrera', 'IDCARRERA'),
			'iDROL' => array(self::BELONGS_TO, 'Rol', 'IDROL'),
			'matriculas' => array(self::HAS_MANY, 'Matricula', 'IDALUMNO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDALUMNO' => 'Idalumno',
			'IDCARRERA' => 'Carrera',
			'IDROL' => 'Rol',
			'CODALUMNO' => 'Cod. Alumno',
			'APEPATERNO' => 'Ape. Paterno',
			'APEMATERNO' => 'Ape. Materno',
			'NOMBRES' => 'Nombres',
			'DNI' => 'DNI',
			'DIRECCION' => 'Dirección',
			'TELEFONO' => 'Teléfono',
			'EMAIL' => 'Email',
			'CLAVE' => 'Clave',
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

		$criteria->compare('IDALUMNO',$this->IDALUMNO,true);
		$criteria->compare('IDCARRERA',$this->IDCARRERA,true);
		$criteria->compare('IDROL',$this->IDROL,true);
		$criteria->compare('CODALUMNO',$this->CODALUMNO,true);
		$criteria->compare('APEPATERNO',$this->APEPATERNO,true);
		$criteria->compare('APEMATERNO',$this->APEMATERNO,true);
		$criteria->compare('NOMBRES',$this->NOMBRES,true);
		$criteria->compare('DNI',$this->DNI,true);
		$criteria->compare('DIRECCION',$this->DIRECCION,true);
		$criteria->compare('TELEFONO',$this->TELEFONO,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('CLAVE',$this->CLAVE,true);
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
	 * @return Alumno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
