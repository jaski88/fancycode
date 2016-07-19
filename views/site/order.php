<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>
<section id="zamowienie" class="bg-color">
    <div class="container">
        <?php $form = ActiveForm::begin(['id' => 'order-form']); ?>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Formularz zamówienia</h2>
                <hr class="star-primary">

                <p>W celu przyspieszenia składania zamówienia przygotowaliśmy dla Państwa formularz, który pozwoli na przyśpieszenie procesu tworzenia strony.</p>
                
                <p>

                    <?php if (Yii::$app->session->hasFlash('orderFormSubmitted')): ?>
                    <div class='alert alert-success'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Zamówienie zostało wysłane. Wkrótce się skontaktujemy.</strong>
                    </div>
                <?php endif; ?>

                </p>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Szata graficzna</h3>
                <!--<hr class="star-primary">-->
            </div>
        </div>
        <div class="row">
            <?php
            //$dir = "web/thumbs/";
            //$images = scandir($dir); 
            ?>
            <?php //$this->widget('application.components.JSPagination', array('rows' => $images, 'file' => 'application.views.site.template_row', 'perPage' => 15));   ?>

            <?php include 'layouts.php'; ?>
        </div>

        <div class="row"  id="templateRow" >
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-xs-12">
                        <?= $form->field($modelOrder, 'template')->textInput(['placeholder' => 'Nazwa szablonu']) ?>
                    </div>
                </div>   
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Dodatkowe opcje</h3>
                <!--<hr class="star-primary">-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-xs-6">
                        <?= $form->field($modelOrder, 'cms')->checkbox() ?>
                    </div>
                    <div class="col-xs-6">
                        <?= $form->field($modelOrder, 'domain')->checkbox() ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <?= $form->field($modelOrder, 'hosting')->checkbox() ?>
                    </div>
                    <div class="col-xs-6">
                        <?= $form->field($modelOrder, 'stats')->checkbox() ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Dane kontaktowe</h3>
                <!--<hr class="star-primary">-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-xs-6">
                        <?= $form->field($modelOrder, 'name')->textInput(['placeholder' => 'Imię i nazwisko']) ?>
                    </div>
                    <div class="col-xs-6">
                        <?= $form->field($modelOrder, 'email')->textInput(['placeholder' => 'Adres email']) ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <?= $form->field($modelOrder, 'www')->textInput(['placeholder' => 'Adres www']) ?>
                    </div>
                </div>   

                <div class="row">
                    <div class="col-xs-12">
                        <?= $form->field($modelOrder, 'body')->textArea(['rows' => 6, 'placeholder' => 'Treść wiadomości']) ?>
                    </div>
                </div>   

                <div class="row">
                    <div class="col-xs-12">
                        <?= Html::submitButton('Wyślij zamówienie', ['class' => 'btn btn-success btn-lg', 'name' => 'order-button']) ?>
                    </div>
                </div>

            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</section>




