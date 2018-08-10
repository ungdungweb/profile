<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoivien".
 *
 * @property int $maHV
 * @property string $tenHV
 */
class Hoivien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hoivien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['maHV', 'tenHV'], 'required'],
            [['maHV'], 'integer'],
            [['tenHV'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'maHV' => 'Ma Hv',
            'tenHV' => 'Ten Hv',
        ];
    }
}
