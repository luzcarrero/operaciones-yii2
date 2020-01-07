<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

?>

<?php $f = ActiveForm::begin([
    "method" => "get",
    "action" => Url::toRoute("site/news"),
    "enableClientValidation" => true,
]);
?>

<div class="form-group">
    <?= $f->field($form, "buscar")->input("search") ?>
</div>

<?= Html::submitButton("Buscar", ["class" => "btn btn-primary"]) ?>

<?php $f->end() ?>

<h3><?= $search ?></h3>


<h3><?= $search ?></h3>
<a href="<?= Url::toRoute("site/notices") ?>">Nueva Noticia</a>
<h3>News</h3>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#ID</th>
        <th scope="col">Tittle</th>
        <th scope="col">Date</th>
        <th scope="col">Description</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($model as $row): ?>
    <tr>
        <th scope="row">1</th>
        <td><?= $row->id?></td>
        <td><?= $row->tittle ?></td>
        <td><?= $row->date ?></td>
        <td><?= $row->description ?></td>
        <td><a href="<?= Url::toRoute("site/notices") ?>">Editar</a></td>
        <td><a href="<?= Url::toRoute("site/notices") ?>">Eliminar</a></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>


