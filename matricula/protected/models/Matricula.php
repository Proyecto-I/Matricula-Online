<?php

/**
 * This is the model class for table "matricula".
 *
 * The followings are the available columns in table 'matricula':
 * @property string $IDMATRICULA
 * @property string $CODMATRICULA
 * @property string $IDCURSO_PROG
 * @property string $IDALUMNO
 * @property string $FEC_MATRICULA
 * @property string $FECHAREGISTRO
 * @property string $ESTADO
 *
 * The followings are the available model relations:
 * @property Alumno $iDALUMNO
 * @property Cursoprogramado $iDCURSOPROG
 */
class Matricula extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'matricula';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDCURSO_PROG, IDALUMNO, FEC_MATRICULA, FECHAREGISTRO, ESTADO', 'required'),
			array('CODMATRICULA', 'length', 'max'=>8),
			array('IDCURSO_PROG, IDALUMNO', 'length', 'max'=>10),
			array('ESTADO', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDMATRICULA, CODMATRICULA, IDCURSO_PROG, IDALUMNO, FEC_MATRICULA, FECHAREGISTRO, ESTADO', 'safe', 'on'=>'search'),
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
			'iDALUMNO' => array(self::BELONGS_TO, 'Alumno', 'IDALUMNO'),
			'iDCURSOPROG' => array(self::BELONGS_TO, 'Cursoprogramado', 'IDCURSO_PROG'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDMATRICULA' => 'Idmatricula',
			'CODMATRICULA' => 'Codmatricula',
			'IDCURSO_PROG' => 'Idcurso Prog',
			'IDALUMNO' => 'Idalumno',
			'FEC_MATRICULA' => 'Fec Matricula',
			'FECHAREGISTRO' => 'Fecharegistro',
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

		$criteria->compare('IDMATRICULA',$this->IDMATRICULA,true);
		$criteria->compare('CODMATRICULA',$this->CODMATRICULA,true);
		$criteria->compare('IDCURSO_PROG',$this->IDCURSO_PROG,true);
		$criteria->compare('IDALUMNO',$this->IDALUMNO,true);
		$criteria->compare('FEC_MATRICULA',$this->FEC_MATRICULA,true);
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
	 * @return Matricula the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	/* COMBO DEPENDIENTE */
	public function getMenuProg()
	{
		return CHtml::listData(Cursoprogramado::model()->findAll(), 'IDCURSO_PROG', 'IDCURSO_PROG');
	}

	public function getMenuProg()
	{
		return CHtml::listData(Cursoprogramado::model()->findAll(), 'IDCURSO_PROG', 'IDCURSO_PROG');
	}

}
