<?php

use afzalroq\cms\entities\Collections;
use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\OaI;
use afzalroq\cms\entities\front\Options;
use afzalroq\cms\entities\unit\Unit;
use common\helpers\MenuHelper;
use yii\helpers\StringHelper;

$lastNews = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'news'])->id])->limit(2)->all();
$lastArticles = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'articles'])->id])->limit(2)->all();
$footerRegions = Options::find()
    ->where(['collection_id' => Collections::findOne(['slug' => 'regions'])->id])
    ->andWhere(['!=', 'name_' . Yii::$app->params['cms']['languageIds'][Yii::$app->language], ""])
    ->andWhere(['>', 'depth', 0])->limit(5)->all();

?>
<footer class="tg-footer tg-haslayout" id="tg-footer">
    <div class="tg-fourcolumns">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="tg-footercolumn tg-widget tg-widgettext">
                        <div class="tg-widgettitle">
                            <h3><?= Yii::t('app', 'Contact') ?></h3>
                        </div>
                        <div class="tg-widgetcontent">
                            <div class="tg-description">
                                <p><?= Yii::t('app', 'The Public Charitable Foundation "Vaqf" under the Muslim Board of Uzbekistan') ?></p>
                            </div>
                            <span><a href="tel:<?= Unit::get('phone') ?>"><?= Unit::get('phone') ?></a></span>
                            <a href="<?= Unit::get('email') ?>"><?= Unit::get('email') ?></a>
                            <ul class="tg-socialicons tg-socialiconsvtwo">
                                <li><a href="<?= Unit::get('facebook') ?>"><i style="font-size: 20px;" class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?= Unit::get('instagram') ?>"><i style="font-size: 20px;" class="fab fa-instagram"></i></a></li>
                                <li><a href="<?= Unit::get('telegram') ?>"><i style="font-size: 20px;" class="fab fa-telegram-plane"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="tg-footercolumn tg-widget tg-widgettravelunews">
                        <div class="tg-widgettitle">
                            <h3><?= Yii::t('app', 'Last articles') ?></h3>
                        </div>
                        <div class="tg-widgetcontent">
                            <ul style="padding: 0">
                                <?php foreach ($lastArticles as $article): ?>
                                    <li>
                                        <figure>
                                            <a href=""><img alt="image destinations"
                                                            src="<?= $article->getPhoto1('63', '63', 'resize', 'transparent', 'center', 'center') ?>"></a>
                                        </figure>
                                        <div class="tg-newcontent">
                                            <h4><a href="javascript:void(0);"><?= $article->getText1() ?></a></h4>
                                            <div class="tg-description">
                                                <p><?= StringHelper::truncate(strip_tags($article->getText2()), 30, '...'); ?></p>
                                            </div>
                                            <!--                                            <time datetime="2017-06-06">Feb 22, 2017</time>-->
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="tg-footercolumn tg-widget tg-widgetdestinations">
                        <div class="tg-widgettitle">
                            <h3><?=Yii::t('app', 'Identification') ?></h3>
                        </div>
                        <div class="tg-widgetcontent">
                            <ul style="padding: 0;">
                                <?php foreach ($footerRegions as $region): ?>
                                    <li><i class="fas fa-map-marker-alt"></i><a href="<?= $region->link ?>"><?= $region->getName() ?></a>
                                        <em>(<?= count(OaI::getItemIdsByOption($region->slug)) ?>)</em>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="tg-footercolumn tg-widget tg-widgettravelunews">
                        <div class="tg-widgettitle">
                            <h3><?= Yii::t('app', 'Last news') ?></h3>
                        </div>
                        <div class="tg-widgetcontent">
                            <ul style="padding: 0">
                                <?php foreach ($lastNews as $news): ?>
                                    <li>
                                        <figure>
                                            <a href="#"><img
                                                        src="<?= $news->getPhoto1('63', '63', 'resize', 'transparent', 'center', 'center'); ?>"></a>
                                        </figure>
                                        <div class="tg-newcontent">
                                            <h4><a href="$"><?= $news->getText1() ?></a></h4>
                                            <div class="tg-description">
                                                <p><?= StringHelper::truncate(strip_tags($news->getText1()), 50, '...'); ?></p>
                                            </div>
                                            <!--                                            <time datetime="2017-06-06">Feb 22, 2017</time>-->
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button id="myBtn" onclick="topFunction()" title="Go to top"><span class="fa fa-long-arrow-up"></span></button>
    <div class="tg-footerbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p><?= Yii::t('app', 'Developed by <a href="{url}">PROACTIVE MEDIA</a>', ['url' => "https://proactive.uz"]) ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
