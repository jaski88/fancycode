<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

//$this->title = 'Contact';
?>

<!--Contact Section -->
<section id="kontakt">
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-12 text-center">
                <h2>Kontakt</h2>
                <hr class = "star-primary">
            </div>
        </div>
        <div class = "row">

            <div class = "col-lg-12">
                <p>Zapraszamy do kontaktu przez formularz kontaktowy lub za pomocą tradycyjnej poczty email.
                    Z chęcią odpowiemy na Państwa pytania.</p>
            </div>


            <div class = "col-lg-8">
                <h3>Formularz kontaktowy</h3>

                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                    <div class='alert alert-success'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Wiadomość została wysłana.</strong>
                    </div>
                <?php endif; ?>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <div class="row">
                    <div class="col-xs-6">
                        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Imię i nazwisko']) ?>
                    </div>
                    <div class="col-xs-6">
                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'Adres email']) ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <?= $form->field($model, 'body')->textArea(['rows' => 6, 'placeholder' => 'Treść wiadomości']) ?>
                    </div>
                </div>   

                <div class="row">
                    <div class="col-xs-12">
                        <?= Html::submitButton('Wyślij', ['class' => 'btn btn-success btn-lg', 'name' => 'contact-button']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>
            </div>

            <div class = "col-lg-4">
                <h3>Dane kontaktowe</h3>
                <p><i>Tel:</i> (+48) 501 381 543 </p>
                <p><i>Email:</i> <a href="mailto:biuro@fancycode.pl?Subject=Zapytanie%20ze%20strony">biuro@fancycode.pl</a></p>
                <p>Zapraszamy do kontaktu od poniedziałku do piątku w godzinach 9:00 - 17:00.</p>
                
                <p><img class="img" src="/img/contact.jpg" /></p>

            </div>
        </div>
    </div>
</section>