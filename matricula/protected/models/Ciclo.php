<?php

/**
 * This is the model class for table "ciclo".
 *
 * The followings are the available columns in table 'ciclo':
 * @property string $IDCICLO
 * @property string $CODCICLO
 * @property string $DESCRIPCION
 * @property string $FEC_INICIO
 * @property string $FEC_TERMINO
 * @property string $FECHAREGISTRO
 * @property string $ESTADO
 *
 * The followings are the available model relations:
 * @property Cursoprogramado[] $cursoprogramados
 */
class Ciclo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ciclo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CODCICLO, DESCRIPCION, FECHAREGISTRO, ESTADO', 'required'),
			array('CODCICLO', 'length', 'max'=>8),
			array('DESCRIPCION', 'length', 'max'=>10),
			array('ESTADO', 'length', 'max'=>1),
			array('FEC_INICIO, FEC_TERMINO', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDCICLO, CODCICLO, DESCRIPCION, FEC_INICIO, FEC_TERMINO, FECHAREGISTRO, ESTADO', 'safe', 'on'=>'search'),
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
			'cursoprogramados' => array(self::HAS_MANY, 'Cursoprogramado', 'IDCICLO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDCICLO' => 'Idciclo',
			'CODCICLO' => 'Codciclo',
			'DESCRIPCION' => 'Descripcion',
			'FEC_INICIO' => 'Fec Inicio',
			'FEC_TERMINO' => 'Fec Termino',
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

		$criteria->compare('IDCICLO',$this->IDCICLO,true);
		$criteria->compare('CODCICLO',$this->CODCICLO,true);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);
		$criteria->compare('FEC_INICIO',$this->FEC_INICIO,true);
		$criteria->compare('FEC_TERMINO',$this->FEC_TERMINO,true);
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
	 * @return Ciclo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
