<?php

namespace frontend\controllers;

use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use frontend\models\ContactForm;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $contactForm = new ContactForm();
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            if ($contactForm->load(Yii::$app->request->post()) && $contactForm->validate()) {
                $contactForm->save();
                Yii::$app->session->setFlash('success', 'Ketti');
                return $this->refresh();
            } else {
                return $contactForm->errors;
            }
        } else {
            if ($contactForm->load(Yii::$app->request->post()) && $contactForm->validate()) {
                $contactForm->save();
                Yii::$app->session->setFlash('success', 'Ketti');
                return $this->refresh();
            }
            return $this->render('index', [
                'contactForm' => $contactForm,
                'qadamjolar' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'qadamjo'])->id])->limit(4)->all(),
                'newsItems' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'news'])->id])->limit(6)->all(),
                'articleIteam' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'articles'])->id])->limit(6)->all(),
                'photos' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'photogallery'])->id])->limit(9)->all(),
            ]);
        }

    }

    public function actionContact()
    {
        $contactForm = new ContactForm();
        if ($contactForm->load(Yii::$app->request->post()) && $contactForm->validate()) {
            $contactForm->save();
            Yii::$app->session->setFlash('success', 'Ketti');
            return $this->refresh();
        }
        return $this->render('/site/contact', [
            'contactForm' => $contactForm,]);
    }

}
