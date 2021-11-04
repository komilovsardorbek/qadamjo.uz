<?php

use afzalroq\cms\entities\front\Menu;
use afzalroq\cms\entities\unit\Unit;
use common\helpers\MenuHelper;
/* @var $one_menu Items[] */

$menuTree = Menu::getMenu('header-menu');

?>
<nav id="menu">
    <ul>
        <li><a href="javascript:void(0);">Home</a>
            <ul>
                <li><a href="index.html">Home ~ Modern</a></li>
                <li><a href="indexv2.html">Home ~ Full Screen</a></li>
                <li><a href="indexv3.html">Home ~ Creative</a></li>
                <li><a href="indexv4.html">Home ~ Simple</a></li>
                <li><a href="indexv5.html">Home ~ Video</a></li>
            </ul>
        </li>
        <li><a href="destinations.html">Destinations</a></li>
        <li><a href="javascript:void(0);">Listings</a>
            <div>
                <ul>
                    <li><a href="gallery.html">list style one</a></li>
                    <li><a href="listingvtwo.html">list style two</a></li>
                    <li><a href="listingvthree.html">list style three</a></li>
                    <li><a href="listingvfour.html">list style four</a></li>
                    <li><a href="listingvfive.html">list style five</a></li>
                    <li><a href="listingvsix.html">list style six</a></li>
                </ul>
                <div class="tg-sliderarea">
                    <h2>Popular Tours</h2>
                    <div class="tg-trendingtripsslider tg-trendingtrips owl-carousel">
                        <div class="item tg-trendingtrip">
                            <figure>
                                <a href="javascript:void(0);">
                                    <img alt="image destinations" src="images/tours/img-05.jpg">
                                    <div class="tg-hover">
                                        <span class="tg-stars"><span></span></span>
                                        <span class="tg-tourduration">7 Days</span>
                                        <span class="tg-locationname">Paris</span>
                                        <div class="tg-pricearea">
                                            <span>from</span>
                                            <h4>$600</h4>
                                        </div>
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="item tg-trendingtrip">
                            <figure>
                                <a href="javascript:void(0);">
                                    <img alt="image destinations" src="images/tours/img-06.jpg">
                                    <div class="tg-hover">
                                        <span class="tg-stars"><span></span></span>
                                        <span class="tg-tourduration">7 Days</span>
                                        <span class="tg-locationname">Paris</span>
                                        <div class="tg-pricearea">
                                            <span>from</span>
                                            <h4>$600</h4>
                                        </div>
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="item tg-trendingtrip">
                            <figure>
                                <a href="javascript:void(0);">
                                    <img alt="image destinations" src="images/tours/img-07.jpg">
                                    <div class="tg-hover">
                                        <span class="tg-stars"><span></span></span>
                                        <span class="tg-tourduration">7 Days</span>
                                        <span class="tg-locationname">Paris</span>
                                        <div class="tg-pricearea">
                                            <span>from</span>
                                            <h4>$600</h4>
                                        </div>
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="item tg-trendingtrip">
                            <figure>
                                <a href="javascript:void(0);">
                                    <img alt="image destinations" src="images/tours/img-08.jpg">
                                    <div class="tg-hover">
                                        <span class="tg-stars"><span></span></span>
                                        <span class="tg-tourduration">7 Days</span>
                                        <span class="tg-locationname">Paris</span>
                                        <div class="tg-pricearea">
                                            <span>from</span>
                                            <h4>$600</h4>
                                        </div>
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li><a href="javascript:void(0);">Pages</a>
            <ul>
                <li><a href="faqs.html">FAQ’s</a></li>
                <li><a href="packages.html">Table</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="contactus.html">Contact us</a></li>
                <li><a href="billingdetail.html">Billing Detail</a></li>
                <li><a href="404error.html">404 Error</a></li>
                <li><a href="comingsoon.html">Coming Soon</a></li>
                <li><a href="cart.html">cart</a></li>
                <li>
                    <a href="javascript:void(0);">Tours</a>
                    <ul>
                        <li><a href="tourcatagory.html">Tour Catagory</a></li>
                        <li><a href="tourbookingdetail.html">Tour Detail</a></li>
                        <li><a href="tourpaymentdetail.html">Tour Payment</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="javascript:void(0);">Shop</a>
            <ul>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="shopdetail.html">Shop Detail</a></li>
                <li><a href="cart.html">Cart</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0);">Blog</a>
            <ul>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="blogdetail.html">Blog Detail</a></li>
            </ul>
        </li>
    </ul>
