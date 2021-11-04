<?php
/* @var $items Items[] */
/* @var $newsDataProvider yii\data\ActiveDataProvider */

use yii\widgets\LinkPager;
?>
<div class="tg-wrapper tg-haslayout" id="tg-wrapper">
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
                            <li><a href="index.html">asosiy</a></li>
                            <li class="tg-active">Ziyoratgohla</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class="tg-main tg-sectionspace tg-haslayout" id="tg-main">
        <div class="container">
            <div class="row">
                <div class="tg-listing tg-shopgrid">
                    <?php foreach ($items as $articles): ?>
                    <article class="tg-post tg-verticaltop">
                        <figure><a href=""><img src="<?= $articles->getPhoto1('360', '473', 'zoomCrop', 'transparent', 'center', 'center') ?>"></a></figure>
                        <div class="tg-postcontent">
                            <div class="tg-posttitle">
                                <h2><a href=""><?=$articles->getText1()?></a></h2>
                            </div>
                            <div class="tg-description">
                                <p><?=$articles->getText2()?></p>
                            </div>
                            <a class="tg-btnreadmore" href="<?=$articles->link?>">Read More</a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                    <nav class="tg-pagination">
                        <ul>
                            <li class="tg-active"><a href="javascript:void(0);">1</a></li>
                            <li><a href="javascript:void(0);">2</a></li>
                            <li><a href="javascript:void(0);">3</a></li>
                            <li><a href="javascript:void(0);">4</a></li>
                            <li class="tg-nextpage"><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
</div>
