<?php

/**
 * This is the model class for table "mb_cars".
 *
 * The followings are the available columns in table 'mb_cars':
 * @property integer $id
 * @property string $placa
 * @property string $apelido
 * @property string $marca
 * @property string $modelo
 * @property integer $ativo
 * @property integer $alterador
 * @property string $data_criacao
 * @property string $data_alteracao
 */
class MbCars extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mb_cars';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('placa', 'required'),
			array('ativo, alterador', 'numerical', 'integerOnly'=>true),
			array('placa, apelido', 'length', 'max'=>20),
			array('marca, modelo', 'length', 'max'=>40),
			array('data_criacao, data_alteracao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, placa, apelido, marca, modelo, ativo, alterador, data_criacao, data_alteracao', 'safe', 'on'=>'search'),
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
			'placa' => 'Placa',
			'apelido' => 'Apelido',
			'marca' => 'Marca',
			'modelo' => 'Modelo',
			'ativo' => 'Ativo',
			'alterador' => 'Alterador',
			'data_criacao' => 'Data Criacao',
			'data_alteracao' => 'Data Alteracao',
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
		$criteria->compare('placa',$this->placa,true);
		$criteria->compare('apelido',$this->apelido,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('ativo',$this->ativo);
		$criteria->compare('alterador',$this->alterador);
		$criteria->compare('data_criacao',$this->data_criacao,true);
		$criteria->compare('data_alteracao',$this->data_alteracao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MbCars the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
