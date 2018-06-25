<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Supliar;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SupliarController implements the CRUD actions for Supliar model.
 */
class SupliarController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Supliar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Supliar::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Supliar model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Supliar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Supliar();

        if ($model->load(Yii::$app->request->post())) {

            $logo = UploadedFile::getInstance($model, 'logo');
            $time = date('YmdHis');
            if($logo){
                $model->logo = 'images/supliars/' . $time . '.' . $logo->extension;
            }
            if($model->save()) {
                if ($logo) {
                    $dir = \Yii::getAlias('@app');
                    $logo->saveAs($dir . '/web/images/supliars/' . $time . '.' . $logo->extension);
                }

                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Supliar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $logo = UploadedFile::getInstance($model, 'logo');
            $time = date('YmdHis');
            if($logo){
                $oldLogo = $model->logo;
                $model->logo = 'images/supliars/' . $time . '.' . $logo->extension;
            }else{
                $model->logo = Supliar::find()->where(['id' => $id])->one()->logo;
            }

            if($model->save()) {
                if ($logo) {
                    $dir = \Yii::getAlias('@app');
                    if(is_file($dir.'/web/'.$oldLogo))
                        unlink($dir.'/web/'.$oldLogo);
                    $logo->saveAs($dir . '/web/images/supliars/' . $time . '.' . $logo->extension);
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Supliar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supliar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Supliar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Supliar::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
