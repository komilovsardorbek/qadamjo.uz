<?php

/* @var $photos Items[] */
/* @var $qadamjolar Items[] */
/* @var $articleIteam Items[] */
/* @var $newsItems Items[] */
/* @var $form yii\widgets\ActiveForm */


use afzalroq\cms\entities\Collections;
use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\Options;
use frontend\widgets\ContactWidget;
use yii\helpers\StringHelper;

$categories = Options::find()
    ->where(['collection_id' => Collections::findOne(['slug' => 'regions'])->id])
    ->andWhere(['!=', 'name_' . Yii::$app->params['cms']['languageIds'][Yii::$app->language], ""])
    ->andWhere(['>', 'depth', 0])
    ->all();

$this->title = 'Qadamjo.uz';

?>
<section class="tg-home tg-homevone">
    <div class="tg-wrapper tg-haslayout" id="tg-wrapper">
        <div class="tg-bannerholder">
            <div class="tg-slidercontent">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h1>Яхшилик қилинг, Aлбатта ,</h1>
                            <form class="tg-formtheme tg-formtrip">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option data-tokens="Destinations">Destinations</option>
                                                <option data-tokens="All Areas">All Areas</option>
                                                <option data-tokens="Bayonne">Bayonne</option>
                                                <option data-tokens="Greenville">Greenville</option>
                                                <option data-tokens="Manhattan">Manhattan</option>
                                                <option data-tokens="Queens">Queens</option>
                                                <option data-tokens="The Heights">The Heights</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option data-tokens="Adventure Type">Adventure Type</option>
                                                <option data-tokens="Ice Adventure Vacations">Ice Adventure Vacations
                                                </option>
                                                <option data-tokens="National Park">National Park</option>
                                                <option data-tokens="Adult Vacations">Adult Vacations</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-select_input">
                                            <input class="tg-select_input-inner" name="firstname"
                                                   placeholder="Search here"
                                                   type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button class="tg-btn" type="submit"><span>find tours</span></button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-homeslider owl-carousel tg-haslayout" id="tg-homeslider">
                <figure class="item" data-vide-bg="/images/video/uzb.mp4" data-vide-options="position: 0% 50%"
                        data-width="100%"></figure>
            </div>
        </div>

        <main class="tg-main tg-haslayout" id="tg-main">
            <div class="tg-listing tg-tourcatagory tg-sectionspace" style=" border-bottom: 1px solid #9999;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-head">
                                <div class="tg-sectiontitle">
                                    <h2><?= Yii::t('app', 'Shrine') ?></h2>
                                    <div class="tg-description"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit,
                                            sed diam consectetuer.</p></div>
                                </div>
                            </div>
                            <?php foreach ($qadamjolar as $key => $qadamjo): ?>
                                <div class="tg-populartour tg-populartourvtwo">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                                            <div class="tg-productdetailsider owl-carousel"
                                                 id="tg-productdetailsider<?= ++$key ?>">
                                                <?php foreach ($qadamjo->photos as $photo): ?>
                                                    <figure class="item">
                                                        <a href="<?=$qadamjo->link?>">
                                                            <img alt="image description"
                                                                 src="<?= $photo->getPhoto('370', '280', 'zoomCrop', 'transparent', 'center', 'center') ?>"></a>
                                                    </figure>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7">
                                            <div class="tg-populartourcontent">
                                                <div class="tg-populartourtitle">
                                                    <h3><a href="<?= $qadamjo->link ?>"><?= $qadamjo->getText1() ?></a>
                                                    </h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p><?= $qadamjo->getText2() ?></p>
                                                    <p><?= StringHelper::truncate(strip_tags($qadamjo->getText3()), 100, '...'); ?></p>
                                                </div>
                                                <div class="tg-populartourfoot">
                                                    <ul class="tg-likeshare">
                                                        <li class="tg-shareicon">
                                                            <a href="#"><i class="fas fa-share-alt"></i><span class="share-link"><?= Yii::t('app' , 'Share') ?></span></a>
                                                            <ul class="tg-share">
                                                                <li><a href="http://www.facebook.com/sharer.php?u=<?= Yii::$app->getUrlManager()->createAbsoluteUrl($qadamjo->link) ?>"><i class="fab fa-facebook-f"></i></a>
                                                                </li>
                                                                <li><a href="https://t.me/share/url?url=<?= Yii::$app->getUrlManager()->createAbsoluteUrl($qadamjo->link) ?>&text=<?= $this->title ?>"><i class="fab fa-telegram-plane"></i></a>
                                                                </li>
                                                                <li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= Yii::$app->getUrlManager()->createAbsoluteUrl($qadamjo->link) ?>&text=<?= $this->title ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:void(0);"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center;margin-top:40px;">
                        <a href="/e/qadamjo">
                            <button class="tg-btn"><span>Barchasini</span></button>
                        </a>
                    </div>
                </div>
            </div>
            <section class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="tg-ourdestination">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tg-verticalmiddle">
                                <figure><img src="/images/slider/qadamjo.jpeg"></figure>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 tg-verticalmiddle">
                                <div class="tg-ourdestinationcontent">
                                    <div class="tg-sectiontitle tg-sectiontitleleft">
                                        <h2 style="white-space: nowrap"><?= Yii::t('app', 'Territorial Identification') ?></h2>
                                    </div>
                                    <div class="tg-description"><p><?= Yii::t('app', 'Vaqf Public Charitable Foundation under the Muslim Board of Uzbekistan') ?></p></div>
                                    <ul class="tg-destinations">
                                        <?php foreach ($categories as $region): ?>
                                            <li>
                                                <a href="<?= $region->link ?>">
                                                    <h3><?= $region->getName() ?></h3>
                                                    <em>(<?=count(\afzalroq\cms\entities\front\OaI::getItemIdsByOption($region->slug))?>)</em>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <div class="tg-sectiontitle">
                                    <h2><?= Yii::t('app', 'Photo Gallery') ?></h2>
                                    <a class="tg-btnvtwo tg-bthree"
                                       href="/e/photogallery"><?= Yii::t('app', 'All photo gallery') ?></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div id="tg-content" class="tg-content">
                                        <div class="tg-topdestinations">
                                            <div class="row">
                                                <?php foreach ($photos as $photo): ?>
                                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                        <div class="tg-topdestination">
                                                            <figure>
                                                                <a href="<?= $photo->link ?>"
                                                                   class="tg-btnviewall"><?= Yii::t('app', 'All') ?></a>
                                                                <a href="<?= $photo->link ?>"><img
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

            <section class="tg-parallax" data-appear-top-offset="600"
                     data-image-src="/images/parallax/bgparallax-01.jpg"
                     data-parallax="scroll">
                <div class="tg-sectionspace tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-sectiontitle tg-sectiontitleleft">
                                    <h2><?= Yii::t('app', 'News') ?></h2>
                                    <a class="tg-btnvtwo" href="/e/news"><?= Yii::t('app', 'All news') ?></a>
                                </div>

                                <div class="tg-populartoursslider tg-populartours owl-carousel"
                                     id="tg-populartoursslider">
                                    <?php foreach ($newsItems as $news): ?>
                                        <div class="item tg-populartour">
                                            <figure>
                                                <a href="<?=$news->link?>"><img alt="image destinations"
                                                                src="<?= $news->getPhoto1('360', '255', 'zoomCrop', 'transparent', 'center', 'center') ?>"></a>
                                            </figure>
                                            <div class="tg-populartourcontent">
                                                <div class="tg-populartourtitle">
                                                    <h3><a href="<?=$news->link?>"><?= $news->getText1()?></a></h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p><?= StringHelper::truncate(strip_tags($news->getText2()), 100, '...'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <div class="tg-sectiontitle">
                                    <h2><?= Yii::t('app', 'Articles') ?></h2>
                                    <a class="tg-btnvtwo tg-bthree" href="/e/articles"><?= Yii::t('app', 'All articles') ?></a>
                                </div>
                            </div>

                            <div class="tg-guidesslider tg-guides owl-carousel" id="tg-guidesslider">
                                <?php foreach ($articleIteam as $articles): ?>
                                    <div class="item tg-guide">
                                        <figure><a href="<?=$articles->link?>"><img alt="image destination"
                                                                            src="<?= $articles->getPhoto1('360', '255', 'zoomCrop', 'transparent', 'center', 'center') ?>"></a>
                                        </figure>
                                        <div class="tg-guidecontent">
                                            <div class="tg-guidecontenthead">
                                                <h3><a href="<?=$articles->link?>"></a><?= $articles->getText1() ?></h3>
                                                <h4>Adventure Master</h4>
                                                <ul class="tg-socialicons tg-socialiconsvtwo">
                                                    <li><a href="javascript:void(0);"><i
                                                                    class="icon-facebook-logo-outline"></i></a>
                                                    </li>
                                                    <li><a href="javascript:void(0);"><i
                                                                    class="icon-instagram-social-outlined-logo"></i></a>
                                                    </li>
                                                    <li><a href="javascript:void(0);"><i
                                                                    class="icon-twitter-social-outlined-logo"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tg-description">
                                                <p><?= $articles->getText2() ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?= ContactWidget::widget(['contactForm' => $contactForm]); ?>
    </div>
</section>