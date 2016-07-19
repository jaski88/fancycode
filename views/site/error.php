<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

//$this->title[] = 'Błąd 404';
?>


<!-- About Section -->
<section id="about" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Błąd 404</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <p>
                    <?= nl2br(Html::encode($message)) ?>
                </p>

            </div>
        </div>
    </div>
</section>


