<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-model-index">



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            //'auth_key',
            //'password_hash',
            'email:email',
            'status' => [
                'label' => '状态',
                'attribute' => 'status',
                'value' => function($model){
                    return ($model->status == 10) ? '激活' : '非激活';
                },
                'filter' => ['0' => '非激活', '10' => '激活'],
            ],
            // 'avatar',
            'created_at:datetime',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
