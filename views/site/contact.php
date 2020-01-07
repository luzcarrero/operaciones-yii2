<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="main container">

            <h2 STYLE="text-align: center">"La exigencia y el inconformismo son la base del progreso y la prosperidad" </h2>

    <div class="biografia">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quae alias accusantium rerum deserunt debitis dicta ratione quaerat aut fugit minus placeat nam unde odit, deleniti sapiente eligendi laborum distinctio!
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo deleniti aliquid nostrum earum ipsa pariatur, mollitia placeat amet commodi optio sint distinctio suscipit dolor qui iure autem rerum. Mollitia, repellendus.   Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio voluptatibus praesentium, ullam laborum expedita, id, at hic est porro provident repellendus incidunt optio itaque voluptas voluptate earum eos. Vero, ut!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta laudantium id consequuntur quisquam dicta, quaerat, cum placeat magni sunt aliquid voluptatem repudiandae est distinctio voluptatum quos ducimus omnis vero veniam?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos totam maiores, repellendus ut vitae perspiciatis animi hic cupiditate? Ex commodi odio fuga quas esse nobis temporibus illo distinctio accusamus provident?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse consequatur, maxime inventore iste nam commodi nobis veniam debitis quis veritatis et ex, a quos ipsum accusantium hic dolor praesentium quas.
        </p></div>

    <div class="biografia">
        <h3>"Retos"</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quae alias accusantium rerum deserunt debitis dicta ratione quaerat aut fugit minus placeat nam unde odit, deleniti sapiente eligendi laborum distinctio!
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo deleniti aliquid nostrum earum ipsa pariatur, mollitia placeat amet commodi optio sint distinctio suscipit dolor qui iure autem rerum. Mollitia, repellendus.   Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio voluptatibus praesentium, ullam laborum expedita, id, at hic est porro provident repellendus incidunt optio itaque voluptas voluptate earum eos. Vero, ut!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta laudantium id consequuntur quisquam dicta, quaerat, cum placeat magni sunt aliquid voluptatem repudiandae est distinctio voluptatum quos ducimus omnis vero veniam?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos totam maiores, repellendus ut vitae perspiciatis animi hic cupiditate? Ex commodi odio fuga quas esse nobis temporibus illo distinctio accusamus provident?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse consequatur, maxime inventore iste nam commodi nobis veniam debitis quis veritatis et ex, a quos ipsum accusantium hic dolor praesentium quas.
        </p></div>

    <div class="biografia">
        <h3>Puedo ayudarte con las siguientes materias</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quae alias accusantium rerum deserunt debitis dicta ratione quaerat aut fugit minus placeat nam unde odit, deleniti sapiente eligendi laborum distinctio!
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo deleniti aliquid nostrum earum ipsa pariatur, mollitia placeat amet commodi optio sint distinctio suscipit dolor qui iure autem rerum. Mollitia, repellendus.   Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio voluptatibus praesentium, ullam laborum expedita, id, at hic est porro provident repellendus incidunt optio itaque voluptas voluptate earum eos. Vero, ut!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta laudantium id consequuntur quisquam dicta, quaerat, cum placeat magni sunt aliquid voluptatem repudiandae est distinctio voluptatum quos ducimus omnis vero veniam?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos totam maiores, repellendus ut vitae perspiciatis animi hic cupiditate? Ex commodi odio fuga quas esse nobis temporibus illo distinctio accusamus provident?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse consequatur, maxime inventore iste nam commodi nobis veniam debitis quis veritatis et ex, a quos ipsum accusantium hic dolor praesentium quas.
        </p></div>
</section>



<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>
        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
