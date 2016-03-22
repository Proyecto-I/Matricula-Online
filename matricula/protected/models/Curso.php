<?php

/**
 * This is the model class for table "curso".
 *
 * The followings are the available columns in table 'curso':
 * @property string $IDCURSO
 * @property string $CODCURSO
 * @property string $DESCRIPCION
 * @property integer $CREDITOS
 * @property string $FECHAREGISTRO
 * @property string $ESTADO
 *
 * The followings are the available model relations:
 * @property Cursoprogramado[] $cursoprogramados
 */
class Curso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'curso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CREDITOS, FECHAREGISTRO', 'required'),
			array('CREDITOS', 'numerical', 'integerOnly'=>true),
			array('CODCURSO', 'length', 'max'=>8),
			array('DESCRIPCION', 'length', 'max'=>100),
			array('ESTADO', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDCURSO, CODCURSO, DESCRIPCION, CREDITOS, FECHAREGISTRO, ESTADO', 'safe', 'on'=>'search'),
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
			'cursoprogramados' => array(self::HAS_MANY, 'Cursoprogramado', 'IDCURSO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDCURSO' => 'Idcurso',
			'CODCURSO' => 'Cod. Curso',
			'DESCRIPCION' => 'Descripción',
			'CREDITOS' => 'Creditos',
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

		$criteria->compare('IDCURSO',$this->IDCURSO,true);
		$criteria->compare('CODCURSO',$this->CODCURSO,true);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);
		$criteria->compare('CREDITOS',$this->CREDITOS);
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
	 * @return Curso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	public function actionListadodinamico()
	{
		if (isset($_POST['Usuario']['IDCICLO']))
		{
			$data = Ciudad::model()->findAll(array(
		   		'condition'=>'IDCICLO='.$_POST['Usuario']['IDCICLO'],
		   		'order'=>'DESCRIPCION',
		  	));

		   	$data=CHtml::listData($data,'IDCURSO','DESCRIPCION');
		  
		  	foreach($data as $value=>$name)
		   	echo CHtml::tag('option', array('value'=>$value), CHtml::encode($name), true);
		}
	}
}
