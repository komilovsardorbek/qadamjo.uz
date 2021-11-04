<?php

/* @var $this View */

/* @var $content string */

use frontend\assets\AppAsset;
use frontend\widgets\FooterTemplete;
use frontend\widgets\HeaderWidget;
use yii\helpers\Html;
use yii\web\View;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>
    <?php $this->head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/css/lg-rotate.min.css" integrity="sha512-lENse+XF5kSp7h+shBUOqTCpGUNeomUR+2HI8j2wWWL48vjRyRoCoRFV01skx3iqDk151oRpJFeqxn2nc5Bd7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/css/lightgallery.min.css" integrity="sha512-LeCCaxc1iF2UArsp3NWiOAz1mSLXFXmuiOm2n8gxOSnCXIltE27/NV9yGshWgHSCKNigfDiJUskpRiithdGc3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/css/lg-zoom.min.css" integrity="sha512-SGo05yQXwPFKXE+GtWCn7J4OZQBaQIakZSxQSqUyVWqO0TAv3gaF/Vox1FmG4IyXJWDwu/lXzXqPOnfX1va0+A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/css/lg-thumbnail.min.css" integrity="sha512-GRxDpj/bx6/I4y6h2LE5rbGaqRcbTu4dYhaTewlS8Nh9hm/akYprvOTZD7GR+FRCALiKfe8u1gjvWEEGEtoR6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/css/lightgallery-bundle.min.css" integrity="sha512-rYeyP/7l5e89ap2He13nzhq2ksCEvohMZOdbMVTodaAkkQjDKXd4PVgkHy4AOLlFoJarfc8F2H854DjOQa5qdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="stretched">
<div class="loader">
    <div class="span">
        <div class="location_indicator"></div>
    </div>
</div>
<?php $this->beginBody() ?>

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <? Alert::widget() ?>

    <?= HeaderWidget::widget() ?>

    <?= $content ?>

    <?= FooterTemplete::widget() ?>

</div>

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<?php $this->endBody() ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/lightgallery.umd.min.js" integrity="sha512-bhp5inhvpiZEMQu00PslokW9GxKeMo445BHaXOstEjQjWPzNSIcx+iW8lDZ3Q/0SC5xTX/diqRi780nADXea0w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/lightgallery.min.js" integrity="sha512-DHzj0Pb74Okp1KYj1vRYZ2kZKQtScr+ilk0w8lEjHgU4OvRKOGecRAEkejpBPlzmY1L2pU7m9o1DAk6Tmex/Eg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/plugins/thumbnail/lg-thumbnail.umd.min.js" integrity="sha512-v+/cnd6XTt28XV37rip+QRMB9OTYr90c3TxqNLLZZSH7cfoirS2N6bt9HRvlbyRnhco/vBK5pUCJdaIpS+fuhw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/plugins/zoom/lg-zoom.umd.min.js" integrity="sha512-HUKhPg1xSgASHRlFw8S6QJX7+AsYEf0lV9P/UPrzI5l3nBmyRVOekKoU5rtexB9RQseLgbaelQK4BRWrpCbItw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/plugins/rotate/lg-rotate.min.js" integrity="sha512-MVeCLLOkDgDGLWiI5qYLh5Wnc/q1ukzyMzDlKmqSkWyLBQlB11Xadl+QljnpNwerZ/O902Xt7BiLNUhTyV8AyQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/plugins/rotate/lg-rotate.umd.min.js" integrity="sha512-T7AyH3v5blVN+n7Tr37A3BSSWZ+//5bOd64LZZVhDr/7t8yp0UBFa8EAuNO1D4ghKdgZpB1/8Vw2KxNI2opZcw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>

<script>
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
        licenseKey: 'your_license_key',
        speed: 500,


    });
</script>

</html>
<?php $this->endPage() ?>
