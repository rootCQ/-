<?php

namespace backend\models;

use Yii;

/**
 * Team: @NKL,NKU
 * Coding by 乔静欣 1711295
 * This is the model class for table "nkl_bbs_info".
 */

/**
 * @property int $bbs_id
 * @property string $bbs_time
 * @property string $bbs_userNickname
 * @property string $bbs_userDescribe
 * @property string $bbs_content
 * @property int $bbs_isSelected
 * @property int $bbs_isSolved
 *
 * @property NklBbsSelectRecord[] $nklBbsSelectRecords
 */
class NklBbsInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nkl_bbs_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bbs_time', 'bbs_userNickname', 'bbs_userDescribe', 'bbs_content'], 'required'],
            [['bbs_time'], 'safe'],
            [['bbs_isSelected', 'bbs_isSolved'], 'integer'],
            [['bbs_userNickname'], 'string', 'max' => 25],
            [['bbs_userDescribe'], 'string', 'max' => 50],
            [['bbs_content'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bbs_id' => 'Bbs ID',
            'bbs_time' => 'Bbs Time',
            'bbs_userNickname' => 'Bbs User Nickname',
            'bbs_userDescribe' => 'Bbs User Describe',
            'bbs_content' => 'Bbs Content',
            'bbs_isSelected' => 'Bbs Is Selected',
            'bbs_isSolved' => 'Bbs Is Solved',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNklBbsSelectRecords()
    {
        return $this->hasMany(NklBbsSelectRecord::className(), ['bbs_id' => 'bbs_id']);
    }
}
