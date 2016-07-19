<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
//$this->title =  Yii::$app->params['title'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Tworzenie stron internetowych">
        <meta name="author" content="Fancycode.pl">

        <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/css/custom.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php // $this->head()  ?>

        <!-- jQuery -->
        <!--<script src="/js/jquery.js"></script>-->
        <!-- Bootstrap Core JavaScript -->
        <!-- Plugin JavaScript -->
<!--        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="/js/classie.js"></script>
        <script src="/js/cbpAnimatedHeader.js"></script>-->
        <!-- Contact Form JavaScript -->
        <!--<script src="/js/jqBootstrapValidation.js"></script>-->
        <!--<script src="/js/contact.js"></script>-->
        <!-- Custom Theme JavaScript -->
        <!--<script src="/js/order.js"></script>-->
    </head>
    <body id="page-top" class="index">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#page-top">Fancycode.pl</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#home">Home</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#oferta">Oferta</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#cennik">Cennik</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#kontakt">Kontakt</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#zamowienie">Formularz zamówienia</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <?php $this->beginBody() ?>
        <?= $content ?>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-top page-scroll visible-xs visible-sm">
            <a class="btn btn-primary" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
        <!-- Footer -->
        <footer class="text-center">
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Copyright &copy; Fancycode.pl <?= date('Y') ?> | 
                            <i>Email:</i> <a href="mailto:biuro@fancycode.pl?Subject=Zapytanie%20ze%20strony">biuro@fancycode.pl</a> |
                            <i>Tel:</i> (+48) 501 381 543 
                            (Pon - Pt 9:00 - 17:00)

                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?php $this->endBody() ?>
        <!--<script src="/js/jquery.js"></script>-->
        <script src="/js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="/js/classie.js"></script>
        <script src="/js/cbpAnimatedHeader.js"></script>
        <script src="/js/freelancer.js"></script>
        <script src="/js/pagination.js"></script>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-11445195-3', 'auto');
            ga('send', 'pageview');

        </script>

    </body>
</html>
<?php $this->endPage() ?>

