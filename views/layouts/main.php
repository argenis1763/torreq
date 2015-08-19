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
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="">
        <?php $this->beginBody() ?>           

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
