<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $username
 * @property int $mobile
 * @property string|null $text
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'mobile'], 'required'],
            [['mobile', 'status', 'created_at', 'updated_at'], 'integer'],
            [['text'], 'string'],
            [['status'],'default', 'value' => false],
            [['username'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'mobile' => 'Mobile',
            'text' => 'Text',
            'status' => 'Status',
            'created_at' => 'Время',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
            ],
        ];
    }
}
