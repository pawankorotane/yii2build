<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[UserType]].
 *
 * @see UserType
 */
class UserTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return UserType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}