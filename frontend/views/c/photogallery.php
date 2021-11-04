<?php

/* @var $items Items[] */
?>

<section class="tg-sectionspace tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-sectionhead">
                    <div class="tg-sectiontitle">
                        <h2><?= Yii::t('app', 'Photo Gallery') ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-topdestinations">
                                <div class="row">
                                    <?php foreach ($items as $photo): ?>
                                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                            <div class="tg-topdestination">
                                                <figure>
                                                    <a href="<?=$photo->link?>"
                                                       class="tg-btnviewall"><?= Yii::t('app', 'All') ?></a>
                                                    <a href="<?=$photo->link?>"><img
                                                            src="<?= $photo->getGalleryPhoto('360', '473', 'zoomCrop', 'transparent', 'center', 'center') ?>"
                                                            alt="image description"></a>
                                                </figure>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
