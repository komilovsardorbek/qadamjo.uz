<?php

/* @var $this yii\web\View */
/* @var $aboutus Items[] */
use yii\helpers\Html;

$this->title = 'About';

?>
<section1>
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1><?= Yii::t('app' , 'About us')?></h1>
                        <h2><?=Yii::t('app' , 'Goals and objectives of the Fund')?></h2>
                        <ol class="tg-breadcrumb">
                            <li><a href="/"><?=Yii::t('app' , 'Home')?></a></li>
                            <li class="tg-active"><?= Yii::t('app' , 'About us')?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="tg-main" class="tg-main tg-haslayout">
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-features">
                        <?php foreach ($aboutus as $key => $about): ?>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-feature">
                                <div class="tg-featuretitle">
                                    <h2><span><?= ++$key ?></span><a href="javascript:void(0);"><?=$about->getText1()?></a></h2>
                                </div>
                                <div class="tg-description">
                                    <p><?=$about->getText2()?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
</section1>