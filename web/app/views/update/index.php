<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuketigiiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buketigiis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buketigii-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Buketigii', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name:ntext',
            'price',
            'idcat1',
            'idcat2',
            // 'idcat3',
            // 'idcat4',
            // 'idcat5',
            // 'idcat6',
            // 'idcat7',
            // 'pathim:ntext',
            // 'extim:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
