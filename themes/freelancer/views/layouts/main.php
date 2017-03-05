<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\assets\FreelancerAsset;

FreelancerAsset::register($this);
 
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php echo Html::csrfMetaTags() ?>
        <title><?php echo !empty(Html::encode($this->title)) ? Html::encode($this->title) : "Freelancer - Start Bootstrap Theme"; ?></title>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

       <?php $this->head() ?>
   
    </head>

    <body id="page-top" class="index">

        <?php $this->beginBody() ?>

        <?php echo $content ?>   

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>