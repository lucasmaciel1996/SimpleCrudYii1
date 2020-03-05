<?php

class MbCompaniesController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'MbCompanies'),
		));
	}

	public function actionCreate() {
		$model = new MbCompanies;


		if (isset($_POST['MbCompanies'])) {
			$model->setAttributes($_POST['MbCompanies']);

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
		$model = $this->loadModel($id, 'MbCompanies');


		if (isset($_POST['MbCompanies'])) {
			$model->setAttributes($_POST['MbCompanies']);

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
			$this->loadModel($id, 'MbCompanies')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('MbCompanies');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new MbCompanies('search');
		$model->unsetAttributes();

		if (isset($_GET['MbCompanies']))
			$model->setAttributes($_GET['MbCompanies']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}