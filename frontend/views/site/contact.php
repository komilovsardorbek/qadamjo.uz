<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use afzalroq\cms\entities\unit\Unit;
use frontend\widgets\ContactWidget;
$this->title = Yii::t('app', 'Contacts');
?>

<section>
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1><?= Yii::t('app' , 'Contacts') ?></h1>
                        <h2></h2>
                        <ol class="tg-breadcrumb">
                            <li><a href="/"><?=Yii::t('app' , 'Home')?></a></li>
                            <li class="tg-active"><?=Yii::t('app', 'Contact')?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main id="tg-main" class="tg-main tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-content" class="tg-content">
                        <ul class="tg-contactinfo">
                            <li>
                                <span class="tg-contactinfoicon"><i class="fas fa-phone"></i></span>
                                <h2><?=Yii::t('app', 'Contacts') ?></h2>
                                <span><a style="color: #676767" href="<?=Unit::get('phone1') ?>"><?=Yii::t('app', 'Fax') ?>: <?=Unit::get('phone1') ?></a></span>
                                <span><a style="color: #676767" href="tel:<?= Unit::get('phone') ?>"><?=Yii::t('app', 'Mobile') ?>: <?= Unit::get('phone') ?></a></span>
                            </li>
                            <li>
                                <span class="tg-contactinfoicon"><i class="fas fa-map-marked-alt"></i></span>
                                <h2><?=Yii::t('app' , 'Our Location')?></h2>
                                <address><?=Unit::get('address')?></address>
                            </li>
                            <li>
                                <span class="tg-contactinfoicon"><i class="fas fa-mail-bulk"></i></span>
                                <h2><?=Yii::t('app' , 'Our mail')?></h2>
                                <strong><a href="<?= Unit::get('email')?>"><?= Unit::get('email')?></a></strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?= ContactWidget::widget(['contactForm' => $contactForm]); ?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98316.67494349595!2d66.89784743703413!3d39.64079951172856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18b7c2e59337%3A0x532c8e039ecc92af!2sRegistan!5e0!3m2!1sen!2s!4v1630785248175!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</section>
