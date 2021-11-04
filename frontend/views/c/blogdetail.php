<?php
/* @var $item \afzalroq\cms\entities\front\Items */
?>
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <section class="tg-parallax tg-innerbanner tg-innerbannervtwo" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?= $item->getPhoto1('360', '255', 'zoomCrop', 'transparent', 'center', 'center') ?>">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1><?= $item->getText1()?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-blogdetail">
                            <div class="tg-detailbox">
                                <h2><?=$item->getText2()?></h2>
                                <div class="tg-description" style="border-bottom: 1px solid #cccccc">
                                    <p><?= $item->getText3()?></p>
                                </div>
                            </div>
                                <ul class="tg-share_news">
                                <li><a href="http://www.facebook.com/sharer.php?u=<?= Yii::$app->getUrlManager()->createAbsoluteUrl($item->link) ?>"><i class="fab fa-facebook-square"></i></a>
                                </li>
                                <li><a href="https://t.me/share/url?url=<?= Yii::$app->getUrlManager()->createAbsoluteUrl($item->link) ?>&text=<?= $this->title ?>"><i class="fab fa-telegram"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= Yii::$app->getUrlManager()->createAbsoluteUrl($item->link) ?>&text=<?= $this->title ?>"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