</nav>
<header class="tg-header tg-haslayout" id="tg-header">
    <div class="container-fluid">
        <div class="row">
            <div class="tg-navigationarea tg-headerfixed">
                <strong class="tg-logo"><a href="/"><img alt="company logo here" src="/images/logo.png"></a></strong>
                <div class="tg-socialsignin">
                    <ul class="tg-socialicons">
                        <li><a href="<?= Unit::get('facebook') ?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?= Unit::get('instagram') ?>"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li><a href="<?= Unit::get('telegram') ?>"><i class="fab fa-telegram-plane"></i></a></li>
                    </ul>
                    <div class="tg-userbox">
                        <a class="tg-btn" href="/site/contact"
                           id="tg-btnsignin"><span><?= Yii::t('app', 'Contacts') ?></span></a>
                    </div>
                </div>
                <nav class="tg-nav" id="tg-nav">
                    <div class="navbar-header">
                        <a class="navbar-toggle collapsed" href="#menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse tg-navigation" id="tg-navigation">
                        <ul>
                            <?php foreach ($menuTree as $i => $one_menu): ?>
                                <?php if (empty($menu['children'])): ?>
                                    <li class="">
                                        <a href="<?= $one_menu['link'] ?>"><?= $one_menu['content'] ?></a>
                                    </li>
                                <?php else: ?>
                                    <li class="menu-item-has-children">
                                        <a href="#"><?= $menu['content'] ?></a>
                                        <ul class="sub-menu">
                                            <?php foreach ($menu['children'] as $child): ?>
                                                <li><a href="<?= $child['link'] ?>"><?= $child['content'] ?> </a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <li class="menu-item-has-children menu-item-has-mega-menu">
                                <a href="">Ziyoratgohla</a>
                                <div class="mega-menu">
                                    <ul>
                                        <li><a href="">Toshkent</a></li>
                                        <li><a href="">Samarqand</a></li>
                                        <li><a href="">Buxoro</a></li>
                                        <li><a href="">Navoiy</a></li>
                                        <li><a href="">Toshket</a></li>
                                        <li><a href="">Surxandaryo</a></li>
                                    </ul>
                                    <div class="tg-sliderarea">
                                        <h2>Ziyoratgohlar</h2>
                                        <div class="tg-trendingtripsslider tg-trendingtrips owl-carousel">
                                            <div class="item tg-trendingtrip">
                                                <figure>
                                                    <a href="javascript:void(0);">
                                                        <img alt="image destinations"
                                                             src="/images/tours/img-05.jpg">
                                                        <div class="tg-hover">
                                                        </div>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="item tg-trendingtrip">
                                                <figure>
                                                    <a href="javascript:void(0);">
                                                        <img alt="image destinations"
                                                             src="/images/tours/img-06.jpg">
                                                        <div class="tg-hover">
                                                        </div>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="item tg-trendingtrip">
                                                <figure>
                                                    <a href="javascript:void(0);">
                                                        <img alt="image destinations"
                                                             src="/images/tours/img-07.jpg">
                                                        <div class="tg-hover">
                                                        </div>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="item tg-trendingtrip">
                                                <figure>
                                                    <a href="javascript:void(0);">
                                                        <img alt="image destinations"
                                                             src="/images/tours/img-08.jpg">
                                                        <div class="tg-hover">
                                                        </div>
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                <ul class="sub-menu">
                                    <li><a href="">FAQ’s</a></li>
                                    <li><a href="">Table</a></li>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Contact us</a></li>
                                    <li><a href="">Billing Detail</a></li>
                                    <li><a href="">404 Error</a></li>
                                    <li><a href="">Coming Soon</a></li>
                                    <li><a href="">cart</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Tours</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Tour Catagory</a></li>
                                            <li><a href="">Tour Detail</a></li>
                                            <li><a href="">Tour Payment</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

