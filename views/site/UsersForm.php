<?php
/**
 * Created by PhpStorm.
 * User: sutiporn
 * Date: 6/14/2018 AD
 * Time: 10:10 PM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php
if(Yii::$app->session->hasFlash('success'))
    {
    echo Yii::$app->session->getFlash('success');
}

?>
<?php $form =ActiveForm::begin(); ?>
<?= $form->field($model,'name'); ?>
<?= $form->field($model,'email'); ?>
<?= Html::submitButton('submit',['class'=>'btn btn-success']); ?>
<?php ActiveForm::end() ?>

