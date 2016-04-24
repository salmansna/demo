<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Companies */
/* @var $form ActiveForm */
?>
<div class="companies">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'company_name') ?>
        <?= $form->field($model, 'company_email') ?>
        <?= $form->field($model, 'company_address') ?>
        <?= $form->field($model, 'company_created_date') ?>
        <?= $form->field($model, 'company_status') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- companies -->
