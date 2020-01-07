<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\FormNotices */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
?>

<h2>Alta noticias</h2>
<h3><?= $msg ;?></h3>


<a href="<?= Url::toRoute("site/news") ?>">Ver mis noticias</a>

<?php $form = ActiveForm::begin([
    'method' => 'post',
    'enableClientValidation' => true,
]);

?>
<div class="form-group">
    <?= $form->field($model,"tittle")->input("text") ?>
</div>
<div class="form-group">
    <?= $form->field($model, "date")->input("date") ?>
</div>
<div class="form-group">
    <?= $form->field($model, "description")->input("text") ?>
</div>

<?= Html::submitButton("send", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>
