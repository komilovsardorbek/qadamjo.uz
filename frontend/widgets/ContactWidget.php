<?php

namespace frontend\widgets;

use frontend\models\ContactForm;
use yii\bootstrap\Widget;

class ContactWidget extends Widget
{
    public $contactForm;
    public function run()
    {
        return $this->render('contact', [
                'contactForm' => $this->contactForm,
            ]
        );
    }
}

