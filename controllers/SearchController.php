<?php 
namespace app\controllers;
use Yii;
use yii\web\Controller;

class SearchController extends Controller
{
 // Of course, this function should be in the console part of the application!
    public function actionIndexing()
    {
       /** @var \himiklab\yii2\search\Search $search */
        $search = Yii::$app->search;
        $search->index();
    }
}