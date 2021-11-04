<?php

namespace frontend\controllers;

use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\OaI;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class CController extends Controller
{
    public function actionEntity(string $e)
    {
        if ($e === 'photogallery') {
            $items = Items::find()->where(['entity_id' => Entities::findOne(['slug' => $e])->id])->orderBy('date_0 DESC');
            $countQuery = clone $items;
            $pages = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 9]);
            $models = $items->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('photogallery', [
                'items' => $models,
                'pages' => $pages,
            ]);
        }
        if ($e === 'articles') {
            $items = Items::find()->where(['entity_id' => Entities::findOne(['slug' => $e])->id])->orderBy('date_0 DESC')->all();
            return $this->render('blog', [
                'newsDataProvider' => new ActiveDataProvider([
                    'query' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'articles'])->id]),
                    'pagination' => [
                        'pageSize' => 3,
                    ],
                ]),
                'items' => $items,
            ]);

        }
        if ($e === 'news') {
            $items = Items::find()->where(['entity_id' => Entities::findOne(['slug' => $e])->id])->orderBy('date_0 DESC')->all();
            return $this->render('blog', [
                'items' => $items,
            ]);

        }
        if ($e === 'qadamjo') {
            return $this->render('pages-site', [
                'newsDataProvider' => new ActiveDataProvider([
                    'query' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'qadamjo'])->id]),
                    'pagination' => [
                        'pageSize' => 3,
                    ],
                ]),
            ]);
        }
        return $this->render('/site/about',[
            'aboutus' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'about'])->id])->limit(4)->all(),
        ]);
    }

    public function actionItem(string $e, int $i)
    {
        if ($e === 'photogallery') {
            $item = Items::findOne($i);
            $entity = Entities::findOne(['slug' => $e]);
            return $this->render('gallery-list', [
                'item' => $item,
                'entity' => $entity,
            ]);
        }
        if ($e === 'photo-gallery') {
            return $this->render('photo', [
                'item' => Items::findOne($i),
            ]);
        }
        if ($e === 'articles') {
            $items = Items::findOne($i);
            return $this->render('blogdetail', [
                'item' => $items,
            ]);
        }
        if ($e === 'news') {
            $blogItem = Items::findOne($i);
            return $this->render('blogdetail', [
                'item' => $blogItem,
            ]);
        }
        if ($e === 'qadamjo') {
            $item = Items::findOne($i);
            // oxshashlarini topish version 1.
            $items = OaI::find()->andWhere(['!=', 'item_id', $item->id])->andWhere(['option_id' => OaI::findOne(['item_id' => $item->id])->option_id])->all();
            $items_id = (ArrayHelper::getColumn($items, 'item_id'));
            $theSame = Items::find()->where(['id' => $items_id])->limit(2)->all();
            return $this->render('item', [
                'item' => $item,
                'thesame' => $theSame
            ]);
        }



    }

    public function actionOption(string $c, string $o)
    {

    }
}
