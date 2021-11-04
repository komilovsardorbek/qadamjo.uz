<?php
/* @var $newsDataProvider yii\data\ActiveDataProvider */
/* @var $qadamjolar \afzalroq\cms\entities\front\Items[] */
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
?>

<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                                            <option data-tokens="Ice Adventure Vacations">Ice Adventure Vacations</option>
                                            <option data-tokens="National Park">National Park</option>
                                            <option data-tokens="Adult Vacations">Adult Vacations</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="tg-select_input">
                                        <input type="text" name="firstname" class="tg-select_input-inner" placeholder="Search here">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="tg-btn" type="submit"><span>find tours</span></button>
                                </div>
                            </fieldset>
                        </form>
                        <ol class="tg-breadcrumb" style="margin-top:50px;">
                            <li><a href="/">asosiy</a></li>
                            <li class="tg-active">Ziyoratgohla</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <?php $qadamjolar = $newsDataProvider->getModels(); ?>
                    <?php foreach ($qadamjolar as $key => $qadamjo): ?>
                        <div class="tg-populartour tg-populartourvtwo">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                                    <div class="tg-productdetailsider owl-carousel"
                                         id="tg-productdetailsider<?= ++$key ?>">
                                        <?php foreach ($qadamjo->photos as $photo): ?>
                                            <figure class="item">
                                                <a href="">
                                                    <img alt="image description"
                                                         src="<?= $photo->getPhoto('370', '280', 'zoomCrop', 'transparent', 'center', 'center') ?>"></a>
                                            </figure>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7">
                                    <div class="tg-populartourcontent">
                                        <div class="tg-populartourtitle">
                                            <h3><a href="<?=$qadamjo->link?>"><?= $qadamjo->getText1() ?></a>
                                            </h3>
                                        </div>
                                        <div class="tg-description">
                                            <p><?= $qadamjo->getText2() ?></p>
                                            <p><?= StringHelper::truncate(strip_tags($qadamjo->getText3()), 100, '...'); ?></p>
                                        </div>
                                        <div class="tg-populartourfoot">
                                            <ul class="tg-likeshare">
                                                <li class="tg-shareicon">
                                                    <a href="javascript:void(0);"><i
                                                                class="icon-share-button-outline"></i><span>share</span></a>
                                                    <ul class="tg-share">
                                                        <li><a href="javascript:void(0);"><i
                                                                        class="icon-twitter"></i></a></li>
                                                        <li><a href="javascript:void(0);"><i
                                                                        class="icon-facebook"></i></a>
                                                        </li>
                                                        <li><a href="javascript:void(0);"><i
                                                                        class="icon-pinterest"></i></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <nav class="tg-pagination">
                        <?= LinkPager::widget([
                            'pagination' => $newsDataProvider->getPagination(),
                            'options' => [
                                'class' => 'pagination',
                            ],
                            'linkContainerOptions' => [
                                'class' => 'page-item'
                            ],
                            'linkOptions' => [
                                'class' => 'page-link'
                            ],
                            'activePageCssClass' => '',
                            'firstPageLabel' => false,
                            'lastPageLabel' => false,
                            'prevPageLabel' => '',
                            'nextPageLabel' => '<i class="fa fa-angle-right"></i>',
                            'maxButtonCount' => 3,
                            'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link'],
                        ]); ?>
<!--                        <ul>-->
<!--                            <li class="tg-active"><a href="javascript:void(0);">1</a></li>-->
<!--                            <li><a href="javascript:void(0);">2</a></li>-->
<!--                            <li><a href="javascript:void(0);">3</a></li>-->
<!--                            <li><a href="javascript:void(0);">4</a></li>-->
<!--                            <li class="tg-nextpage"><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>-->
<!--                        </ul>-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
