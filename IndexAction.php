<?php

namespace futuretek\options;

use yii\base\Action;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;

/**
 * Class IndexAction
 *
 * @package futuretek\options
 * @author  Martin Bocek
 * @license Apache-2.0
 * @link    http://www.futuretek.cz
 */
class IndexAction extends Action
{
    /**
     * @inheritdoc
     * @throws \yii\base\InvalidParamException
     * @throws \Exception
     * @throws \yii\base\InvalidConfigException
     */
    public function run()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Option::find()->where(['system' => 0]),
            'pagination' => [
                'pageSize' => 9999,
            ],
            'sort' => [
                'defaultOrder' => [
                    'name' => SORT_ASC,
                ],
            ],

        ]);

        return $this->controller->render('@vendor/futuretek/yii2-options/views/index', ['dataProvider' => $dataProvider]);
    }
}