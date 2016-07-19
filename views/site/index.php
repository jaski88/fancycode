<?php
/* @var $this yii\web\View */

$this->title = 'Fancycode.pl - Tworzenie stron internetowych';
?>

<!-- Header -->
<header id="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">Fancycode</span>
                    <!--<span class="skills">Tworzenie stron - Hosting - Rejestracja domen</span>-->
                </div>
            </div>
        </div>
    </div>
</header>

<?=
$this->render('offer');
?>

<?= $this->render('price'); ?>

<?=
$this->render('contact', [
    'model' => $model,
]);
?>

<?=
$this->render('order', [
    'modelOrder' => $modelOrder,
]);
?>

<?php // $this->render('footer');   ?>


