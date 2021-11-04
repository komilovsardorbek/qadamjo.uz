<?php
/* @var $item \afzalroq\cms\entities\front\Items */
/* @var $theSame \afzalroq\cms\entities\front\Items[] */

?>

<div id="tg-search" class="tg-search">
    <button type="button" class="close"><i class="icon-cross"></i></button>
    <form>
        <fieldset>
            <div class="form-group">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1630010902405!6m8!1m7!1sCAoSLEFGMVFpcE45c1RUeE1aLUdkOFNMSkhySTZQMmlQQlBXaXFseXRmWDNISU5O!2m2!1d39.6549909!2d66.9753092!3f188.78662591252814!4f-15.280801371085815!5f0.7820865974627469"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </fieldset>
    </form>

</div>
<div id="tg-view" class="tg-search">
    <button type="button" class="close"><i class="icon-cross"></i></button>
    <form>
        <fieldset>
            <div class="form-group">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1630011128525!6m8!1m7!1sCAoSLEFGMVFpcE9ydl9QVk1SZEMwRjZYQmxNM1NnMktEaFlVV3phNGw4cjdFblNE!2m2!1d39.65480196981257!2d66.97571665048599!3f45.70653007148372!4f2.0024036869787807!5f0.7820865974627469"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </fieldset>
    </form>

</div>
<div id="tg-map" class="tg-search">
    <button type="button" class="close"><i class="icon-cross"></i></button>
    <form>
        <fieldset>
            <div class="form-group">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98296.94503051674!2d66.97572042012658!3d39.65467599046815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d191960077df7%3A0x487636d9d13f2f57!2sSamarkand%2C%20Uzbekistan!5e0!3m2!1sen!2s!4v1630011340932!5m2!1sen!2s"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </fieldset>
    </form>

</div>


<section class="tg-home tg-homevtwo">

    <div id="tg-" class="tg-wrapper tg-haslayout">

        <div id="tg-homebannerslider" class="tg-homebannerslider tg-haslayout">
            <div id="tg-homeslider" class="tg-homeslider tg-homeslidervtwo owl-carousel tg-haslayout">
                <?php foreach ($item->photos as  $photo): ?>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= $photo->getPhoto('1900', '900', 'zoomCrop', 'transparent', 'center', 'center') ?>" alt="First slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </figure>
               <?php endforeach; ?>
            </div>
            <!--************************************
                    Main Start
            *************************************-->
            <main id="tg-main" class="tg-main tg-haslayout">
                <div class="itea_deegri" style="padding:70px 0;">
                    <div class="container">
                        <div class="tg-populartour tg-populartourvtwo">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9">
                                    <div class="tg-populartourcontent">
                                        <div class="tg-populartourtitle">
                                            <h3><a href=""><?= $item->getText1()?></a></h3>
                                        </div>
                                        <div class="tg-description">
                                            <p><?=$item->getText2()?></p>
                                            <p><?=$item->getText3()?></p>
                                        </div>
                                        <div class="tg-populartourfoot">
                                            <ul class="tg-likeshare">
                                                <li class="tg-shareicon">
                                                    <a href="javascript:void(0);"><i
                                                                class="icon-share-button-outline"></i><span>share</span></a>
                                                    <ul class="tg-share">
                                                        <li><a href="javascript:void(0);"><i class="icon-twitter"></i></a>
                                                        </li>
                                                        <li><a href="javascript:void(0);"><i class="icon-facebook"></i></a>
                                                        </li>
                                                        <li><a href="javascript:void(0);"><i class="icon-pinterest"></i></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="google_map-wrapper">
                                        <a id="tg-btnsignin" class="google_box" href="#tg-search"><span><img style="width: 8rem;" src="/images/google/360.svg" alt=""></span></a>
                                    </div>
                                    <div class="google_map-wrapper">
                                        <a id="tg-btnsignin" class="google_box" href="#tg-view"><span><img style="width: 8rem; padding: 10px 0;" src="/images/google/streetroat.svg" alt=""></span></a>
                                    </div>
                                    <div class="google_map-wrapper">
                                        <a id="tg-btnsignin" class="google_box" href="#tg-map"><span><img style="width: 8rem;" src="/images/google/google.svg" alt=""></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thesame" style="padding-bottom:50px;">
                    <div class="container">
                        <section class="tg-aboutus">
                            <?php  if(isset($theSame[0])): ?>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="row">
                                            <img class="d-block w-100" src="<?= $theSame[0]->getGalleryPhoto('520', '500', 'zoomCrop', 'transparent', 'center', 'center') ?>" alt="First slide">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="row">
                                            <div class="tg-textbox">
                                                <div class="tg-sectiontitle">
                                                    <h2><?=$theSame[0]->getText1()?></h2>
                                                </div>
                                                <div class="tg-description">
                                                    <p>when an unknown printer took a galley of type and scrambled it to make a type
                                                        specimen book. It has survived not only five centuries.</p>
                                                    <p>Electronic typesetting, remaining essentially unchanged. It was popularised
                                                        in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                                        passages, and more recently with desktop publishing software like Aldus
                                                        PageMaker including versions of Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php endif;?>
                            <?php  if(isset($theSame[1])): ?>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
                                    <div class="row">
                                        <img class="d-block w-100" src="<?= $theSame[1]->getGalleryPhoto('520', '500', 'zoomCrop', 'transparent', 'center', 'center') ?>" alt="First slide">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
                                    <div class="row">
                                        <div class="tg-textbox">
                                            <div class="tg-sectiontitle">
                                                <h2><?=$theSame[1]->getText1()?></h2>
                                            </div>
                                            <div class="tg-description">
                                                <p>when an unknown printer took a galley of type and scrambled it to make a type
                                                    specimen book. It has survived not only five centuries.</p>
                                                <p>Electronic typesetting, remaining essentially unchanged. It was popularised
                                                    in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                                    passages, and more recently with desktop publishing software like Aldus
                                                    PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;?>


                        </section>
                    </div>
                </div>


            </main>

        </div>
</section>

