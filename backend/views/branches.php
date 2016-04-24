<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Branches */
/* @var $form ActiveForm */
?>
<div class="branches">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'company_id') ?>
        <?= $form->field($model, 'branch_name') ?>
        <?= $form->field($model, 'branch_address') ?>
        <?= $form->field($model, 'branch_created_date') ?>
        <?= $form->field($model, 'branch_status') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- branches -->
