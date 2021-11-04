<?php
/* @var $contactForm Items[] */
use himiklab\yii2\recaptcha\ReCaptcha2;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<?php $form = ActiveForm::begin(['id' => 'contact-form', 'action' => Url::to(['/site/index'])]); ?>
    <section>
        <div class="footer_email">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label><?= Yii::t('app', 'Enter your name') ?><sup>*</sup></label>
                            <?= $form->field( $contactForm, 'name')->textInput(['class' => 'form-control'])->label(false) ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label><?= Yii::t('app', 'Enter your phone number') ?><sup>*</sup></label>
                            <?= $form->field($contactForm, 'phone')->textInput(['class' => 'form-control'])->label(false) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"
                         style="text-align:center; padding-bottom:40px;">
                        <?= $form->field($contactForm, 'body')->textarea(['class' => 'form-control-area', 'placeholder' => Yii::t('app', 'Enter Your Message')])->label(false) ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <?= $form->field($contactForm, 'reCaptcha')->widget(ReCaptcha2::class, ['options' => ['class' => 'form-control mb-30']])->label(false) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center; padding-bottom:40px;">
                        <?= Html::submitButton(Yii::t('app', 'Submit').'<span></span>', ['class' => 'tg-btn', 'name' => 'contact-button']) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php ActiveForm::end(); ?>


