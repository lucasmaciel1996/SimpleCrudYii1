<?php

class MbCarsController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'MbCars'),
		));
	}

	public function actionCreate() {
		$model = new MbCars;


		if (isset($_POST['MbCars'])) {
			$model->setAttributes($_POST['MbCars']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'MbCars');


		if (isset($_POST['MbCars'])) {
			$model->setAttributes($_POST['MbCars']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'MbCars')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('MbCars');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new MbCars('search');
		$model->unsetAttributes();

		if (isset($_GET['MbCars']))
			$model->setAttributes($_GET['MbCars']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}