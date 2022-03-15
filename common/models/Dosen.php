<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property int $id
 * @property int $nidn
 * @property string $tanggal_lahir
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nidn', 'tanggal_lahir'], 'required'],
            [['nidn'], 'integer'],
            [['tanggal_lahir'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nidn' => 'NIDN',
            'tanggal_lahir' => 'Tanggal Lahir',
        ];
    }
}
