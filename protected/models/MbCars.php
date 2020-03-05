<?php

Yii::import('application.models._base.BaseMbCars');

class MbCars extends BaseMbCars
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	protected function afterFind()
	{
		$parent = parent::afterFind();
		$this->ativo = $this->ativo === 0 ? 'INATIVO' : 'ATIVO';
		return $parent;
	}
}