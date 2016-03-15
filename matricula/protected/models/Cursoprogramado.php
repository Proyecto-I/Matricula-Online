<?php

/**
 * This is the model class for table "cursoprogramado".
 *
 * The followings are the available columns in table 'cursoprogramado':
 * @property string $IDCURSO_PROG
 * @property string $IDCURSO
 * @property string $IDCICLO
 * @property string $IDPROFESOR
 * @property string $VACANTES
 * @property string $MATRICULADOS
 * @property string $HORARIO
 * @property string $FECHAREGISTRO
 * @property string $ESTADO
 *
 * The followings are the available model relations:
 * @property Ciclo $iDCICLO
 * @property Curso $iDCURSO
 * @property Profesor $iDPROFESOR
 * @property Matricula[] $matriculas
 */
class Cursoprogramado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cursoprogramado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDCURSO, IDCICLO, IDPROFESOR, VACANTES, MATRICULADOS, HORARIO, FECHAREGISTRO, ESTADO', 'required'),
			array('IDCURSO, IDCICLO, IDPROFESOR', 'length', 'max'=>10),
			array('VACANTES, MATRICULADOS', 'length', 'max'=>3),
			array('HORARIO', 'length', 'max'=>100),
			array('ESTADO', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDCURSO_PROG, IDCURSO, IDCICLO, IDPROFESOR, VACANTES, MATRICULADOS, HORARIO, FECHAREGISTRO, ESTADO', 'safe', 'on'=>'search'),
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
			'iDCICLO' => array(self::BELONGS_TO, 'Ciclo', 'IDCICLO'),
			'iDCURSO' => array(self::BELONGS_TO, 'Curso', 'IDCURSO'),
			'iDPROFESOR' => array(self::BELONGS_TO, 'Profesor', 'IDPROFESOR'),
			'matriculas' => array(self::HAS_MANY, 'Matricula', 'IDCURSO_PROG'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDCURSO_PROG' => 'Idcurso Prog',
			'IDCURSO' => 'Curso',
			'IDCICLO' => 'Ciclo',
			'IDPROFESOR' => 'Profesor',
			'VACANTES' => 'Vacantes',
			'MATRICULADOS' => 'Matriculados',
			'HORARIO' => 'Horario',
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

		$criteria->compare('IDCURSO_PROG',$this->IDCURSO_PROG,true);
		$criteria->compare('IDCURSO',$this->IDCURSO,true);
		$criteria->compare('IDCICLO',$this->IDCICLO,true);
		$criteria->compare('IDPROFESOR',$this->IDPROFESOR,true);
		$criteria->compare('VACANTES',$this->VACANTES,true);
		$criteria->compare('MATRICULADOS',$this->MATRICULADOS,true);
		$criteria->compare('HORARIO',$this->HORARIO,true);
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
	 * @return Cursoprogramado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
