<?php

/* @var $items \afzalroq\cms\entities\front\Items */
/* @var $item \afzalroq\cms\entities\front\Items */
/* @var $pages \yii\data\Pagination */

?>


<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll"
         data-image-src="images/parallax/bgparallax-05.jpg">
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Photo Gallery</h1>
                    <!--                        <h2>Donec id elit non mi porta gravida at eget metus</h2>-->
                    <ol class="tg-breadcrumb">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li class="tg-active">Photo Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<section >
    <div id="lightgallery" style="padding:23px">
        <?php foreach ($item->photos as $photo): ?>
            <a href="<?= $photo->getPhoto('1024', '800', 'scaleResize', 'transparent', 'center', 'center') ?>">
                <img src="<?= $photo->getPhoto('370', '280', 'zoomCrop', 'transparent', 'center', 'center') ?>"/>
            </a>
        <?php endforeach; ?>
    </div>
</section>
