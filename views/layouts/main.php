<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="no-js">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="">
        <?php $this->beginBody() ?>      

        <!-- BEGIN INTRO SECTION -->
        <section id="intro">
            <!-- Slider BEGIN -->
            <div class="page-slider">
                <div class="fullwidthbanner-container revolution-slider">
                    <div class="banner">
                        <ul id="revolutionul">
                            <!-- THE NEW SLIDE -->
                            <li data-transition="fade" data-slotamount="8" data-masterspeed="500" data-delay="9400" data-thumb="">
                                <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                                <img src="<?= Yii::getAlias('@web') ?>/themes/frontend/onepage2/img/bg/bg_slider0.png" alt="">

                                <div class="caption lfb tp-resizeme"
                                     data-x="center"
                                     data-y="-100" 
                                     data-hoffset="0"
                                     data-speed="900" 
                                     data-start="1000"
                                     data-easing="easeOutExpo">
                                    <img style="width: 100%;" src="<?= Yii::getAlias('@web') ?>/themes/frontend/onepage2/img/logo/logo.png" alt="Image 3">
                                </div>
                                <div class="caption lft tp-resizeme"
                                     data-x="center"
                                     data-y="-90"
                                     data-hoffset="0" 
                                     data-speed="900"
                                     data-start="2000"
                                     data-easing="easeOutExpo">
                                    <img style="width: 100%;" src="<?= Yii::getAlias('@web') ?>/themes/frontend/onepage2/img/logo/logo_name.png" alt="Image 4">
                                </div>
                                <div class="caption lft tp-resizeme"
                                     data-x="center"
                                     data-y="bottom"
                                     data-hoffset="0" 
                                     data-speed="900" 
                                     data-start="2500" 
                                     data-easing="easeOutExpo">
                                    <a class="page-scroll" href="#project"><i class="fa fa-angle-down fa-5x"></i></a>
                                </div> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Slider END -->
        </section>
        <!-- END INTRO SECTION -->        

        <!-- BEGIN HEADER -->
        <div class="header">
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <a class="navbar-brand" href="#intro">
                            <img class="logo-scroll" src="<?= Yii::getAlias('@web') ?>/themes/frontend/onepage2/img/logo/logo_default.png" alt="Logo">
                        </a>
                    </div>            

                    <!-- BEGIN NAVIGATION -->
                    <div class="header-navigation pull-right collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            <li class="page-scroll">
                                <a href="#project">PROYECTO</a>
                            </li>                    
                            <li class="page-scroll">
                                <a href="#offices">OFICINAS</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#location">UBICACION</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#video">VIDEO</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#contact">CONTACTO</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END NAVIGATION -->
                </div>        
            </nav>
        </div>
        <!-- Header END -->



        <!-- BEGIN MAIN LAYOUT -->
        <?= $content ?>
        <!-- END MAIN LAYOUT -->

        <a href="#intro" class="go2top"><i class="fa fa-arrow-up"></i></a>        
            <?php $this->endBody() ?>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                Layout.init();
                RevosliderInit.initRevoSlider();
                Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
                Layout.initNavScrolling();
                ContactUs.init();
            });
        </script>        
    </body>
</html>
<?php $this->endPage() ?>
