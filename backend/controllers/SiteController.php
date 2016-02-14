<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\SqlDataProvider;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','proposal','proposal-export'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionProposal()
    {
        $dataProvider = new SqlDataProvider([
            'sql' => "SELECT * FROM proposal"
        ]);

        // var_dump($dataProvider);

        return $this->render('proposal',
            ['dataProvider' => $dataProvider]
        );
    }

    public function actionProposalExport()
    {
        // return 'Export excel';
         $dataProvider = new SqlDataProvider([
            'sql' => "SELECT * FROM proposal"
        ]);
         $filename = "Proposal-Export-" . Date('YmdGis') . '-Mahasiswa.xls';

         $model = $dataProvider->getModels();

         header('Content-type:application/vnd-ms-excel');
         header('Content-Disposition: attachement;filename='.$filename);
         echo "<h1>Proposal Mahasiswa</h1>";
         echo "<table border=1>
                 <tr>
                    <td>No</td>
                    <td>Nim</td>
                    <td>Nama Mahasiswa</td>
                    <td>Judul Proposal</td>
                    <td>Pembimbing</td>
                </tr>";
                $no = 1;
         foreach ($model as $key => $value) {      
             echo "
                 <tr>
                    <td>".$no."</td>
                    <td>". $value['nim']."</td>
                    <td>".$value['nama_mahasiswa']."</td>
                    <td>".$value['judul']."</td>
                    <td>".$value['nama_dosen']."</td>
                </tr>";
                $no++;
         }
         echo "</table>";
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
